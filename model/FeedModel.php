<?php
class FeedModel {

    private $db_conn;

    public function __construct() {
        $this->db_conn = new Database();
        $this->db_conn->connect();
    }

    public function get_by_id($id_feed) {
        $get_feed_query = "SELECT * FROM feed WHERE ID_FEED = $id_feed";
        $result = $this->db_conn->query($get_feed_query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $data = array(
                'id_feed' => $row['ID_FEED'],
                'title' => $row['TITLE'],
                'summary' => $row['SUMMARY'],
                'content' => $row['CONTENT'],
                'url_figure' => $row['URL_FIGURE'],
                'published_ts' => $row['PUBLISHED_TS'],
                'username' => $row['USERNAME']
            );
            $get_name_query = "SELECT NAME FROM user_ WHERE USERNAME = '" . $data['username'] . "'";
            $data['name'] = $this->db_conn->query($get_name_query)->fetch_assoc()['NAME'];
            return $data;
        }
        return false;
    }

    public function get_lasts($amount) {
        $size_query = "SELECT * FROM FEED ORDER BY ID_FEED DESC LIMIT $amount";
        $result = $this->db_conn->query($size_query);

        if ($result->num_rows > 0) {
            $head_news = array();
            while ($row = $result->fetch_assoc()) {
                array_push($head_news, array(
                    'id_feed' => $row['ID_FEED'],
                    'title' => $row['TITLE'],
                    'content' => $row['CONTENT'],
                    'url_figure' => $row['URL_FIGURE']
                ));
            }
            return $head_news;
        }
        return false;
    }

    public function insert($title, $summary, $content, $url_figure, $username) {
        $insert_query = "INSERT INTO FEED (TITLE, SUMMARY, CONTENT, URL_FIGURE, USERNAME, PUBLISHED_TS) " .
                        "VALUES ('$title', '$summary', '$content', '$url_figure', '$username', NOW())";
        $this->db_conn->query($insert_query);
    }

    public function get_by_user($username) {
        $feed_timeline_query = "SELECT ID_FEED, TITLE, SUMMARY, URL_FIGURE " .
                               "FROM feed " .
                               "WHERE USERNAME = '$username'";
        $result = $this->db_conn->query($feed_timeline_query);

        if ($result->num_rows > 0) {
            $feed_data = array();
            while ($row = $result->fetch_assoc()) {
                $current_post = array(
                    'id_feed' => $row['ID_FEED'],
                    'title' => $row['TITLE'],
                    'summary' => $row['SUMMARY'],
                    'url_figure' => $row['URL_FIGURE']
                );
                array_push($feed_data, $current_post);
            }
            return $feed_data;
        }
        return false;
    }

    public function edit($id_feed, $title, $summary, $content, $url_figure) {
        if (!empty($url_figure)) {
            $edit_figure_query = "UPDATE feed " .
                                 "SET URL_FIGURE = '$url_figure' " .
                                 "WHERE ID_FEED = $id_feed";
            $this->db_conn->query($edit_figure_query);
        }
        $edit_feed_query = "UPDATE feed " .
                           "SET TITLE = '$title', SUMMARY = '$summary', CONTENT = '$content' " .
                           "WHERE ID_FEED = $id_feed";
        $this->db_conn->query($edit_feed_query);
    }

    public function search($keyword) {
        $searh_post_query = "SELECT ID_FEED " .
                            "FROM feed " .
                            "WHERE MATCH (CATEGORY, TITLE, SUMMARY, CONTENT) " .
                            "AGAINST('$keyword')";
        $result = $this->db_conn->query($searh_post_query);

        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $current_feed = $this->get_by_id($row["ID_FEED"]);
                array_push($data, $current_feed);
            }
            return $data;
        }
        return false;
    }
}