<?php
class Erp extends CI_Controller
{
	public $CI = NULL;
	function __construct()
	{
		parent::__construct();
		$this->load->model('ERP_model');
		$this->load->library('session');
		$this->load->helper('url');
	}
	public function index()
	{
		if($this->session->userdata('id') != ""){
			$this->load->view('ERP/home/index.php');
		}
		else{
			$this->load->view('ERP/login');
		}
	}
	public function Login($tablename)
	{
		$email = $this->input->post('email');
		$password =$this->input->post('password');
		$check = $this->ERP_model->table_column($tablename,'email',$email,'password',$password);
		if(count($check) > 0)
		{
			foreach($check as $row)
			{
				$this->session->set_userdata('id',$row['id']);
				$this->session->set_userdata('type',$row['type']);
				$this->session->set_userdata('name',$row['name']);
			}
			redirect('erp');
		}
		else{
			$this->session->set_flashdata('msg_error','Incorrect Email or Password');
			redirect('erp');
		}
	}

public function Insert($tablename, $folder, $current_page, $page)
{
	$columns = $this->ERP_model->table($tablename);
				for($i=0;$i<count($columns);$i++)
				{
					if($columns[$i]!="id")
					{
					   if($columns[$i]=="date") {
							$date = date('d-m-Y');
							$data[$columns[$i]] = $date;
						} else {
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
				if($this->input->post('password')){
				   $data['password'] = sha1($this->input->post('password'));
				}
			  
				$insert = $this->ERP_model->create($tablename,$data);
				if(isset($insert)){
					redirect('Erp/View_erp/'.$folder.'/'.$page.'');
				} else {
					redirect('Erp/View_erp/'.$folder.'/'.$current_page.'');
				}
}

public function insert_cont($tablename)
{
	$columns = $this->ERP_model->table($tablename);
	for($i=0;$i<count($columns);$i++)
	{
		if($columns[$i]!="id")
		{
		   if($columns[$i]=="date") {
				$date = date('d-m-Y');
				$data[$columns[$i]] = $date;
			} else {
				$data[$columns[$i]] = $this->input->post($columns[$i]);
			}
		}
	}
	if($this->input->post('password')){
	   $data['password'] = sha1($this->input->post('password'));
	}
  
	$insert = $this->ERP_model->create($tablename,$data);
}

public function View_erp($folder = FALSE, $page = FALSE,$edit =FALSE,$count = FALSE)
{	
	$data = array();
	
	if($edit !=FALSE && $count == FALSE) {
		$data['edit_id'] = $edit;
		} 
		elseif($edit != FALSE && $count != FALSE) {
			$data['edit_id'] = $edit;
			$data['count'] = $count;
		}
		$this->load->view('ERP/'.$folder.'/'.$page,$data);
	
}

public function List_customer()
{
	$i=1;
	$tablename = $this->input->post('table');
	$output = '';
	$cus_data = $this->ERP_model->table_column_desc_by_id($tablename,'status','1');
	if(count($cus_data)>0){
   foreach($cus_data as $cus_row){ 
	   $output .= '<tr class="dark_mode">
		   <td>'.$i.'</td>
		   <td>'.strtoupper($cus_row['name']).'</td>
		   <td>'.$cus_row['contact'].'</td>
		   <td>'.$cus_row['email'].'</td>
		   <td>'.$cus_row['sec_contact'].'</td>
		   <td>'.$cus_row['address'].'</td> 
		   <td>
			<button class="btn btn-info btn-sm edit" data-url="'.base_url().'Erp/View_erp/customer/edit_customer" data-id="'.$cus_row['id'].'">Edit</button>
			<button class="btn btn-danger btn-sm status_change" data-table="customer" data-id="'.$cus_row['id'].'">Delete</button>
		   </td>
	   </tr>';
	$i++; }
	}else{
		$output .= '<tr class="dark_mode">
						<td colspan="7" class="text-center">Table Is Empty</td>
					</tr>';
	}
	echo $output;
}

public function List_del_customer()
{
	$i=1;
	$tablename = $this->input->post('table');
	$output = '';
	$cus_data = $this->ERP_model->table_column_desc_by_id($tablename,'status','0');
	if(count($cus_data)>0){
   foreach($cus_data as $cus_row){ 
	   $output .= '<tr class="dark_mode">
		   <td>'.$i.'</td>
		   <td>'.strtoupper($cus_row['name']).'</td>
		   <td>'.$cus_row['contact'].'</td>
		   <td>'.$cus_row['email'].'</td>
		   <td>'.$cus_row['sec_contact'].'</td>
		   <td>'.$cus_row['address'].'</td>
		   <td>
			<button class="btn btn-success btn-sm status_change" data-table="customer" data-id="'.$cus_row['id'].'">Retain</button>
			<button class="btn btn-warning btn-sm delete_permanent" data-table="customer" data-id="'.$cus_row['id'].'">Delete</button>
		   </td>
	   </tr>';
	$i++; }
	}else{
		$output .= '<tr class="dark_mode">
						<td colspan="7" class="text-center">Table Is Empty</td>
					</tr>';
	}
	echo $output;
}

public function List_employee()
{
	$i=1;
	$tablename = $this->input->post('table');
	$output = '';
	$emp_data = $this->ERP_model->table_column_desc_by_id($tablename,'status','1');
	if(count($emp_data)>0){
   foreach($emp_data as $emp_row){ 
	   $output .= '<tr class="dark_mode">
		   <td>'.$i.'</td>
		   <td>'.strtoupper($emp_row['name']).'</td>
		   <td>'.$emp_row['contact'].'</td>
		   <td>'.$emp_row['email'].'</td>
		   <td>'.$emp_row['sec_contact'].'</td>
		   <td>'.$emp_row['address'].'</td>
		   <td>
			<button class="btn btn-info btn-sm edit" data-url="'.base_url().'Erp/View_erp/customer/edit_customer" data-id="'.$emp_row['id'].'">Edit</button>
			<button class="btn btn-danger btn-sm status_change" data-table="employee" data-id="'.$emp_row['id'].'">Delete</button>
		   </td>
	   </tr>';
	$i++; }
	}else{
		$output .= '<tr class="dark_mode">
						<td colspan="7" class="text-center">Table Is Empty</td>
					</tr>';
	}
	echo $output;
}

public function List_del_employee()
{
	$i=1;
	$tablename = $this->input->post('table');
	$output = '';
	$emp_data = $this->ERP_model->table_column_desc_by_id($tablename,'status','0');
	if(count($emp_data)>0){
   foreach($emp_data as $emp_row){ 
	   $output .= '<tr class="dark_mode">
		   <td>'.$i.'</td>
		   <td>'.strtoupper($emp_row['name']).'</td>
		   <td>'.$emp_row['contact'].'</td>
		   <td>'.$emp_row['email'].'</td>
		   <td>'.$emp_row['sec_contact'].'</td>
		   <td>'.$emp_row['address'].'</td>
		   <td>
			<button class="btn btn-success btn-sm status_change" data-table="employee" data-id="'.$emp_row['id'].'">Retain</button>
			<button class="btn btn-warning btn-sm delete_permanent" data-table="employee" data-id="'.$emp_row['id'].'">Delete</button>
		   </td>
	   </tr>';
	$i++; }
	}else{
		$output .= '<tr class="dark_mode">
						<td colspan="7" class="text-center">Table Is Empty</td>
					</tr>';
	}
	echo $output;
}
public function List_supplier()
{
	$i=1;
	$tablename = $this->input->post('table');
	$output = '';
	$supp_data = $this->ERP_model->table_column_desc_by_id($tablename,'status','1');
	if(count($supp_data)>0){
   foreach($supp_data as $supp_row){ 
	   $output .= '<tr class="dark_mode">
		   <td>'.$i.'</td>
		   <td>'.strtoupper($supp_row['name']).'</td>
		   <td>'.$supp_row['contact'].'</td>
		   <td>'.$supp_row['email'].'</td>
		   <td>'.$supp_row['sec_contact'].'</td>
		   <td>'.$supp_row['address'].'</td>
		   <td>
			<button class="btn btn-info btn-sm edit" data-url="'.base_url().'Erp/View_erp/customer/edit_customer" data-id="'.$supp_row['id'].'">Edit</button>
			<button class="btn btn-danger btn-sm status_change" data-table="supplier" data-id="'.$supp_row['id'].'">Delete</button>
		   </td>
	   </tr>';
	$i++; }
	}else{
		$output .= '<tr class="dark_mode">
						<td colspan="7" class="text-center">Table Is Empty</td>
					</tr>';
	}
	echo $output;
}

public function List_del_supplier()
{
	$i=1;
	$tablename = $this->input->post('table');
	$output = '';
	$supp_data = $this->ERP_model->table_column_desc_by_id($tablename,'status','0');
	if(count($supp_data)>0){
   foreach($supp_data as $supp_row){ 
	   $output .= '<tr class="dark_mode">
		   <td>'.$i.'</td>
		   <td>'.strtoupper($supp_row['name']).'</td>
		   <td>'.$supp_row['contact'].'</td>
		   <td>'.$supp_row['email'].'</td>
		   <td>'.$supp_row['sec_contact'].'</td>
		   <td>'.$supp_row['address'].'</td>
		   <td>
			<button class="btn btn-success btn-sm status_change" data-table="supplier" data-id="'.$supp_row['id'].'">Retain</button>
			<button class="btn btn-warning btn-sm delete_permanent" data-table="supplier" data-id="'.$supp_row['id'].'">Delete</button>
		   </td>
	   </tr>';
	$i++; }
	}else{
		$output .= '<tr class="dark_mode">
						<td colspan="7" class="text-center">Table Is Empty</td>
					</tr>';
	}
	echo $output;
}
public function table_column($tablename = FALSE, $column = FALSE)
{
	return $table_column = $this->ERP_model->table_column($tablename, $column);
}

public function table_column_desc($tablename = FALSE, $column = FALSE ,$val =FALSE)
{
	return $table_column_desc = $this->ERP_model->table_column_desc($tablename, $column ,$val);
}

public function table_column_desc_limit($tablename = FALSE, $column = FALSE ,$val =FALSE)
{
	return $table_column_desc_limit = $this->ERP_model->table_column_desc_limit($tablename, $column ,$val);
}

public function table_column_get($tablename = FALSE,  $column = FALSE, $val=FALSE)
{
	return $table_column = $this->ERP_model->table_column($tablename,$column , $val);
}

public function table_column_get_limit($tablename = FALSE,  $column = FALSE, $val=FALSE)
{
	return $table_column = $this->ERP_model->table_select_data_limit($tablename,$column , $val);
}

public function verify()
{
	$where = array();
	$data = array();
	$id=$this->input->post('id');
	$tablename=$this->input->post('table');
	$check = $this->ERP_model->table_column($tablename,'id',$id);
	foreach($check as $row){
		if($row['verify'] == '1'){
			$data['verify']='0';
		}else{
			$data['verify']='1';
		}
	}
	$where['id'] = $id;
	$update_all = $this->ERP_model->update_all($tablename,$data,$where);
	echo json_encode($data);
}
public function status()
{
	$where = array();
	$data = array();
	$id=$this->input->post('id');
	$tablename=$this->input->post('table');
	$check = $this->ERP_model->table_column($tablename,'id',$id);
	foreach($check as $row){
		if($row['status'] == '1'){
			$data['status']='0';
		}else{
			$data['status']='1';
		}
	}
	$where['id'] = $id;
	$update_all = $this->ERP_model->update_all($tablename,$data,$where);
	echo json_encode($data);
}
public function bill($folder,$filename,$inv)
{
	$data_inv=array();
	$data_inv['invoice']=$inv;
	$this->load->view(''.$folder.'/'.$filename.'',$data_inv);
}
public function delete($tablename, $folder, $delete_id, $current_page)
	{
		$delete= $this->ERP_model->delete_row($tablename, $delete_id);
		if(isset($delete)){
			redirect('Erp/View_erp/'.$folder.'/'.$current_page.'');
		}
	}
	
public function delete_perm()
	{
		$delete_id = $this->input->post('id');
		$tablename = $this->input->post('table');
		$delete= $this->ERP_model->delete_row($tablename, $delete_id);
	}

public function Update_all($tablename, $folder, $edit_id, $current_page, $page)
	{
		$where = array();
				$columns = $fields['columns'] = $this->ERP_model->table($tablename);
				for($i=0;$i<count($columns);$i++)
				{
					if(($columns[$i]!="id")&&($columns[$i]!="status")&&($columns[$i]!="date"))
					{
						if($columns[$i]=="date_modified") {
							$date = date('Y-m-d');
							$data[$columns[$i]] = $date;
						} else{
							$data[$columns[$i]] = $this->input->post($columns[$i]);
						}
					}
				}
			
			
					$where['id'] = $edit_id;
					$update_all = $this->ERP_model->update_all($tablename,$data,$where);
				
				
				if(isset($update_all)){
					redirect('Erp/View_erp/'.$folder.'/'.$page.'');
				} else {
					redirect('Erp/View_erp/'.$folder.'/'.$current_page.'');
				}
	}

	public function logout(){
		$user_data = $this->session->all_userdata();
		foreach ($user_data as $key => $value) {
			if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
				$this->session->unset_userdata($key);
			}
		}
		$this->session->sess_destroy();
		redirect('Admin');
	}
   
 public function import()
	{
	 if(isset($_FILES["file"]["name"]))
	 {
	 $path = $_FILES["file"]["tmp_name"];
	 $object = PHPExcel_IOFactory::load($path);
	 foreach($object->getWorksheetIterator() as $worksheet)
		{
		 $highestRow = $worksheet->getHighestRow();
		 $highestColumn = $worksheet->getHighestColumn();
		 for($row=2; $row<=$highestRow; $row++)
		 {
		 $category_id = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
		 $product_name = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
		 $hsn_code = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
		 $box_piece = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
		 $rate = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
		 $rate_box  = $box_piece*$rate;
		 $purchase_price = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
		 $purchase_box = $box_piece*$purchase_price;
		 $value_in = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
		 $qty = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
		
		 $data[] = array(
		 'category_id'  => $category_id,
		 'product_name'   => $product_name,
		 'hsn_code'   => $hsn_code,
		 'box_piece'   => $box_piece,
		 'rate'   => $rate,
		 'rate_box'   => $rate_box,
		 'purchase_piece'   => $purchase_price,
		 'purchase_box'   => $purchase_box,
		 'value_in'   => $value_in,
		'qty'   => $qty,
		 );
		 }
	 }
	 $this->ERP_model->insert('product',$data);
	 echo 'Data Imported successfully';
	 }
	}
	public function logout_front(){
		$this->session->sess_destroy();
		redirect('erp');
	}

}
?>