<?php
class UserController extends BaseController {
    private $user_model;

    public function login() {
        $this->model('UserModel');
        $this->user_model = new UserModel();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = array(
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password'])
            );

            $login_user = $this->user_model->login($data['username'], $data['password']);
            if ($login_user)
                $this->create_user_session($login_user);
            else
                header('location:' . 'http://localhost/news-express/index.php');
        }
    }

    public function logout() {
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        unset($_SESSION['name']);
        header('location:' . 'http://localhost/news-express/index.php');
    }

    public function create_user_session($curr_user) {
        $_SESSION['username'] = $curr_user['USERNAME'];
        $_SESSION['email'] = $curr_user['EMAIL'];
        $_SESSION['name'] = $curr_user['NAME'];
        header('location:' . 'http://localhost/news-express/index.php');
    }
}