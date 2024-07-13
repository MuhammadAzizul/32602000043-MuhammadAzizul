<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function index(): string
    {
        return view('/Admin/dashboardAdmin');
    }

    public function mahasiswa()
    {
        return view('/Admin/halamanMahasiswa');
    }
}
