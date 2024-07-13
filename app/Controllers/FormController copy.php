<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class FormController extends BaseController
{
    public function index(): string
    {
        $MahasiswaModal = new MahasiswaModel();
        $data_mhs = $MahasiswaModal->findAll();
        $data = [
            'items' => $data_mhs
        ];
        return view('/form', $data);
    }

    public function simpan()
    {
        $time =  date('His');
        $id = intval($time);
        $nama   = $_POST['nama'];
        $nim   = $_POST['nim'];
        // dd($nama);
        $MahasiswaModal = new MahasiswaModel();

        $data = [
            'id' => $id,
            'nama' => $nama,
            'nim' => $nim,
        ];

        $MahasiswaModal->insert($data);
        return redirect()->to(base_url('/form'));
    }

    public function update($id)
    {
        $id = intval($id);
        $MahasiswaModal = new MahasiswaModel();
        $data = [
            'id' => $id,
            'item' => $MahasiswaModal->where('id', $id)->findAll()

        ];
        return view('/update', $data);
    }

    public function updated($id)
    {
        $id = $id;
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $data = [
            'nama' => $nama,
            'nim' => $nim
        ];

        $MahasiswaModal = new MahasiswaModel();
        $MahasiswaModal->update($id, $data);

        return redirect()->to(base_url('/form'));
    }

    public function datele($id)
    {
        // dd($id);
        $id = intval($id);
        // dd($id);
        $MahasiswaModal = new MahasiswaModel();
        $MahasiswaModal->delete($id);
        return redirect()->to(base_url('/form'));
    }
}
