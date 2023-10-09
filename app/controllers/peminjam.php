<?php 

class Peminjam extends Controller {

    public function index()
    {
        $data['page'] = 'Data peminjam';
        $data['peminjam'] = $this->model('peminjamModel')->getAllPeminjam();
        $this->view('templates/header', $data);
        $this->view('peminjam/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['page'] = 'Data peminjam';
        $this->view('templates/header', $data);
        $this->view('peminjam/tambah', $data);
        $this->view('templates/footer');
    }

    public function simpanPeminjam()
    {
        if($this->model('peminjamModel')->tambahPeminjam($_POST) > 0){
            header('location: '. BASE_URL . '/peminjam/index');
            exit;
        }else{
            header('location: '. BASE_URL . '/peminjam/index');
            exit;
        }
    }

    public function edit($id)
    {
        $data['page'] = 'Edit peminjam';
        $data['peminjam'] = $this->model('peminjamModel')->getPeminjamById($id);
        $this->view('templates/header', $data);
        $this->view('peminjam/edit', $data);
        $this->view('templates/footer');
    }

    public function updatePeminjam()
    {
        if($this->model('peminjamModel')->updateDataPeminjam($_POST) > 0){
            header('location: '. BASE_URL . '/peminjam/index');
            exit;
        }else{
            header('location: '. BASE_URL . '/peminjam/index');
            exit;
        }
    }

    public function hapus($id){
        if($this->model('peminjamModel')->deletePeminjam($id) > 0){
            header('location: '. BASE_URL . '/peminjam/index');
            exit;
        }else{
            header('location: '. BASE_URL . '/peminjam/index');
            exit;
        }
    }
}