<?php
class Admin extends CI_Controller
{
	public $CI = NULL;
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->library('session');
		$this->load->helper('url');
	}
	public function index()
	{
		if ($this->session->userdata('admin_id')) {
			$this->load->view('admin/index');
		} else {
			$this->load->view('admin/login');
		}

	}
	public function View_admin($foldername, $filename)
	{
		$this->load->view('admin/' . $foldername . '/' . $filename);
	}
	public function view_front($foldername, $filename)
	{
		if ($filename == 'add_blog') {
			if ($this->session->userdata('user')) {
				$this->load->view('home/' . $foldername . '/' . $filename);
			} else {
				$this->load->view('home/sign/login');
			}
		} else {
			$this->load->view('home/' . $foldername . '/' . $filename);
		}
	}
	public function view_news($id)
	{
		$data['news_id'] = $id;
		$this->load->view('home/index', $data);
	}
	public function login()
	{
		$email = $this->input->post('email');
		$password = sha1($this->input->post('password'));
		$val_check = $this->Admin_model->table_column('user', 'email', $email, 'password', $password);
		if (count($val_check) > 0) {
			foreach ($val_check as $val_row) {
				$this->session->set_userdata('user', $val_row['fname']);
				$this->session->set_userdata('user_id', $val_row['id']);
				redirect('View_front/create_blog/add_blog');
			}
		} else {
			$this->session->set_flashdata('msg', "Incorrect Email or Password");
			redirect('View_front/sign/login');
		}
	}
	public function insert($tablename, $foldername, $prev_filename, $pagename)
	{
		if ($tablename == 'categories' || $tablename == 'products') {
			if (count($_FILES) > 0) {
				$fileExt = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
				$filename = time() . '_a.' . $fileExt;
				$config['upload_path'] = './assets/admin/uploaded_files';
				$config['allowed_types'] = '*';
				$config['encrypt_name'] = FALSE;
				$config['file_name'] = $filename;
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('image')) {
					$error = array('error' => $this->upload->display_errors());
				} else {
					$datas = array('image' => $this->upload->data());
				}
			}
		}


		$columns = $this->Admin_model->table($tablename);
		for ($i = 0; $i < count($columns); $i++) {
			if (($columns[$i] != "id") && ($columns[$i] != "date_modified")) {
				if ($columns[$i] == "status") {
					$data['status'] = "1";
				} else if ($columns[$i] == "date_created") {
					$date = date('Y-m-d');
					$data[$columns[$i]] = $date;
				} else if ($columns[$i] == "slug_name") {
					if ($tablename == "categories") {
						$data[$columns[$i]] = strtolower(str_replace(" ", "_", $data["category_name"]));
					}
				} else {
					$data[$columns[$i]] = $this->input->post($columns[$i]);
				}
			}
		}
		if ($tablename == 'categories') {
			$data['category_image'] = $filename;
		}
		if ($tablename == 'products') {
			$data['product_image'] = $filename;
		}
		if ($this->input->post('password')) {
			$data['password'] = sha1($this->input->post('password'));
		}

		$insert = $this->Admin_model->create($tablename, $data);

		if ($insert == true) {
			redirect('View_admin/' . $foldername . '/' . $pagename . '');
		} else {
			redirect('View_admin/' . $foldername . '/' . $prev_filename . '');
		}


	}

	public function subscribe()
	{
		$tablename = "subscribe";
		$data = array(
			'email' => $this->input->post('email'),
			'date' => date('d-m-Y'),
		);
		$msg = '';
		$msg .= 'Hello , Thank you for subscribing . We will keep uptodate Information .';
		$msg .= 'Not with profession But With Passion';
		$email = $this->input->post('email');
		$subject = 'PingifBlog';
		$url = '';
		$on_url = 'http://localhost/pingifinit_blog/Api/send_mail?';
		$url .= '&message=' . urlencode($msg);
		$url .= '&email=' . urlencode($email);
		$url .= '&subject=' . urlencode($subject);
		$urltouse = $on_url . $url;
		$response = file_get_contents($urltouse);
		$this->Admin_model->create($tablename, $data);
	}
	public function delete($tablename, $id, $foldername, $filename)
	{
		$data['id'] = $id;
		$delete = $this->Admin_model->delete_data($tablename, $data);
		redirect('View_admin/' . $foldername . '/' . $filename . '');
	}
	public function logout()
	{
		$this->session->unset_userdata('user');
		$this->session->unset_userdata('user_id');
		redirect('Home');
	}
	public function status()
	{
		$id = $this->input->post('id');
		$tablename = $this->input->post('tablename');
		$profile = $this->Admin_model->table_column($tablename, 'id', $id);
		foreach ($profile as $row) {
			$status = $row['status'];
			if ($status == 1) {
				$data['status'] = 0;
				$where['id'] = $id;
				$this->Admin_model->edit($tablename, $data, $where);
			}
			if ($status == 0 || $status == '') {
				$data['status'] = 1;
				$where['id'] = $id;
				$this->Admin_model->edit($tablename, $data, $where);
			}

		}
	}
	public function Login_admin($tablename)
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$check = $this->Admin_model->table_column($tablename, 'username', $username, 'password', $password);
		if (count($check) > 0) {
			foreach ($check as $row) {
				$this->session->set_userdata('admin_id', $row['admin_id']);
			}
			redirect('admin');
		} else {
			redirect('admin');
		}
	}
	public function Logout_admin()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
	public function Edit_smtp($tablename, $foldername, $file)
	{
		$where['id'] = '1';
		$data = array(
			'port' => $this->input->post('port'),
			'host' => $this->input->post('host'),
			'user' => $this->input->post('user'),
			'pass' => $this->input->post('pass'),
			'status' => '1',
		);
		$insert = $this->Admin_model->update_data($tablename, $data, $where);
		if (isset($insert)) {
			redirect('View_admin/' . $foldername . '/' . $file);
		}
	}
	public function Edit_privacy($tablename, $foldername, $file)
	{
		$where['id'] = 1;
		$data = array(
			'privacy' => $this->input->post('privacy'),
		);
		$insert = $this->Admin_model->update_data($tablename, $data, $where);
		if (isset($insert)) {
			redirect('View_admin/' . $foldername . '/' . $file);
		}
	}
}