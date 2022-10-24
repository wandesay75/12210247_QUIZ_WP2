<?php 
class Controller_mahasiswa extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('mahasiswa_model');
    }

    function index(){
        $data['mahasiswa'] = $this->mahasiswa_model->get_mahasiswa();
        $this->load->view('data_mahasiswa', $data);
    }

    function tambah_baru(){
        $this->load->view('tambah_data_mahasiswa');
    }

    function simpan(){
        $NAMA = $this->input->post('NAMA');
        $PROGRAM_STUDI = $this->input->post('PROGRAM_STUDI');
        $this->mahasiswa->save($NAMA, $PROGRAM_STUDI);
        redirect('controller_mahasiswa');
    }

    function hapus(){
        $NIM = $this->uri->segment(3);
        $this->mahasiswa_model->hapus($NIM);
        redirect('controller_mahasiswa');
    }
}

?>