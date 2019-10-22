<?php

class Login extends CI_Controller {

    public function __construct()
	{
        parent::__construct();
        $this->load->database();
        $this->load->model('Login_model');
        $this->load->library('form_validation');
        
	} 

    public function index()
    {
        $data['judul'] = 'Login';

        $this->load->view('templates/login_header',$data);
        $this->load->view('login/index');
        $this->load->view('templates/footer');
    }

    public function submit()
    {
        $nis = $this->input->post('usernis');
        $password = md5($this->input->post('password'));
        
        $user = $this->db->get_where('user', ['nis' => $nis])->row_array();
        $nama = $user['nama'];
        $id = $user['id'];
        $gambar = $user['gambar'];
        
        // $this->Login_model->cek_login('user',$where)->num_rows();
		if ($user['password'] == $password) {
			$data = [
                'nama' => $nama,
                'nis' => $nis,
                'id' => $id,
                'gambar' => $gambar,
                'status' => 'login'
			];
            $this->session->set_userdata($data);
            if ($user['nis'] == '999999999' && $user['password'] == '21232f297a57a5a743894a0e4a801fc3') {
                redirect(base_url('admin'));
            }
            redirect(base_url('forum'));
		} else {
			redirect('login');
		} 	
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'name', 'required|trim');
        $this->form_validation->set_rules('nis', 'nis', 'required|numeric');
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password doesnt match',
            'min_length' => 'password too short'
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';

            $this->load->view('templates/login_header',$data);
            $this->load->view('login/index');
            $this->load->view('templates/footer');	
        } else {
            $this->Login_model->uploadUser();
            $this->session->set_flashdata('message', '<div class="alert alert-success font-weight-bold" role="alert">Anda telah tedaftar, silahkan login</div>');
            redirect(base_url('login#main'));
        }  
    }

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
