<?php

namespace App\Controllers;

use App\Models\Menu;

class BaseController
{
    protected $db;
    protected $menus;

    public function __construct()
    {
        $this->db = (new \App\Database())->connect();
        $this->setMenus();
    }

    protected function setMenus()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $role_id = $_SESSION['user']['role_id'] ?? 1 ;
        $menuModel = new Menu();
        $this->menus = $menuModel->getMenusByRole($role_id);
    }

    protected function view($view, $data = [])
    {
        extract($data);
        $menus = $this->menus;
        require_once "../app/Views/layout/header.php";
        require_once "../app/Views/layout/navbar.php";
        require_once "../app/Views/{$view}.php";
        require_once "../app/Views/layout/footer.php";
    }

    protected function redirect($url)
    {
        header('Location: ' . $url);
        exit();
    }
}
