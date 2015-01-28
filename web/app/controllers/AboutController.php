<?php

class AboutController extends BaseController {

  public function index() {
    $this->layout->messages = array();

    $pageTitle = 'Welcome to my Stuffff...';
    $navigationActive = 'about';

    $this->layout->content = View::make('about.index');
    View::share(array('pageTitle' => $pageTitle, 'navigationActive' => $navigationActive));
  }

}