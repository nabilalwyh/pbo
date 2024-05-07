<?php
class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

    public function index()
    {
		// echo "login";
        $this->load->view('login.php');
    }

	public function authorize(){
		$account_email = 'admin@gmail.com';
		$account_password = "admin";
 
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if ($email == $account_email && $password == $account_password) {
			// Jika cocok, redirect ke halaman selamat datang
			$userData = [
				'email' => $email
			];

			$this->session->set_userdata($userData);
			return redirect("/",'location');
		} else {
			// Jika tidak cocok, menampilkan pesan error
			$this->session->set_flashdata('error', 'Username atau password salah');
			return redirect("auth");
			echo "Username atau password salah.";
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		return redirect('/');
	}

}
