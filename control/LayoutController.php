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
}