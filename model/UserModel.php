<?php
class UserModel {

    private $db_conn;

    public function __construct() {
        $this->db_conn = new Database();
        $this->db_conn->connect();
    }

    public function login($username, $password) {
        $validation_query = "SELECT * FROM USER_ WHERE USERNAME = '$username'";
        $data = $this->db_conn->query($validation_query);
        if ($data->num_rows > 0) {
            $curr_user = $data->fetch_assoc();
//            if (password_verify($curr_user['password'], $password))
            if ($curr_user['PASSWORD'] == $password)
                return $curr_user;
            else
                return false;
        }
    }

    public function get_by_id($username) {
        $select_query = "SELECT * FROM USER_ WHERE USERNAME = '$username'";
        $result = $this->db_conn->query($select_query);

        return $result;
    }

    public function signup($data) {
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

        $this->db_conn->query($insert_query);
    }

    public function validate_username($username) {
        $select_query = "SELECT USERNAME FROM USER_ WHERE USERNAME = '$username'";
        $usernames = $this->db_conn->query($select_query);

        if ($usernames->num_rows > 0)
            return false;
        return true;
    }

    public function get_detail($username) {
        $get_profile_query = "SELECT * FROM USER_ WHERE USERNAME = '$username'";
        $result = $this->db_conn->query($get_profile_query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return array(
                'name' => $row['NAME'],
                'phone' => $row['PHONE'],
                'email' => $row['EMAIL'],
                'birthday' => $row['BIRTHDAY'],
                'gender' => $row['GENDER'],
                'avatar' => $row['AVATAR']
            );
        }
        return false;
    }

    public function update($username, $name, $email, $phone, $birthday, $gender, $avatar) {
        if (!empty($avatar)) {
            $update_avatar_query = "UPDATE USER_ " .
                                   "SET AVATAR='$avatar' " .
                                   "WHERE USERNAME='$username'";
            $this->db_conn->query($update_avatar_query);
        }
        $update_user_query = "UPDATE USER_ " .
                             "SET NAME='$name', EMAIL='$email', PHONE='$phone', BIRTHDAY='$birthday', GENDER=$gender " .
                             "WHERE USERNAME='$username'";
        $this->db_conn->query($update_user_query);
    }

    public function update_password($username, $old_password, $new_password) {
        $check_old_query = "SELECT * " .
                           "FROM USER_ " .
                           "WHERE USERNAME = '$username' AND PASSWORD = '$old_password'";
        $result = $this->db_conn->query($check_old_query);
        if ($result->num_rows == 1) {
            $update_password_query = "UPDATE USER_ " .
                                     "SET PASSWORD = '$new_password' " .
                                     "WHERE USERNAME = '$username'";
            $this->db_conn->query($update_password_query);
            return true;
        }
        else
            return false;
    }
}