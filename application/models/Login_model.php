<?php
class Login_model extends CI_model {
    public function cek_login($table,$where)
    {
        return $this->db->get_where($table,$where);
    }

    public function uploadUser()
    {
         $data = [
            "nis" => $this->input->post('nis',true),
            "nama" => $this->input->post('nama',true),
            "gambar" => "default.png",
            "password" => md5($this->input->post('password1'))
        ];

        $this->db->insert('user',$data);
    }
}


