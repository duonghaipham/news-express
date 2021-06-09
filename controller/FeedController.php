<?php
class FeedController extends BaseController {

    private $feed_model;
    private $user_model;

    public function __construct() {
        $this->model('FeedModel');
        $this->model('UserModel');
        $this->feed_model = new FeedModel();
        $this->user_model = new UserModel();
    }

    public function index() {
        if (isset($_GET['keyword']))
            header("Location:" . URLROOT . "?controller=feed&action=search&keyword=" . $_GET['keyword']);
        else {
            $head_news = $this->feed_model->get_lasts(6);
            $this->view('index', ['head_news' => $head_news]);
        }
    }

    public function view_() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $detailed_post = $this->feed_model->get_by_id($_GET['id_feed']);
            $this->view('view-post', ['post' => $detailed_post]);
        }
    }

    public function create() {
        if (isset($_SESSION['username']))
            $this->view('create-post', []);
        else
            header('location:' . URLROOT);
    }

    public function post() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if (isset($_FILES['image'])) {
                $img_name = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];
                $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);

                $hashed_img_name = hash_file('md5', $tmp_name);
                $new_img_name = "data/img/$hashed_img_name.$img_ext";
                move_uploaded_file($tmp_name, $new_img_name);

                $this->feed_model->insert(
                    trim($_POST['title']),
                    trim($_POST['summary']),
                    trim($_POST['content']),
                    "$hashed_img_name.$img_ext",
                    $_SESSION['username']
                );
                header('location:' . URLROOT);
            }
        }
    }

    public function load_edit() {
        if (isset($_SESSION['username'])) {
            $detailed_post = $this->feed_model->get_by_id($_GET['id_feed']);
            if ($_SESSION['username'] == $detailed_post['username'])
                $this->view('edit-post', ['post' => $detailed_post]);
            else
                header('Location:' . URLROOT);
        }
        else
            header('Location:' . URLROOT);
    }

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if ($_FILES['image']['error'] == 0) {
                $img_name = $_FILES['image']['name'];
                $tmp_name = $_FILES['image']['tmp_name'];
                $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);

                $hashed_img_name = hash_file('md5', $tmp_name);
                $new_img_name = "data/img/$hashed_img_name.$img_ext";
                move_uploaded_file($tmp_name, $new_img_name);
                $url_figure = "$hashed_img_name.$img_ext";
            }

            $this->feed_model->edit(
                trim($_GET['id_feed']),
                trim($_POST['title']),
                trim($_POST['summary']),
                trim($_POST['content']),
                $url_figure ?? ''
            );
            header("Location:" . URLROOT);
        }
    }

    public function search() {
        if (isset($_GET['keyword'])) {
            $search_result = $this->feed_model->search($_GET['keyword']);
            $this->view('search-post', ['feed' => $search_result]);
        }
    }
}