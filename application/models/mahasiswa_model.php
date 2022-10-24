<?php 
class Mahasiswa_model extends CI_Model{

    function get_mahasiswa(){
        $result = $this->db->get('mahasiswa');
        return $result; 
    }

    function simpan($NAMA, $PROGRAM_STUDI){
        $data = array(
            'NAMA' => $NAMA,
            'PROGRAM_STUDI' => $PROGRAM_STUDI
        );
        $this->db->insert('mahasiswa');
    }

    function hapus($NIM){
        $this->db->where('NIM', $NIM);
        $this->db->delete('mahasiswa');
    }

}

?>