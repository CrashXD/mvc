<?php
namespace App\Views;

class AboutView {
    private $folder = 'about';

    public function html($template = 'index', $data = []) {
        $contentFile = 'app/layouts/' . $this->folder . '/' . $template . '.tpl.php';
        include 'app/layouts/layout.tpl.php';
        exit;
    }
}