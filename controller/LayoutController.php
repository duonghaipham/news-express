<?php
class LayoutController extends BaseController {
    private $feed_model;
    private $user_model;
    public function __construct() {
        $this->model('FeedModel');
        $this->model('UserModel');
        $this->feed_model = new FeedModel();
        $this->user_model = new UserModel();
    }

    public function index() {
        $head_news = $this->feed_model->getLasts(6);
        $this->view('index', ['head_news_key' => $head_news]);
    }

    public function detail() {
        $id_feed = $_GET['id_feed'];
        $detailed_post = $this->feed_model->getById($id_feed)->fetch_assoc();
        $detailed_post['NAME'] = $this->user_model->getById($detailed_post['USERNAME'])->fetch_assoc()['NAME'];
        $this->view('detail', ['post' => $detailed_post]);
    }

    public function publishment() {
        $this->view('publishment', []);
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

                $data = array(
                    'title' => $_POST['title'],
                    'summary' => $_POST['summary'],
                    'content' => $_POST['content'],
                    'username' => $_SESSION['username'],
                    'url_figure' => "$hashed_img_name.$img_ext"
                );

                $this->feed_model->insert($data);
                header('location:' . URLROOT);
            }
        }
    }


}