<?php
class UserModel {
    public function login($username, $password) {
        $db_conn = new Database();
        $db_conn->connect();
        $validation_query = "SELECT * FROM USER_ WHERE USERNAME = '$username'";
        $data = $db_conn->query($validation_query);
        $db_conn->disconnect();
        if ($data->num_rows > 0) {
            $curr_user = $data->fetch_assoc();
//            if (password_verify($curr_user['password'], $password))
            if ($curr_user['PASSWORD'] == $password)
                return $curr_user;
            else
                return false;
        }
    }
}