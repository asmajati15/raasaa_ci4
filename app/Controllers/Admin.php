<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\MakananModel;
use App\Models\MinumanModel;
use CodeIgniter\HTTP\Files\UploadedFile;

class Admin extends BaseController
{
    public $menuModel;
    public $makananModel;
    public $minumanModel;
    public function __construct()
    {
        $this->menuModel = new MenuModel();
        $this->makananModel = new MakananModel();
        $this->minumanModel = new MinumanModel();
    }

    // Dashboard admin
    public function index()
    {
        $data = [
            'title' => 'Admin | Raasaa'
        ];

        return view('admin/index', $data);
    }

    // Dashboard edit menu
    public function menu()
    {

        // $menu = $this->menuModel->findAll();

        $data = [
            'title' => 'Admin | Raasaa',
            'menu' => $this->menuModel->getMenu()
        ];

        return view('admin/menu', $data);
    }

    // Detail menu
    public function detailMenu($slug)
    {
        $data = [
            'title' => 'Admin | Raasaa',
            'menu' => $this->menuModel->getMenu($slug)
        ];

        //Jika menu tidak ada
        if (empty($data['menu'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Menu ' . $slug . ' tidak ditemukan.');
        }

        return view('admin/detail_menu', $data);
    }

    // Membuat daftar menu
    public function createMenu()
    {
        // $data = ['makanan'] = $this->makanan->findAll();
        $data = [
            'title' => 'Form Tambah Data Menu',
            'makanan' => $this->makananModel->findAll(),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/create_menu', $data);
    }

    public function saveMenu()
    {
        // Input validation
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} menu harus diisi'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} menu harus diisi'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} menu harus diisi'
                ]
            ],
            // 'jenis' => [
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} menu harus diisi'
            //     ]
            // ],
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'gambar harus dipilih',
                    'max_size' => 'ukuran gambar terlalu besar',
                    'is_image' => 'file yang dipilih bukan gambar',
                    'mime_in' => 'file yang dipilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('admin/createMenu')->withInput();
        }

        // Ambil Gambar
        $fileGambar = $this->request->getFile('gambar');

        // Generate Nama Random
        $namaGambar = $fileGambar->getRandomName();

        // Pemindahan Gambar ke "public/img"
        $fileGambar->move('img/img_menu', $namaGambar);

        // Ambil Data
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $data = [
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
            'tersedia' => $this->request->getVar('tersedia'),
            'jenis' => $this->request->getVar('jenis'),
            'gambar' => $namaGambar
        ];

        // print_r($data);
        $this->menuModel->save($data);
        session()->setFlashdata('pesan', 'Menu berhasil ditambahkan.');
        return redirect()->to('/tempat_ngedit/menu');


        // $makananId = $this->menuModel->insertID();
        /* $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->menuModel->save([
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
            'tersedia' => $this->request->getVar('tersedia'),
            // 'tipe' => $this->input->POST('tipe'),
            'jenis' => $this->request->getVar('jenis'),
            // 'makananId' => $makananId,
            'gambar' => $namaGambar
        ]); */

        /* $this->makananModel->save([
               'jenis' => $this->request->getVar('jenis')
            ]); */

        // session()->setFlashdata('pesan', 'Menu berhasil ditambahkan.');

        // return redirect()->to('/tempat_ngedit/menu');
    }

    // Menghapus menu
    public function deleteMenu($id)
    {
        // Cari Gambar dari ID
        $menu = $this->menuModel->find($id);

        // Hapus File Gambar
        unlink('img/img_menu/' . $menu['gambar']);

        // Hapus Data Tabel
        $this->menuModel->delete($id);
        session()->setFlashdata('pesan', 'Menu berhasil dihapus.');
        return redirect()->to('/tempat_ngedit/menu');
    }

    // Mengedit menu
    public function editMenu($slug)
    {
        $data = [
            'title' => 'Form Edit Data Menu',
            'validation' => \Config\Services::validation(),
            'menu' => $this->menuModel->getMenu($slug)
        ];

        return view('admin/edit_menu', $data);
    }

    public function updateMenu($id)
    {
        //Update Validation
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} menu harus diisi'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} menu harus diisi'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} menu harus diisi'
                ]
            ],
            // 'jenis' => [
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} menu harus diisi'
            //     ]
            // ],
            'gambar' => [
                'rules' => 'max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar terlalu besar',
                    'is_image' => 'file yang dipilih bukan gambar',
                    'mime_in' => 'file yang dipilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('admin/editMenu/' . $this->request->getVar('slug'))->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('img/img_menu', $namaGambar);
            unlink('img/img_menu/' . $this->request->getVar('gambarLama'));
        }

        // Simpan Data Yang di Update 
        $slug = url_title($this->request->getVar('nama'), '-', true);
        $this->menuModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'slug' => $slug,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'harga' => $this->request->getVar('harga'),
            'tersedia' => $this->request->getVar('tersedia'),
            // 'jenis' => $this->request->getVar('jenis'),
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('pesan', 'Menu berhasil diedit.');

        return redirect()->to('/tempat_ngedit/menu');
    }

    // Dashboard edit jenis
    public function jenis()
    {

        // $menu = $this->menuModel->findAll();

        $data = [
            'title' => 'Admin | Raasaa',
            'makanan' => $this->makananModel->getMakanan(),
            'minuman' => $this->minumanModel->getMinuman()
        ];

        return view('admin/jenis', $data);
    }

    // Membuat daftar makanan
    public function createMakanan()
    {
        $data = [
            'title' => 'Form Tambah Jenis Makanan',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/create_makanan', $data);
    }

    public function saveMakanan()
    {
        // Input validation
        if (!$this->validate([
            'jenis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} menu harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('admin/createMakanan')->withInput();
        }

        // Ambil Data
        $slug_makanan = url_title($this->request->getVar('jenis'), '-', true);
        $this->makananModel->save([
            'jenis' => $this->request->getVar('jenis'),
            'slug_makanan' => $slug_makanan
        ]);

        session()->setFlashdata('pesan', 'Jenis berhasil ditambahkan.');

        return redirect()->to('/admin/jenis');
    }

    // Menghapus jenis makanan
    public function deleteMakanan($id = NULL)
    {
        // Hapus data dari tabel
        $this->makananModel->where('id', $id)->delete();
        session()->setFlashdata('message', 'Jenis makanan berhasil dihapus.');
        return redirect()->to('/tempat_ngedit/jenis');
    }

    public function editMakanan($slug_makanan)

    {
        $data = [
            'title' => 'Form Edit Data Makanan',
            'validation' => \Config\Services::validation(),
            'makanan' => $this->makananModel->getMakanan($slug_makanan)
        ];

        return view('admin/edit_makanan', $data);
    }

    public function updateMakanan($id)
    {
        // Input validation
        if (!$this->validate([
            'jenis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} menu harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('tempat_ngedit/editMakanan/' . $this->request->getVar('slug'))->withInput();
        }

        // Simpan Data Yang di Update 
        $slug_makanan = url_title($this->request->getVar('jenis'), '-', true);
        $this->makananModel->save([
            'id' => $id,
            'jenis' => $this->request->getVar('jenis'),
            'slug_makanan' => $slug_makanan
        ]);

        session()->setFlashdata('pesan', 'Jenis makanan berhasil diedit.');

        return redirect()->to('/tempat_ngedit/jenis');
    }

    // Membuat daftar minuman
    public function createMinuman()
    {
        $data = [
            'title' => 'Form Tambah Jenis Minuman',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/create_minuman', $data);
    }

    public function saveMinuman()
    {
        // Input validation
        if (!$this->validate([
            'jenis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} menu harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('admin/createMinuman')->withInput();
        }

        // Ambil Data
        $slug_minuman = url_title($this->request->getVar('jenis'), '-', true);
        $this->minumanModel->save([
            'jenis' => $this->request->getVar('jenis'),
            'slug_minuman' => $slug_minuman
        ]);

        session()->setFlashdata('pesan', 'Jenis berhasil ditambahkan.');

        return redirect()->to('/admin/jenis');
    }

    // Menghapus jenis minuman
    public function deleteMinuman($id = NULL)
    {
        // Hapus data dari tabel
        $this->minumanModel->where('id', $id)->delete();
        session()->setFlashdata('message', 'Jenis minuman berhasil dihapus.');
        return redirect()->to('/tempat_ngedit/jenis');
    }

    public function editMinuman($slug_minuman)

    {
        $data = [
            'title' => 'Form Edit Data Minuman',
            'validation' => \Config\Services::validation(),
            'minuman' => $this->minumanModel->getMinuman($slug_minuman)
        ];

        return view('admin/edit_minuman', $data);
    }

    public function updateMinuman($id)
    {
        // Input validation
        if (!$this->validate([
            'jenis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} menu harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('tempat_ngedit/editMinuman/' . $this->request->getVar('slug'))->withInput();
        }

        // Simpan Data Yang di Update 
        $slug_minuman = url_title($this->request->getVar('jenis'), '-', true);
        $this->minumanModel->save([
            'id' => $id,
            'jenis' => $this->request->getVar('jenis'),
            'slug_minuman' => $slug_minuman
        ]);

        session()->setFlashdata('pesan', 'Jenis minuman berhasil diedit.');

        return redirect()->to('/tempat_ngedit/jenis');
    }
}
