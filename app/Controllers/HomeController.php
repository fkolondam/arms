<?php

namespace App\Controllers;

use App\Models\Menu;

class HomeController extends BaseController
{
    public function index()
    {
        // Asumsikan role_id sudah diset pada session
        $role_id = $_SESSION['role_id'] ?? 1; // Ganti dengan nilai yang sesuai
        $menuModel = new Menu();
        $menus = $menuModel->getMenusByRole($role_id);

        $this->view('home/index', ['menus' => $menus, 'nama' => 'User']);
    }
}
