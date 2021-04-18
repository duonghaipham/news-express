<?php
class LayoutController extends BaseController {
    public function index() {
        $this->view('layout.master');
    }
}