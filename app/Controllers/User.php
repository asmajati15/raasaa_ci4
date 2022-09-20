<?php

namespace App\Controllers;

use App\Models\MenuModel;
// use App\Models\MakananModel;
use CodeIgniter\HTTP\Files\UploadedFile;

class User extends BaseController
{
    protected $menuModel;
    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    // Dashboard user
    public function index()
    {
        // $menu = $this->menuModel->findAll();

        $data = [
            'title' => 'Menu | Raasaa',
            'menu' => $this->menuModel->getMenu()
        ];

        return view('menu/index', $data);
    }

    // Detail menu user
    public function detail($slug)
    {
        $data = [
            'title' => 'Detail | Raasaa',
            'menu' => $this->menuModel->getMenu($slug)
        ];

        //Jika menu tidak ada
        if (empty($data['menu'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Menu ' . $slug . ' tidak ditemukan.');
        }

        return view('menu/detail', $data);
    }

    // // Membuat daftar menu
    // public function createMenu()
    // {
    //     $data = [
    //         'title' => 'Form Tambah Data Menu',
    //         'validation' => \Config\Services::validation()
    //     ];

    //     return view('menu/create_menu', $data);
    // }

    // public function saveMenu()
    // {
    //     // Input Validation
    //     if (!$this->validate([
    //         'nama' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} menu harus diisi'
    //             ]
    //         ],
    //         'deskripsi' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} menu harus diisi'
    //             ]
    //         ],
    //         'harga' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} menu harus diisi'
    //             ]
    //         ],
    //         // 'jenis' => [
    //         //     'rules' => 'required',
    //         //     'errors' => [
    //         //         'required' => '{field} menu harus diisi'
    //         //     ]
    //         // ],
    //         'gambar' => [
    //             'rules' => 'uploaded[gambar]|max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
    //             'errors' => [
    //                 'uploaded' => 'gambar harus dipilih',
    //                 'max_size' => 'ukuran gambar terlalu besar',
    //                 'is_image' => 'file yang dipilih bukan gambar',
    //                 'mime_in' => 'file yang dipilih bukan gambar'
    //             ]
    //         ]
    //     ])) {
    //         return redirect()->to('menu/create_menu')->withInput();
    //     }

    //     // Ambil Gambar
    //     $fileGambar = $this->request->getFile('gambar');

    //     // Generate Nama Random
    //     $namaGambar = $fileGambar->getRandomName();

    //     // Pemindahan Gambar ke "public/img"
    //     $fileGambar->move('img', $namaGambar);

    //     // Ambil Data
    //     $slug = url_title($this->request->getVar('nama'), '-', true);
    //     $this->menuModel->save([
    //         'nama' => $this->request->getVar('nama'),
    //         'slug' => $slug,
    //         'deskripsi' => $this->request->getVar('deskripsi'),
    //         'harga' => $this->request->getVar('harga'),
    //         'tersedia' => $this->request->getVar('tersedia'),
    //         // 'jenis' => $this->request->getVar('jenis'),
    //         'gambar' => $namaGambar
    //     ]);

    //     session()->setFlashdata('pesan', 'Menu berhasil ditambahkan.');

    //     return redirect()->to('/menu');
    // }

    // public function deleteMenu($id)
    // {
    //     // Cari Gambar dari ID
    //     $menu = $this->menuModel->find($id);

    //     // Hapus File Gambar
    //     unlink('img/' . $menu['gambar']);

    //     // Hapus Data Tabel
    //     $this->menuModel->delete($id);
    //     session()->setFlashdata('pesan', 'Menu berhasil dihapus.');
    //     return redirect()->to('/menu');
    // }

    // public function editMenu($slug)

    // {
    //     $data = [
    //         'title' => 'Form Edit Data Menu',
    //         'validation' => \Config\Services::validation(),
    //         'menu' => $this->menuModel->getMenu($slug)
    //     ];

    //     return view('menu/edit_menu', $data);
    // }

    // public function updateMenu($id)
    // {
    //     //Update Validation
    //     if (!$this->validate([
    //         'nama' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} menu harus diisi'
    //             ]
    //         ],
    //         'deskripsi' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} menu harus diisi'
    //             ]
    //         ],
    //         'harga' => [
    //             'rules' => 'required',
    //             'errors' => [
    //                 'required' => '{field} menu harus diisi'
    //             ]
    //         ],
    //         // 'jenis' => [
    //         //     'rules' => 'required',
    //         //     'errors' => [
    //         //         'required' => '{field} menu harus diisi'
    //         //     ]
    //         // ],
    //         'gambar' => [
    //             'rules' => 'max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
    //             'errors' => [
    //                 'max_size' => 'ukuran gambar terlalu besar',
    //                 'is_image' => 'file yang dipilih bukan gambar',
    //                 'mime_in' => 'file yang dipilih bukan gambar'
    //             ]
    //         ]
    //     ])) {
    //         return redirect()->to('menu/edit/' . $this->request->getVar('slug'))->withInput();
    //     }

    //     $fileGambar = $this->request->getFile('gambar');

    //     if ($fileGambar->getError() == 4) {
    //         $namaGambar = $this->request->getVar('gambarLama');
    //     } else {
    //         $namaGambar = $fileGambar->getRandomName();
    //         $fileGambar->move('img', $namaGambar);
    //         unlink('img/' . $this->request->getVar('gambarLama'));
    //     }

    //     // Simpan Data Yang di Update 
    //     $slug = url_title($this->request->getVar('nama'), '-', true);
    //     $this->menuModel->save([
    //         'id' => $id,
    //         'nama' => $this->request->getVar('nama'),
    //         'slug' => $slug,
    //         'deskripsi' => $this->request->getVar('deskripsi'),
    //         'harga' => $this->request->getVar('harga'),
    //         'tersedia' => $this->request->getVar('tersedia'),
    //         // 'jenis' => $this->request->getVar('jenis'),
    //         'gambar' => $namaGambar
    //     ]);

    //     session()->setFlashdata('pesan', 'Menu berhasil diedit.');

    //     return redirect()->to('/menu');
    // }
}
