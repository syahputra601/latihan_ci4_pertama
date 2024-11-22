<?php

namespace App\Models;

use Codeigniter\Model;

Class UserModel extends Model{
    protected $table      = 'user'; // Nama tabel
    protected $primaryKey = 'user_id';    // Nama kolom primary key

    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['username','password','name', 'email']; // Kolom yang dapat diubah

    // Untuk pencarian berdasarkan ID
    protected $useTimestamps = true;
    // protected $createdField  = 'created_at'; // Kolom timestamp
}

?>