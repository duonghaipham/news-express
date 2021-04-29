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

    public function getById($username) {
        $db_conn = new Database();
        $db_conn->connect();
        $select_query = "SELECT * FROM USER_ WHERE USERNAME = '$username'";
        $result = $db_conn->query($select_query);
        $db_conn->disconnect();

        return $result;
    }

    public function signup($data) {
        $db_conn = new Database();
        $db_conn->connect();
        $insert_query = "INSERT INTO USER_ " .
                        "VALUES ('" .
                        $data['username'] . "', '" .
                        $data['password'] . "', '" .
                        $data['name'] . "', " .
                        'NULL' . ", '" .
                        $data['email'] . "', " .
                        'NOW()' . ", '" .
                        $data['birthday'] . "', " .
                        $data['gender'] . ', NULL);';

        $db_conn->query($insert_query);
        $db_conn->disconnect();
    }

    public function validate_username($username) {
        $db_conn = new Database();
        $db_conn->connect();
        $select_query = "SELECT USERNAME FROM USER_ WHERE USERNAME = '$username'";
        $usernames = $db_conn->query($select_query);
        $db_conn->disconnect();

        if ($usernames->num_rows > 0)
            return false;
        return true;
    }
}