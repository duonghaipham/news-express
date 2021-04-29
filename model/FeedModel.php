<?php
class FeedModel {
    public function getById($id_feed) {
        $db_conn = new Database();
        $db_conn->connect();
        $select_query = "SELECT * FROM FEED WHERE ID_FEED = $id_feed";
        $result = $db_conn->query($select_query);
        $db_conn->disconnect();

        return $result;
    }

    public function getLasts($amount) {
        $db_conn = new Database();
        $db_conn->connect();
        $size_query = "SELECT * FROM FEED ORDER BY ID_FEED DESC LIMIT $amount";
        $result = $db_conn->query($size_query);
        $db_conn->disconnect();

        return $result;
    }

    public function insert($data) {
        $db_conn = new Database();
        $db_conn->connect();
        $insert_query = "INSERT INTO FEED (TITLE, SUMMARY, CONTENT, URL_FIGURE, USERNAME, PUBLISHED_TS, VIEWED_COUNT) " .
                        "VALUES ('" .
                        $data['title'] . "', '" .
                        $data['summary'] . "', '" .
                        $data['content'] . "', '" .
                        $data['url_figure'] . "', '" .
                        $data['username'] . "', " .
                        'NOW()' . ", " .
                        '0);';
        $db_conn->query($insert_query);
        $db_conn->disconnect();
    }
}