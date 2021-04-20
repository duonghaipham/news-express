<?php
class Feed {
    private $id_feed;
    private $title;
    private $summary;
    private $content;
    private $url_figure;
    private $user_name;
    private $published_ts;
    private $viewed_count;
    private $hide;

    /**
     * Feed constructor.
     * @param $id_feed
     * @param $title
     * @param $summary
     * @param $content
     * @param $url_figure
     * @param $user_name
     * @param $published_ts
     * @param $viewed_count
     * @param $hide
     */
    public function __construct($id_feed, $title, $summary, $content, $url_figure, $user_name, $published_ts, $viewed_count, $hide) {
        $this->id_feed = $id_feed;
        $this->title = $title;
        $this->summary = $summary;
        $this->content = $content;
        $this->url_figure = $url_figure;
        $this->user_name = $user_name;
        $this->published_ts = $published_ts;
        $this->viewed_count = $viewed_count;
        $this->hide = $hide;
    }

    /**
     * @return mixed
     */
    public function getIdFeed() {
        return $this->id_feed;
    }

    /**
     * @return mixed
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getSummary() {
        return $this->summary;
    }

    /**
     * @return mixed
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getUrlFigure() {
        return $this->url_figure;
    }

    /**
     * @return mixed
     */
    public function getUserName() {
        return $this->user_name;
    }

    /**
     * @return mixed
     */
    public function getPublishedTs() {
        return $this->published_ts;
    }

    /**
     * @return mixed
     */
    public function getViewedCount() {
        return $this->viewed_count;
    }

    /**
     * @return mixed
     */
    public function getHide() {
        return $this->hide;
    }
}