<?php

namespace App\Models;

use App\Database;
use PDO;

class Menu
{
    protected $db;

    public function __construct()
    {
        $this->db = (new Database())->connect();
    }

    public function getMenusByRole($role_id)
    {
        $stmt = $this->db->prepare("SELECT m.* FROM menu m 
                                    JOIN role_menu rm ON m.id = rm.menu_id 
                                    WHERE rm.role_id = :role_id AND m.parent_id IS NULL  
                                    ORDER BY m.`order`");
        $stmt->bindParam(':role_id', $role_id);
        $stmt->execute();
        $menus = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($menus as &$menu) {
            $menu['children'] = $this->getChildMenus($menu['id'], $role_id);
        }

        return $menus;
    }

    private function getChildMenus($parent_id, $role_id)
    {
        $stmt = $this->db->prepare("SELECT m.* FROM menu m 
                                    JOIN role_menu rm ON m.id = rm.menu_id 
                                    WHERE m.parent_id = :parent_id AND rm.role_id = :role_id 
                                    ORDER BY m.`order`");
        $stmt->bindParam(':parent_id', $parent_id);
        $stmt->bindParam(':role_id', $role_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
