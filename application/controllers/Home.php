<?php
class Home extends CI_Controller{
	public $CI = NULL;
	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->helper('url');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('home/home');
	}

	public function list_blog()
	{
		$search = $this->input->post('search');
		$data['list_out'] = $this->Admin_model->table_column_like('news','news_heading',$search,'news_preview',$search,'news_reporter',$search);
		$this->load->view('home/list_blogs/list_blogs',$data);
	}
	public function view_profile($profile_id)
	{
		$data['data'] = $profile_id;
		$this->load->view('home/profile/view_profile',$data);
	}
	public function profile_img()
	{
		$fileExt = pathinfo($_FILES["profile_img"]["name"], PATHINFO_EXTENSION);
		
        $output='';
		    $name=time().'_user.'.$fileExt;
            $config['upload_path']='./assets/user/profile/'; 
            $config['allowed_types']='png|jpg|jpeg';
            $config['encrypt_name']=FALSE;
            $config['file_name']=$name;
            $this->load->library('upload',$config);
			$this->upload->do_upload('profile_img');
			$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
			$data['img']= $upload_data['file_name'];
            $user_id=$this->session->userdata('user_id');
            $val_check=$this->Admin_model->table_column('user','id',$user_id);
            if(count($val_check)>0){
                 $where['id']=$user_id;
                $this->Admin_model->update_data('user',$data,$where);
                $result=TRUE;
            }
        if ($result == TRUE) {
            $url=''.base_url().'assets/user/profile/'.$name.'';
            $output.='<img class="profile_image_view" src="'.base_url().'assets/user/profile/'.$name.'" alt="img" >';
            echo $output;
        }
	}
	public function primary_img()
	{
		$fileExt = pathinfo($_FILES["primary_img"]["name"], PATHINFO_EXTENSION);
		
        $output='';
		$name=time().'_blog_img.'.$fileExt;
		$config['upload_path']='./assets/user/blogs/'; 
		$config['allowed_types']='png|jpg|jpeg';
		$config['encrypt_name']=FALSE;
		$config['file_name']=$name;
		$this->load->library('upload',$config);
		$this->upload->do_upload('primary_img');
		$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
		$data['news_image']= $upload_data['file_name'];
		$data['date_created']= date('d-m-Y');
		$blog_id = mt_rand(1000000, 9999999);
		$uniq_test = true;
		while($uniq_test == true){
			$uniq_check = $this->Admin_model->table_column('news','blog_id',$blog_id);
			if(count($uniq_check) > 0){
				$blog_id = mt_rand(1000000, 9999999);
			}else{
				$uniq_test = false;
			}
		}
		$data['blog_id'] = $blog_id;
		$this->session->set_userdata('blog_id',$blog_id);
		$user_id=$this->session->userdata('user_id');
		$data['user_id']=$user_id;
		$this->Admin_model->create('news',$data);
		$output.='<img src="'.base_url().'assets/user/blogs/'.$name.'" alt="img" width="100%" height="100%">';
		echo $output;
	}
	public function upload_blog_datas()
	{
		$data =array(
			'news_reporter' => $this->input->post('news_reporter'),
			'category_id' => $this->input->post('category_id'),
			'news_heading' => $this->input->post('news_heading'),
			'news_preview' => $this->input->post('news_preview'),
			'news_cont' => $this->input->post('news_cont'),
		);
		$where['blog_id'] = $this->session->userdata('blog_id');
		$this->Admin_model->update_data('news',$data,$where);
	}
	public function list_sub_data()
	{
		$blog_id = $this->session->userdata('blog_id');
		$sub_cont = $this->Admin_model->table_column('sub_cont_blog','blog_id',$blog_id);
		$output ='';
		foreach($sub_cont as $sub_row){ 
			 if($sub_row['sub_heading'] != ''){ 
			$output .='<h5 class="sub_heading">'.$sub_row['sub_heading'].'</h5>';
			} 
			if($sub_row['sub_cont'] != ''){ 
			$output .='<p class="sub_cont">'.$sub_row['sub_cont'].'</p>';
			}
			if($sub_row['sub_img'] != ''){ 
			$output .='<div class="sub_img">
			<img src="'.base_url().'assets/user/blogs_sub/'.$sub_row['sub_img'].'" alt="" width="100%" height="100%">
			</div>';
			}
		 } 
		 echo $output;
	}
	public function insert_data()
	{
		$data = array(
			'sub_heading' => $this->input->post('sub_head'),
			'sub_cont' => $this->input->post('sub_cont'),
			'blog_id' => $this->session->userdata('blog_id'),
			'date' => date('d-m-Y'),
		);
		if($_FILES["sub_img"]["name"]){
			$fileExt = pathinfo($_FILES["sub_img"]["name"], PATHINFO_EXTENSION);
			$name=time().'_blog_sub_img.'.$fileExt;
			$config['upload_path']='./assets/user/blogs_sub/'; 
			$config['allowed_types']='png|jpg|jpeg';
			$config['encrypt_name']=FALSE;
			$config['file_name']=$name;
			$this->load->library('upload',$config);
			$this->upload->do_upload('sub_img');
			$upload_data = $this->upload->data();
			$data['sub_img']= $upload_data['file_name'];
		}else{
			$data['sub_img'] = '';
		}
		$this->Admin_model->create('sub_cont_blog',$data);
	}
	public function host()
	{
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$data = array();
		$host = $this->Admin_model->table_column('news','blog_id',$id);
		foreach($host as $row){
			if($row['status'] == '1'){
				$data['status'] = '0';
			}else{
				$data['status'] = '1';
			}
			$where['blog_id'] = $id;
			$this->Admin_model->update_data('news',$data,$where);
			echo json_encode($data);
		}
	}
	public function list_drop_news()
	{
		$cat_id = $this->input->post('cat_id');
		$output = '';
		$data = $this->Admin_model->table_column('news','category_id',$cat_id);
		if(count($data)>0){
			foreach($data as $row){
				$output .= '<a class="drop_news" href="'.base_url().'View_news/'.$row['blog_id'].'">
								<div class="drop_img">
									<img src="'.base_url().'assets/user/blogs/'.$row['news_image'].'" alt="" width="100%" height="100%" class="drop_image>
								</div>
								<div class="drop_head">
									<p>'.$row['news_heading'].'</p>
								</div>
							</a>';
			}
		}else{
			$output.='<div class="drop_not_found"><h3>Sorry , No Datas Found</h5></div>';
		}
		echo $output;
	}
}