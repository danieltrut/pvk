<?php


class Core
{ // class begin
    // constructor

    // get url data
    /**
     * Core constructor.
     */
    public function __construct()
    {
        $this->geturl();
    }

    public function geturl(){
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            $url = rtrim($url, '/');
            $url = htmlentities($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
} // class end