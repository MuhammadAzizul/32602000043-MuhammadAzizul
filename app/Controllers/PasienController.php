<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\PasienModel;

class PasienController extends BaseController
{
    protected $PasienModel;

    public function __construct()
    {
        $this->PasienModel = new PasienModel();
    }

    public function index()
    {

        $data = [
            'items' => $this->PasienModel->findAll()

        ];
        return view('pasien/index', $data);
    }

    public function simpan()
    {
        $id = intval(date('His'));
        $nama = $_POST['nama'];
        $asal = $_POST['asal'];

        $data = [
            'id' => $id,
            'nama' => $nama,
            'asal' => $asal
        ];

        $this->PasienModel->insert($data);

        return redirect()->to(base_url('/pasien'));
    }

    public function update($id)
    {
        // dd($id);
        $id = intval($id);
        // dd($id);
        $item = $this->PasienModel->where('id', $id)->findAll();

        $data = [
            'item' => $item
        ];

        return view('/pasien/update', $data);
    }

    public function updated($id)
    {
        $id = intval($id);
        $nama = $_POST['nama'];
        $asal = $_POST['asal'];

        $data = [
            'nama' => $nama,
            'asal' => $asal
        ];

        $this->PasienModel->update($id, $data);

        return redirect()->to(base_url('/pasien'));
    }

    public function delete($id)
    {
        $id = intval($id);
        $this->PasienModel->delete($id);

        return redirect()->to(base_url('/pasien'));
    }
}
