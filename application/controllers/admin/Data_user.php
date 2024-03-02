<?php 

	class Data_user extends CI_Controller{
        public function index(){
			$this->rental_model->admin_login();
			$data['user'] = $this->rental_model->get_data('admin')->result();

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/Data_user',$data);
			$this->load->view('templates_admin/footer');
		}

        public function tambah_user(){
			$this->rental_model->admin_login();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_tambah_user');
			$this->load->view('templates_admin/footer');
		}
        public function _rules(){
            $this->form_validation->set_rules('nama_admin', 'Nama Pengguna', 'required');
            $this->form_validation->set_rules('usrname', 'Username', 'required');
            $this->form_validation->set_rules('pass', 'Password', 'required');			
        }
        
        public function tambah_user_aksi(){
			$this->rental_model->admin_login();
			$this->_rules();

			if($this->form_validation->run() == FALSE){
				$this->tambah_user();
			}else{
				$nama_admin		= $this->input->post('nama_admin');
				$username		= $this->input->post('usrname');
				$password		= md5($this->input->post('pass'));

				$data = array(
					'nama_admin'   	=> $nama_admin,
					'username'		=> $username,
					'password'		=> $password
				);

				$this->rental_model->insert_data($data, 'admin');
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data User Berhasil Ditambahkan
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('admin/data_user');

			}
            
		}

		public function update_user($id){
			$this->rental_model->admin_login();
			$where = array('id_admin' => $id);
			$data['user'] = $this->db->query("SELECT * FROM admin WHERE id_admin = '$id'")->result();

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/form_update_user',$data);
			$this->load->view('templates_admin/footer');

		}

		public function update_user_aksi(){
			$this->rental_model->admin_login();
			$this->_rules();

			if($this->form_validation->run() == FALSE){
				$this->update_user($this->input->post('id_admin'));
			}else{
				$id 			= $this->input->post('id_admin');
				$nama_admin		= $this->input->post('nama_admin');
				$username		= $this->input->post('usrname');
				$password		= md5($this->input->post('pass'));

				$data = array(
					'nama_admin'   	=> $nama_admin,
					'username'		=> $username,
					'password'		=> $password
				);

				$where = array(
					'id_admin' => $id
				);

				$this->rental_model->update_data('admin',$data,$where);

				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data User Berhasil Diupdate
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('admin/data_user');

			}
		}

		public function delete_user($id){
			$this->rental_model->admin_login();
			$where = array('id_admin' => $id);
			$this->rental_model->delete_data($where, 'admin');


			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data User Berhasil Dihapus
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/data_user');
		}







    }
?>