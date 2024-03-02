<?php 

	class Auth extends CI_Controller{
		public function login(){

			$this->_rules();
			if($this->form_validation->run() == FALSE ){
				$this->load->view('auth_header');
				$this->load->view('form_login');
				$this->load->view('templates_admin/footer');
			}else{
				$username = $this->input->post('username');
				$password = md5($this->input->post('password'));	

				$cek_customer = $this->rental_model->cek_login_customer($username, $password);
				$cek_admin = $this->rental_model->cek_login_admin($username, $password);

				
				if($cek_customer == TRUE){
					$this->session->set_userdata('username',$cek_customer->username);
					$this->session->set_userdata('id_customer',$cek_customer->id_customer);
					//$this->session->set_userdata('role_id',$cek->role_id);
					//$this->session->set_userdata('nama_rental',$cek->nama_rental);
					$this->session->set_userdata('nama',$cek_customer->nama);
					redirect('customer/dashboard');
				}
				else if ($cek_admin == TRUE){
					$this->session->set_userdata('username',$cek_admin->username);
					$this->session->set_userdata('id_admin',$cek_admin->id_admin);
					//$this->session->set_userdata('role_id',$cek->role_id);
					//$this->session->set_userdata('nama_rental',$cek->nama_rental);
					$this->session->set_userdata('nama',$cek_admin->nama_admin);
					redirect('admin/dashboard');
				}

				else{
					$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Username atau password salah!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
					redirect('auth/login');
				}
			}			
		}

		public function _rules(){
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
		}


		public function ganti_password(){
			$this->load->view('auth_header');
			$this->load->view('ganti_password');
			$this->load->view('templates_admin/footer');
		}

		public function ganti_password_aksi(){
			$pass_baru		= $this->input->post('pass_baru');
			$ulang_pass		= $this->input->post('ulang_pass');

			$this->form_validation->set_rules('pass_baru','Password baru','required');
			$this->form_validation->set_rules('ulang_pass','Ulangi Password','required|matches[pass_baru]');

			if($this->form_validation->run() == FALSE){
				$this->load->view('auth_header');
				$this->load->view('ganti_password');
				$this->load->view('templates_admin/footer');
			}else{
				$data = array( 'password' => md5($pass_baru));
				$id   = array( 'id_customer' => $this->session->userdata('id_customer'));

				$this->rental_model->update_password($id, $data, 'customer');
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
					  Password berhasil diupdate, silakan login!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
				redirect('auth/login');
			}
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect('auth/login');
		}
	}

 ?>