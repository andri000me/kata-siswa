<?php 

class Unggahan_model extends CI_model {
    public function getAllUnggahan()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('unggahan')->result_array();
    }

     public function getUnggahan($limit, $start)
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('unggahan', $limit, $start)->result_array();
    }

    public function getUnggahanById($id)
    {
        return $this->db->get_where('unggahan',['id' => $id])->row_array();
    }

    public function getAllDiskusi()
    {
        return $this->db->get('diskusi')->result_array();
    }

    public function uploadUnggahan()
    {
        $data = [
            "nama" => $this->session->userdata('nama'),
            "tanggal" => date("Y-m-d"),
            "judul" => $this->input->post('judul',true),
            "teks" => $this->input->post('teks',true)
        ];

        $this->db->insert('unggahan',$data);
    }

    public function uploadDiskusi()
    {
        $data = [
            "nama" => $this->session->userdata('nama'),
            "idUnggahan" =>  $this->input->post('id',true),
            "pesan" => $this->input->post('pesan',true)
        ];

        $this->db->insert('diskusi',$data);
    }
    
    public function jumlahData()
    {
        return $this->db->get('diskusi')->num_rows();
    }

    public function getAllSiswa()
    {
        return $this->db->get('user')->result_array();
    }

}