<?php namespace App\Models;

use CodeIgniter\Model;

class RegisModel extends Model{
    protected $table = 'regis';
    protected $allowedFields = ['ID','member','category_run'];
    protected $primaryKey = 'ID';
}

?>