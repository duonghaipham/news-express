<?php
require "./model/entity/Feed.php";

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
}