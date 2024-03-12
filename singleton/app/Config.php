<?php

namespace App;

class config {
    private static $instance;
    private $settings;

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new config();
        }
        return self::$instance;
    }

    public function get($key) {
        return $this->settings[$key];
    }

    private function __construct() {
        $this->settings = require './../config/config.php';
    }

}

