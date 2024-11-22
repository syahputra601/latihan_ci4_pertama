<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        // Membuat objek model UserModel
        $userModel = new UserModel();

        // Mengambil data semua user dari database
        $data['users'] = $userModel->findAll();

        // Memanggil view dan mengirimkan data user ke view
        return view('user/user-list', $data);
    }
}
