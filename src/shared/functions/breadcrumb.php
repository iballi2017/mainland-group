<?php


class Breadcrumb
{
    public $title;
    public $url;
    public function __construct($title, $url)
    {
        $this->title = $title;
        $this->url = $url;
    }
};
