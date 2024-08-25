<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('H_kos');
        $this->load->helper(array('url', 'form', 'html'));
        $this->load->library('session');
    }

    // Halaman User

    public function index(){
        $ip_address = $this->input->ip_address();
        $this->H_kos->insert_visitor($ip_address);
        $data['total_visitors_all_time'] = $this->H_kos->count_visitors_all_time();
        $data['judul'] = 'KOSANKU';
        $data['data_kos'] = $this->H_kos->get_uploaded_data();
        $this->load->view('user/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('user/footer', $data);
    }

    public function maps(){
        $ip_address = $this->input->ip_address();
        $this->H_kos->insert_visitor($ip_address);
        $data['total_visitors_all_time'] = $this->H_kos->count_visitors_all_time();
        $data['judul'] = 'KOSANKU';
        $data['data_kos'] = $this->H_kos->get_uploaded_data();
        $this->load->view('admin/header', $data);
        $this->load->view('home/maps', $data);
        $this->load->view('admin/footer');
    }

    public function tambah(){
        $ip_address = $this->input->ip_address();
        $this->H_kos->insert_visitor($ip_address);
        $data['total_visitors_all_time'] = $this->H_kos->count_visitors_all_time();
        $data['judul'] = 'KOSANKU';
        $this->load->view('user/header', $data);
        $this->load->view('home/tambah');
        $this->load->view('user/footer');
    }

    public function login(){
        $ip_address = $this->input->ip_address();
        $this->H_kos->insert_visitor($ip_address);
        $data['total_visitors_all_time'] = $this->H_kos->count_visitors_all_time();
        $data['judul'] = 'KOSANKU';
        $data['message'] = $this->session->flashdata('message');
        $this->load->view('user/header', $data);
        $this->load->view('home/login', $data);
        $this->load->view('user/footer');
    }

    public function kontak(){
        $ip_address = $this->input->ip_address();
        $this->H_kos->insert_visitor($ip_address);
        $data['total_visitors_all_time'] = $this->H_kos->count_visitors_all_time();
        $data['judul'] = 'KOSANKU';
        $this->load->view('user/header', $data);
        $this->load->view('home/kontak');
        $this->load->view('user/footer');
    }

    // Halaman Admin

    public function verifikasi() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->H_kos->login_verifikasi($username, $password);
        if ($user) {
            $session_data = array(
                'id' => $user->id,
                'username' => $user->username,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($session_data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil login!</strong> Selamat datang admin.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
            redirect(base_url('home/kosmasuk'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal login!</strong> Username atau password salah.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
            redirect(base_url('home/login'));
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        $message = urlencode('<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Berhasil logout!</strong> Sampai jumpa Admin.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
        redirect('home?message=' . $message);
    }

    public function upload($id) {
        $this->H_kos->update_status($id);
        redirect(base_url('home/kosmasuk'));
    }

    public function kosmasuk(){
        if ($this->session->userdata('logged_in')) {
            $data['judul'] = 'KOSANKU';
            $data['data_kos'] = $this->H_kos->data_masuk();
            $this->load->view('admin/header', $data);
            $this->load->view('home/kosmasuk', $data);
            $this->load->view('admin/footer');
        } else {
            redirect('home');
        }
    }

    // Menampilkan detail

    public function detail($id){
        $ip_address = $this->input->ip_address();
        $this->H_kos->insert_visitor($ip_address);
        $data['total_visitors_all_time'] = $this->H_kos->count_visitors_all_time();
        $data['judul'] = 'KOSANKU';
        $data['data_kos'] = $this->H_kos->detail_masuk($id);
        $this->load->view('user/header', $data);
        $this->load->view('home/detail', $data);
        $this->load->view('user/footer');
    }

    public function detailmasuk($id){
        if ($this->session->userdata('logged_in')) {
            $data['judul'] = 'KOSANKU';
            $data['data_kos'] = $this->H_kos->detail_masuk($id);
            $this->load->view('admin/header', $data);
            $this->load->view('home/detailmasuk', $data);
            $this->load->view('admin/footer');
        } else {
            redirect('home');
        }
    }

    // Melakukan edit data kos

    public function editmasuk($id) {
        if ($this->session->userdata('logged_in')) {
            $data['data_kos'] = $this->H_kos->getdata_masuk($id);
            $data['judul'] = 'KOSANKU';
            $this->load->view('admin/header', $data);
            $this->load->view('home/editmasuk');
            $this->load->view('admin/footer');
        } else {
            redirect('home');
        }
    }

    public function edit_masuk() {
        if ($this->session->userdata('logged_in')) {
            $id = $this->input->post('id');
            $ArrInsert = array(
                'id' => $id,
                'nama' => $this->input->post('nama'),
                'jenis' => $this->input->post('jenis'),
                'alamat' => $this->input->post('alamat'),
                'nama_pemilik' => $this->input->post('nama_pemilik'),
                'telepon' => $this->input->post('telepon'),
                'email' => $this->input->post('email'),
                'harga' => $this->input->post('harga'),
                'jumlah_kamar' => $this->input->post('jumlah_kamar'),
                'fasilitas' => $this->input->post('fasilitas'),
                'keterangan' => $this->input->post('keterangan'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'foto' => $this->input->post('foto'),
                'bayar' => $this->input->post('bayar')
            );
            $this->H_kos->updatedata_masuk($id, $ArrInsert);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil edit!</strong> Data sudah terubah.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
            redirect(base_url('home/kosmasuk'));
        } else {
            redirect('home');
        }
    }

    // Melakukan Pencarian

    public function cariindex(){
        $cari = $this->input->post('cari');
        $data['data_kos'] = $this->H_kos->caridata_masuk($cari);
        $this->load->view('user/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('user/footer');
    }

    public function carimasuk(){
        if ($this->session->userdata('logged_in')) {
            $cari = $this->input->post('cari');
            $data['data_kos'] = $this->H_kos->caridata_masuk($cari);
            $this->load->view('admin/header', $data);
            $this->load->view('home/kosmasuk', $data);
            $this->load->view('admin/footer');
        } else {
            redirect('home');
        }
    }

    // Menghapus Data Kos

    public function hapusmasuk($id){
        if ($this->session->userdata('logged_in')) {
            $this->H_kos->deletedata_masuk($id);
            $data['judul'] = 'KOSANKU';
            $data['data_kos'] = $this->H_kos->data_masuk();
            $this->load->view('admin/header', $data);
            $this->load->view('home/kosmasuk', $data);
            $this->load->view('admin/footer');
        } else {
            redirect('home');
        }
    }

    // Menambah Data Kos

    public function aksitambah() {
        $config['upload_path'] = './assets/fotokos/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 3048; // 2MB
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            $message = urlencode('<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal ditambahkan!</strong> Pastikan data yang anda masukkan benar.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
            redirect('home/tambah?message=' . $message);
        } else {
            $upload_data = $this->upload->data();
            $foto_path = $upload_data['file_name'];
            $config['upload_path'] = './assets/buktibayar/';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('bayar')) {
                $message = urlencode('<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal ditambahkan!</strong> Pastikan data yang anda masukkan benar.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>');
                redirect('home/tambah?message=' . $message);
            } else {
                $bayar_data = $this->upload->data();
                $bayar_path = $bayar_data['file_name'];
                $ArrInsert = array(
                    'id' => $this->input->post('id'),
                    'nama' => $this->input->post('nama'),
                    'jenis' => $this->input->post('jenis'),
                    'alamat' => $this->input->post('alamat'),
                    'nama_pemilik' => $this->input->post('nama_pemilik'),
                    'telepon' => $this->input->post('telepon'),
                    'email' => $this->input->post('email'),
                    'harga' => $this->input->post('harga'),
                    'jumlah_kamar' => $this->input->post('jumlah_kamar'),
                    'fasilitas' => $this->input->post('fasilitas'),
                    'keterangan' => $this->input->post('keterangan'),
                    'latitude' => $this->input->post('latitude'),
                    'longitude' => $this->input->post('longitude'),
                    'foto' => $foto_path,
                    'bayar' => $bayar_path
                );
                $this->H_kos->insertdata_masuk($ArrInsert);
                $message = urlencode('<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil dikirim!</strong> Data akan segera diproses oleh admin.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>');
                redirect('home?message=' . $message);
            }
        }
    }
}
