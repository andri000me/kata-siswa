<?php

class Admin extends CI_Controller {

	public function __construct()
    {
		parent::__construct();

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
        }

        $user = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        if ($user['nama'] != 'admin') {
           if($this->session->userdata('status') != "login"){
			    redirect(base_url("login"));
            } else {
                redirect(base_url("forum"));
            }
        }

		$this->load->database();
        $this->load->model('Unggahan_model');
        $this->load->model('Admin_model');
        $this->load->model('Pesan_Siswa_model');
	}

	public function index()
	{
        $data['judul'] = 'Admin';
        $data['menu'] = 'index';
        $data['user'] = $this->session->userdata('nama');
        $data['jmlUser'] = $this->Admin_model->hitungUser();
        $data['jmlUnggahan'] = $this->Admin_model->hitungUnggahan();
        $data['jmlDiskusi'] = $this->Admin_model->hitungDiskusi();
        $data['jmlPesanSiswa'] = $this->Admin_model->hitungPesanSiswa();
		
		$this->load->view('templates/admin_header',$data);
		$this->load->view('admin/index',$data);
		$this->load->view('templates/admin_footer');
    }

    public function siswa()
	{
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $config['base_url'] = 'http://localhost/kata-siswa/admin/siswa';
        $this->db->like('nama', $data['keyword']);
        $this->db->or_like('nis', $data['keyword']);
        $this->db->from('user');
        $config['total_rows'] = $this->db->count_all_results();
        $data['jml_cari'] = $config['total_rows'];
		$config['per_page'] = 20;
		$data['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);
        
        $data['judul'] = 'Admin';
        $data['menu'] = 'siswa';
        $data['user'] = $this->session->userdata('nama');
        $data['siswa'] = $this->Admin_model->getAllUser($config['per_page'], $data['start'], $data['keyword']);
		
		$this->load->view('templates/admin_header',$data);
		$this->load->view('admin/siswa',$data);
		$this->load->view('templates/admin_footer');
    }

    public function unggahan()
	{
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $config['base_url'] = 'http://localhost/kata-siswa/admin/unggahan';
        $this->db->like('teks', $data['keyword']);
        $this->db->or_like('judul', $data['keyword']);
        $this->db->or_like('nama', $data['keyword']);
        $this->db->from('unggahan');
        $config['total_rows'] = $this->db->count_all_results();
        $data['jml_cari'] = $config['total_rows'];
        $config['per_page'] = 20;
		$data['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $data['judul'] = 'Admin';
        $data['menu'] = 'unggahan';
        $data['user'] = $this->session->userdata('nama');
        $data['unggahan'] = $this->Admin_model->getAllUnggahan($config['per_page'], $data['start'], $data['keyword']);
		
		$this->load->view('templates/admin_header',$data);
		$this->load->view('admin/unggahan',$data);
		$this->load->view('templates/admin_footer');
    }

    public function diskusi()
	{
       if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $config['base_url'] = 'http://localhost/kata-siswa/admin/diskusi';
        $this->db->like('pesan', $data['keyword']);
        $this->db->or_like('nama', $data['keyword']);
        $this->db->from('diskusi');
        $config['total_rows'] = $this->db->count_all_results();
        $data['jml_cari'] = $config['total_rows'];
		$config['per_page'] = 20;
		$data['start'] = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $data['judul'] = 'Admin';
        $data['menu'] = 'diskusi';
        $data['user'] = $this->session->userdata('nama');
        $data['diskusi'] = $this->Admin_model->getAllDiskusi($config['per_page'], $data['start'], $data['keyword']);
		
		$this->load->view('templates/admin_header',$data);
		$this->load->view('admin/diskusi',$data);
		$this->load->view('templates/admin_footer');
    }

    public function kritik_saran()
	{
        $data['judul'] = 'Admin';
        $data['menu'] = 'kritik_saran';
        $data['user'] = $this->session->userdata('nama');
        $data['pesan'] = $this->Pesan_Siswa_model->getAllPesan();
		
		$this->load->view('templates/admin_header',$data);
		$this->load->view('admin/kritik_saran',$data);
		$this->load->view('templates/admin_footer');
    }

    public function lapor()
	{
        $data['judul'] = 'Admin';
        $data['menu'] = 'lapor';
        $data['user'] = $this->session->userdata('nama');
        $data['pesan'] = $this->Pesan_Siswa_model->getAllPesan();
		
		$this->load->view('templates/admin_header',$data);
		$this->load->view('admin/lapor',$data);
		$this->load->view('templates/admin_footer');
    }

    public function logout() {
		$this->session->sess_destroy();
		redirect(base_url('login'));
    }
    
    public function hapusSiswa($id)
    {
        $this->Admin_model->hapusDataUser($id);
        redirect('admin/siswa');
    }

    public function hapusUnggahan($id)
    {
        $this->Admin_model->hapusDataUnggahan($id);
        redirect('admin/unggahan');
    }

    public function hapusDiskusi($id)
    {
        $this->Admin_model->hapusDataDiskusi($id);
        redirect('admin/diskusi');
    }

}