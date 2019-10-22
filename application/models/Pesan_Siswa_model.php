<?php 

class Pesan_Siswa_model extends CI_model {
    public function kirimPesan()
    {
        $data = [
            "nama" => $this->session->userdata('nama'),
            "kategori" => $this->input->post('kategori',true),
            "pesan" => $this->input->post('pesan',true)
        ];

        $this->db->insert('pesan_siswa',$data);
    }

    public function getAllPesan()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('pesan_siswa')->result_array();
    }
}