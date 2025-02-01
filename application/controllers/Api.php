<?php
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:GET,POST");
header("Access-Control-Allow-Headers:*");
class Api extends CI_Controller{
	public $CI = NULL;
	function __construct(){
		parent::__construct();
		$this->load->model('Api_model');
        $this->load->library('email');
    }
    
    public function fetch_data($tablename)
    {
        $result = $this->Api_model->fetch_all($tablename);
        echo json_encode($result);
    }

    public function send_mail()
    {
        $subject = $_GET['subject'];
        $email = $_GET['email'];
        $message = $_GET['message'];
        $from_email ="nithinmigo1@gmail.com";
        $to_email = $email;
        //Load email library
        $email_config = Array(
            'smtp_crypto'=>'ssl', //add this one
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'nithinmigo1@gmail.com',
            'smtp_pass' => '711015Nithin@1',
            'mailtype'  => 'html',
            'starttls'  => true,
            'newline'   => "\r\n",
            'charset' => 'utf-8',
            'wordwrap' => TRUE,
            
        );
        
        
        $this->load->library('email', $email_config);
        $this->email->set_newline("\r\n");
        
        // $this->email->initialize($config);
        $this->email->from('nithinmigo1@gmail.com','nithin');
        $this->email->to($to_email); 
        $this->email->subject($subject);

        $this->email->message($message);  
        //Send mail
    //Send mail
        if($this->email->send()){
            echo 'success';
        }else{
            echo 'error';
        }
    }
}
?>