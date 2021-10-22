<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Menu extends Controller
{
    public function index()
    {
        helper('form');
        return view('menu');
    }
    
    public function showdetail()
    {
        $session = session();
        $id_card = $session->get("id_card");
        $sql = "SELECT * 
        FROM ((regis 
        INNER JOIN member ON member.id_card = regis.member)
        INNER JOIN category ON category.category_id = regis.category_run) WHERE member.id_card = '$id_card'";

        $db = \Config\Database::connect();
        $data = $db->query($sql)->getResultArray();
        return view('showdetail', $data[0]);
    }

    
}
