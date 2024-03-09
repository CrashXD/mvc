<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\HomeModel;
use App\Views\HomeView;

class HomeController extends Controller {
    public function __construct() {
        $this->view = new HomeView();
        $this->model = new HomeModel();
    }

    public function indexAction() {
        $this->view->html('index', [
            'title' => 'Главная страница',
            'welcome' => 'Здравствуй, пользователь!',
        ]);
    }
}