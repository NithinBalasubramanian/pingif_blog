<?php
class Employee_model extends CI_Model {
    public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
    // get all employees
    public function get_all_employees() {
        $this->db->select('employee.*, departments.name as department_name');
        $this->db->from('employee');
        $this->db->join('departments', 'departments.id = employee.department_id', 'left');
        $this->db->where('employee.status', 1);
        
        return $this->db->get()->result_array();
    }
    
    
    public function insert_employee($data) {
        $this->db->insert('employee', $data);
    }

    public function get_employee_by_id($id) {
        return $this->db->get_where('employee', ['id' => $id])->row_array();
    }

     // Generic update function
     public function update_all($table, $data, $where) {
        $this->db->where($where);
        return $this->db->update($table, $data);
    }
    
    // Function to update employee details
    public function update_employee($id, $data) {
        return $this->update_all('employee', $data, ['id' => $id]);
    }

    // Function to update employee details
    public function update_customer($id, $data) {
        return $this->update_all('customers', $data, ['id' => $id]);
    }

    // Function to update product details
    public function update_product($id, $data) {
        return $this->update_all('erp_products', $data, ['id' => $id]);
    }

    public function delete_employee($id) {
        $this->db->delete('employee', ['id' => $id]);
    }

    // get all departments
    public function get_all_departments() {
        return $this->db->get('departments')->result_array();
    }

    // to get department employees
    public function getDepartmentEmployees($department_id) {
        $this->db->where('department_id', $department_id);
        $this->db->where('status', 1); // Fetch only active employees
        return $this->db->get('employee')->result_array();
    }
    

     // Update a department
     public function update_department($id, $data){
        $this->db->where('id', $id);
        $this->db->update('departments', $data);
    }

    // get all customers
    //  public function get_all_customers() {
    //     return $this->db->where('status', 1)->get('customers')->result_array();
    // }

      public function get_all_customers() {
        $this->db->select('customers.*, departments.name as department_name');
        $this->db->from('customers');
        $this->db->join('departments', 'departments.id = customers.department_id', 'left');
        $this->db->where('customers.status', 1);
        
        return $this->db->get()->result_array();
    }

    //get all products
    public function get_all_products() {
        return $this->db->where('status', 1)->get('erp_products')->result_array();
    }


    // Get all active departments (status = 1)
    public function get_active_departments() {
        return $this->db->where('status', 1)->get('departments')->result_array();
    }

    // Insert new employee into database
    public function add_employee($data) {
        return $this->db->insert('employee', $data);
    }

     // Insert new customer into database
     public function add_customer($data) {
        return $this->db->insert('customers', $data);
    }

     // Get all active departments (status = 1)
    public function get_active_products() {
        return $this->db->where('status', 1)->get('erp_products')->result_array();
    }

     // Insert new employee into database
     public function add_spares($data) {
        return $this->db->insert('spares', $data);
    }

     //get all spares
     public function get_all_spares() {
        return $this->db->where('status', 1)->get('spares')->result_array();
     }

    public function get_product($id) {
        return $this->db->get_where('products', ['id' => $id])->row_array();
    }
    
    public function get_spare($id) {
        return $this->db->get_where('spares', ['id' => $id])->row_array();
    }

      // Update a spares
    public function update_spare($id, $data){
        $this->db->where('id', $id);
        return $this->db->update('spares', $data);
    }
    

    public function save_invoice($data) {
        $this->db->insert('invoices', $data);
        return $this->db->insert_id();
    }
    
    public function save_invoice_item($data) {
        $this->db->insert('invoice_items', $data);
    }
    
    public function get_invoice($id) {
        return $this->db->select('invoices.*, customers.name as customer_name')
                       ->join('customers', 'customers.id = invoices.customer_id')
                       ->get_where('invoices', ['invoices.id' => $id])
                       ->row_array();
    }
    
    public function get_invoice_items($invoiceId) {
        return $this->db->select('*')
                       ->get_where('invoice_items', ['invoice_id' => $invoiceId])
                       ->result_array();
    }
    

    // get all invoices list
    public function get_all_invoices_list() {
        return $this->db->select('invoices.*, customers.name as customer_name')
                        ->from('invoices')
                        ->join('customers', 'customers.id = invoices.customer_id')
                        ->get()
                        ->result_array();

    }
    

    //get customer individual data
    public function get_customer($id) {
        return $this->db->get_where('customers', ['id' => $id])->row_array();
    }

    public function get_customer_products($customer_id) {
        return $this->db->get_where('customer_products', ['customer_id' => $customer_id])->result_array();
    }

    public function add_product($data) {
        $this->db->insert('customer_products', $data);
        return $this->db->insert_id();
    }

    
}