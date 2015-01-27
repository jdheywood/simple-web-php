<?php

class AboutController extends BaseController {

  public function index() {
    $this->layout->messages = array();

    $pageTitle = 'Stuff about Stuffff...';
    $navigationActive = 'about';

    $this->layout->content = View::make('about.index');
    View::share(array('pageTitle' => $pageTitle, 'navigationActive' => $navigationActive));
  }

}