<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Views\ContactsView;

class ContactsController extends Controller {
    public function __construct() {
        $this->view = new ContactsView();
    }

    public function indexAction() {
        $this->view->html('index', [
            'title' => 'Контакты'
        ]);
    }

    public function testAction() {
        $this->view->html('test');
    }
}