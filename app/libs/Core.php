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
            echo $url;
        }
    }
} // class end