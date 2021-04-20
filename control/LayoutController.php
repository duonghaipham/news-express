<?php
class LayoutController extends BaseController {
    private $feed_model;
    public function __construct() {
        $this->model('FeedModel');
        $this->feed_model = new FeedModel();
    }

    public function index() {
        $head_news = $this->feed_model->getLasts(6);
        $this->view('index', ['head_news_key' => $head_news]);
    }

    public function detail() {
        $id_feed = $_GET['id_feed'];
        $detailed_post = $this->feed_model->getById($id_feed);
        $this->view('detail', ['detailed_post' => $detailed_post]);
    }
}