<?php

namespace App\Controllers;

use App\Models\Menu;

class MenuController extends BaseController
{
    public function index()
    {
        $menuModel = new Menu();
        $menus = $menuModel->getMenusByRole($_SESSION['role_id']);
        $this->view('home/index', ['menus' => $menus]);
    }
}
?>
