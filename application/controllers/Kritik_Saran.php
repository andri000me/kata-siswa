<?php

class Kritik_Saran extends CI_Controller {

	public function __construct()
    {
		parent::__construct();

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}

		$this->load->database();
		$this->load->model('Pesan_Siswa_model');
		
	}

	public function index()
	{
        $data['judul'] = 'Kritik & Saran';
		$data['user'] = $this->session->userdata('nama');
		
		$this->load->view('templates/header',$data);
		$this->load->view('kritik_saran/index',$data);
		$this->load->view('templates/footer');
	}
	
	public function kirim()
	{
		$this->Pesan_Siswa_model->kirimPesan();
		$this->session->set_flashdata('message', '<div class="alert alert-success font-weight-bold ml-3" role="alert">Pesan anda telah terkirim</div>');
		redirect('kritik_saran');
	}
}