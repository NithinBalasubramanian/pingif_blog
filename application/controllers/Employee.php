<?php

class Employee extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('ERP_model');
        $this->load->model('Employee_model');
        $this->load->helper('url');

        // Check if the user is logged in
        // if(!$this->session->userdata('id')){
        //     $this->load->view('ERP/login');
        // }

    }

    // fetch employee details
    public function employees_list() {
        // Retrieve employees with status = 1 (active) using the get_all_employees method
        $data['employees'] = $this->Employee_model->get_all_employees();
    
        // Debug print (remove when not needed)
        // print_r($data); die;
    
        // Load the view and pass the employees data
        $this->load->view('erp/employee/index', $data);
    }
    

    public function create() {
        if ($this->input->post()) {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone')
            ];
            $this->Employee_model->insert_employee($data);
            redirect('employee');
        }
        $this->load->view('layout/header');
        $this->load->view('employee/create');
        $this->load->view('layout/footer');
    }

    // public function edit($id) {
    //     if ($this->input->post()) {
    //         $data = [
    //             'name' => $this->input->post('name'),
    //             'email' => $this->input->post('email'),
    //             'phone' => $this->input->post('phone')
    //         ];
    //         $this->Employee_model->update_employee($id, $data);
    //         redirect('employee');
    //     }
    //     $data['employee'] = $this->Employee_model->get_employee_by_id($id);
    //     $this->load->view('layout/header');
    //     $this->load->view('employee/edit', $data);
    //     $this->load->view('layout/footer');
    // }

    // update employee details
        public function update_employee() {
            $id = $this->input->post('employee_id');
            $data = array(
                'name'        => $this->input->post('name'),
                'contact'     => $this->input->post('contact'),
                'email'       => $this->input->post('email'),
                'address'     => $this->input->post('address'),
                'sec_contact' => $this->input->post('sec_contact'),
                'due'         => $this->input->post('due')
            );
        
            $update = $this->Employee_model->update_employee($id, $data);
        
            if ($update) {
                echo json_encode(["status" => "success"]);
            } else {
                echo json_encode(["status" => "error"]);
            }
        }
        

    public function delete($id) {
        $this->Employee_model->delete_employee($id);
        redirect('employee');
    }

    // fetch departments
    public function getDepartments() {
        // Retrieve employees with status = 1 (active)
        $data['departments'] = $this->Employee_model->get_all_departments();
    
        // Debug print (remove when not needed)
        // print_r($data); die;
    
        // Load the view and pass the employees data
        $this->load->view('ERP/departments/index', $data);
    }

     // Update the department details (form submission from modal)
     public function update(){
        $id = $this->input->post('id');
        $data = array(
            'name' => $this->input->post('name')
        );
        $this->Employee_model->update_department($id, $data);
        redirect('erp/departments'); // redirect to departments list after update
    }

    // fetch department employees
    public function getDepartmentEmployees() {
        $department_id = $this->input->post('department_id');
    
        // Load employees based on department_id
        $data['employees'] = $this->Employee_model->getDepartmentEmployees($department_id);
    
        // Return JSON response
        echo json_encode($data);
    }

    // fetch customers
    public function getCustomers() {
        // Retrieve employees with status = 1 (active) using the get_all_employees method
        $data['customers'] = $this->Employee_model->get_all_customers();
    
        // Load the view and pass the employees data
        $this->load->view('erp/customer/index', $data);
    }

    //update customer
    public function update_customer() {
        $id = $this->input->post('customer_id');
        $data = array(
            'name'        => $this->input->post('name'),
            'contact'     => $this->input->post('contact'),
            'email'       => $this->input->post('email'),
            'address'     => $this->input->post('address'),
            'sec_contact' => $this->input->post('sec_contact'),
            'due'         => $this->input->post('due')
        );
    
        $update = $this->Employee_model->update_customer($id, $data);
    
        if ($update) {
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error"]);
        }
    }

    // fetch customers
    public function getProducts() {
        // Retrieve employees with status = 1 (active) using the get_all_employees method
        $data['products'] = $this->Employee_model->get_all_products();
    // print_r($data);die;
        // Load the view and pass the employees data
        $this->load->view('erp/products/index', $data);
    }

     //update customer
     public function update_product() {
        $id = $this->input->post('product_id'); 
        
        $data = array(
            'name' => $this->input->post('name'),
        );
    
        $update = $this->Employee_model->update_product($id, $data);
    
        if ($update) {
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error"]);
        }
    }


    // Get active departments and return as JSON
    public function getDepartmentJson() {
        $departments = $this->Employee_model->get_active_departments();
        echo json_encode(["status" => "success", "departments" => $departments]);
    }

    // Insert new employee via AJAX
    public function add_employee() {
        $data = array(
            'name'        => $this->input->post('name'),
            'contact'     => $this->input->post('contact'),
            'email'       => $this->input->post('email'),
            'address'     => $this->input->post('address'),
            'sec_contact' => $this->input->post('sec_contact'),
            'due'         => $this->input->post('due'),
            'department_id'  => $this->input->post('department'),
            'status'      => 1 // Always insert as active
        );

        // print_r($data);die;

        $insert = $this->Employee_model->add_employee($data);

        if ($insert) {
            echo json_encode(["status" => "success", "message" => "Employee added successfully!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to add employee."]);
        }
    }

     // Insert spares via AJAX
     public function add_spares() {
        $data = array(
            'spare_name'        => $this->input->post('spare_name'),
            'spare_code'     => $this->input->post('spare_code'),
            'spare_type'       => $this->input->post('spare_type'),
            'status'      => 1 // Always insert as active
        );

        // print_r($data);die;

        $insert = $this->Employee_model->add_spares($data);

        if ($insert) {
            echo json_encode(["status" => "success", "message" => "Spare added successfully!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to add spare."]);
        }
    }

    // fetch spares
    public function spare_list() {
        // Retrieve employees with status = 1 (active) using the get_all_employees method
        $data['spares'] = $this->Employee_model->get_all_spares();
    // print_r($data);die;
        // Load the view and pass the employees data
        $this->load->view('erp/spares/spare_list', $data);
    }

     //update spares
     public function update_spare() {
        $id = $this->input->post('spare_id'); 
       
        $data = array(
            'spare_name' => $this->input->post('spare_name'),
            'spare_code' => $this->input->post('spare_code'),
            'spare_type' => $this->input->post('spare_type'),
        );
        
        $update = $this->Employee_model->update_spare($id, $data);
    // print_r($update);die;
        if ($update) {
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error"]);
        }
    }

    // delete spares
    public function status_change() {
        $id = $this->input->post('id');
        $table = $this->input->post('table');
        $status = $this->input->post('status');
    
        $this->db->where('id', $id)
                 ->update($table, ['status' => $status]);
    
        if($this->db->affected_rows() > 0) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
    }

     // fetch departments
     public function getInvoices() {
        // Retrieve customer with status = 1 (active)
        $data['customers'] = $this->Employee_model->get_all_customers();
        $data['spares'] = $this->Employee_model->get_all_spares();
        $data['products'] = $this->Employee_model->get_all_products();
    
        // Load the view and pass the customer data
        $this->load->view('ERP/invoices/index', $data);
    }


    // get product and spare code via ajax
    public function get_item_code($type) {

        $itemId = $this->input->post('item_id');
        
        if($type == 'product') {
            $item = $this->Employee_model->get_product($itemId);
            $code = $item['id'] ?? '';
        } else {
            $item = $this->Employee_model->get_spare($itemId);
            $code = $item['spare_code'] ?? '';
        }
    
        echo json_encode(['code' => $code]);
    }

    // generate pdf
    public function generate_invoice_pdf($invoiceId) {
        // Load dompdf
        require_once FCPATH . 'vendor/autoload.php';
    
        // Load invoice data
        $data['invoice'] = $this->Employee_model->get_invoice($invoiceId);
        $data['items'] = $this->Employee_model->get_invoice_items($invoiceId);
    
        if(empty($data['invoice'])) {
            die("Invoice not found");
        }
    
        // Load HTML content
        $html = $this->load->view('ERP/invoices/invoice_pdf', $data, true);
    
        // Configure dompdf
        $options = new Dompdf\Options();
        $options->set('isRemoteEnabled', true);
        
        $dompdf = new Dompdf\Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
    
        // Output PDF
        $dompdf->stream("invoice_{$invoiceId}.pdf", ["Attachment" => 1]);
    }


    // save invoice
    public function save_invoice() {
        
        $invoiceData = [
            'customer_id' => $this->input->post('customer_id'),
            'subtotal' => $this->input->post('subtotal'),
            'tax_amount' => $this->input->post('tax'),
            'grand_total' => $this->input->post('grand_total'),
            'invoice_date' => date('Y-m-d H:i:s')
        ];
        
        $invoiceId = $this->Employee_model->save_invoice($invoiceData);

        // print_r($invoiceId);die;
        
        foreach($this->input->post('items') as $item) {
            $itemData = [
                'invoice_id' => $invoiceId,
                'item_type' => $item['type'],
                'item_id' => $item['item_id'],
                'item_code' => $item['code'],
                'quantity' => $item['qty'],
                'unit_price' => $item['price'],
                'description' => $item['description']
            ];
            
            $this->Employee_model->save_invoice_item($itemData);
        }
        
        echo json_encode(['status' => 'success', 'invoice_id' => $invoiceId]);
    }

    // invoice genartion list
    public function invoice_generation_list(){
        $data['invoices_lists'] = $this->Employee_model->get_all_invoices_list();
        $this->load->view('erp/invoices/invoice_generation_list', $data); // Fix typo in 'invoices' folder name
    }
    
}