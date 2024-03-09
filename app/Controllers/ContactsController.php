<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\ContactsModel;
use App\Views\ContactsView;

class ContactsController extends Controller {
    public function __construct() {
        $this->view = new ContactsView();
        $this->model = new ContactsModel();
    }

    public function indexAction() {
        $contacts = $this->model->getContacts();
        $this->view->html('index', [
            'title' => 'Контакты',
            'contacts' => $contacts
        ]);
    }

    public function testAction() {
        $this->view->html('test');
    }
}