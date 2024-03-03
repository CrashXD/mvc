<?php

namespace App\Controllers;

use App\Views\ContactsView;

class ContactsController {
    private $view;

    public function __construct()
    {
        $this->view = new ContactsView();
    }

    public function indexAction() {
        $this->view->html();
    }

    public function testAction() {
        $this->view->html('test');
    }
}