<?php
class UserController extends BaseController {
    private $user_model;
    private $feed_model;

    public function __construct() {
        $this->model('UserModel');
        $this->model('FeedModel');
        $this->user_model = new UserModel();
        $this->feed_model = new FeedModel();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = array(
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'remember' => trim($_POST['remember'])
            );

            $login_user = $this->user_model->login($data['username'], $data['password']);
            if ($login_user) {
                $this->create_user_session($login_user);
                if ($data['remember'] == 'on') {
                    $expired = time() + 30 * 24 * 60 * 60;
                    setcookie('account', $data['username'] . '_' . $data['password'], $expired);
                }
            }
            else
                header('location:' . URLROOT);
        }
    }

    public function signup() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = array(
                'username' => trim($_POST['username']),
                'password' => trim($_POST['signup_password']),
                're_password' => trim($_POST['re_password']),
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'birthday' => trim($_POST['birthday']),
                'gender' => trim($_POST['gender']) == 'male' ? 'TRUE' : 'FALSE'
            );
            $this->user_model->signup($data);
            header('location:' . URLROOT);
        }
    }

    public function username_available() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            echo $this->user_model->validate_username(trim($_POST['username']));
        }
    }

    public function logout() {
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['name']);
        header('location:' . URLROOT);
    }

    public function create_user_session($curr_user) {
        $_SESSION['username'] = $curr_user['USERNAME'];
        $_SESSION['email'] = $curr_user['EMAIL'];
        $_SESSION['name'] = $curr_user['NAME'];
        header('location:' . URLROOT);
    }

    public function get_detail() {
        if (isset($_SESSION['username'])) {
            $profile_data = $this->user_model->get_detail($_SESSION['username']);
            $feed_data = $this->feed_model->get_by_user($_SESSION['username']);
            $this->view('view-profile', ['profile' => $profile_data, 'feed' => $feed_data]);
        }
    }
}