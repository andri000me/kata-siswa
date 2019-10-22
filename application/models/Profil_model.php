<?php 

class Profil_model extends CI_model {
   public function upload(){
		$config['upload_path']          = 'upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1000;
		$config['max_height']           = 1000;
		$config['file_name']            = round(microtime(true) * 1000);
	
        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        
		if(!$this->upload->do_upload('photo')){ // Lakukan upload dan Cek jika proses upload berhasil
		// Jika berhasil :
            $this->session->set_flashdata('msg', $this->upload->display_errors('',''));
            redirect('profil');
        }
        return $this->upload->data('file_name');
    }

    public function ubahDataSiswa()
    {
        $data = [
            "nama" => $this->input->post('nama',true),
            "nis" => $this->input->post('nis',true),
            "gambar" => $this->upload->data('file_name')
        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('user',$data);
        
    }
}