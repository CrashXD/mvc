<?php

namespace App\Core;

abstract class View {
    protected $folder;

    public function html($template = 'index', $data = []) {
        $contentFile = 'app/layouts/' . $this->folder . '/' . $template . '.tpl.php';
        include 'app/layouts/layout.tpl.php';
        exit;
    }
}