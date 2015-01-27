<?php

class ContactController extends BaseController {

  public function index() {
    $this->layout->messages = array();

    $pageTitle = 'Get in touch';
    $navigationActive = 'contact';

    $this->layout->content = View::make('contact.index');
    View::share(array('pageTitle' => $pageTitle, 'navigationActive' => $navigationActive));
  }

}