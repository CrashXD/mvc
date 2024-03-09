<?php

namespace App\Models;

class HomeModel {
    public function getData() {
        return [
            'title' => 'Главная страница',
            'welcome' => 'Здравствуй, пользователь!',
        ];
    }
}