<?php
namespace App\Views;

class HomeView {
    private $folder = 'home';

    public function html($template = 'index', $data = []) {
        $contentFile = 'app/layouts/' . $this->folder . '/' . $template . '.tpl.php';
        include 'app/layouts/layout.tpl.php';
        exit;
    }
}