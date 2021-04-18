<?php
class BaseController {
    const VIEW_FOLDER = 'view';
    protected function view($path) {
        $path = self::VIEW_FOLDER . '/' . str_replace('.', '/', $path) . '.php';
        require $path;
    }
}