<?php

class IndexController extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->msg = "Welcome to My MVC project";
        $this->view->render('index/index');
    }

    public function test() {
        $this->view->msg = "We are in Test";
        $this->view->render('index/test');
    }
}
