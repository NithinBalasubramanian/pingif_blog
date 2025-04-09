<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// $route->get('employee', 'EmployeeController::index');

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// $route['default_controller'] = 'employee';
// $route['employee'] = 'employee/index';
// $route['employee/create'] = 'employee/create';
// $route['employee/edit/(:num)'] = 'employee/edit/$1';
// $route['employee/delete/(:num)'] = 'employee/delete/$1';
// $route['employees'] = 'Erp/employees_list';
// $route['employee'] = 'Employee'; 
// $route['employee/(:any)'] = 'Employee/$1';
//route url you wnat to map        =   controller name and its method
$route['erp/departments']                = 'Employee/getDepartments';         // List employees   
$route['erp/departments/update']          = 'Employee/update';          // Process update form
$route['erp/employees']                = 'Employee/employees_list';         // List employees    
$route['erp/employee/add']             = 'Employee/add_employee';             // Show add employee form
$route['erp/employee/update']          = 'Employee/update_employee';          // Process update form
// $route['employee/delete/(:num)']   = 'Erp/delete_employee/$1';       // Delete employee

$route['erp/customers']          = 'Employee/getCustomers';          // Process update form
$route['erp/customer/update']          = 'Employee/update_customer';   

$route['erp/products']          = 'Employee/getProducts';          // Process update form
$route['erp/product/update']          = 'Employee/update_product';   

$route['erp/json/departments']                = 'Employee/getDepartmentJson';         // List employees   

$route['erp/spare_list']          = 'Employee/spare_list';          // Process update form
$route['erp/spares/add']             = 'Employee/add_spares'; 
$route['erp/spares/update']          = 'Employee/update_spare'; 
$route['erp/status_change'] = 'Employee/status_change'; // delete spares

$route['erp/invoices']                = 'Employee/getInvoices';         // List employees   
$route['erp/get_item_code/(:any)'] = 'Employee/get_item_code/$1';        // get spare and product code
$route['erp/generate_invoice_pdf/(:num)'] = 'Employee/generate_invoice_pdf/$1';   // get pdf download
$route['erp/save_invoice']                = 'Employee/save_invoice';      // save invoice into db

$route['erp/invoice_generation_list']                = 'Employee/invoice_generation_list';  // list of invoice geneartion



$route['admin'] 			= 'Admin';
$route['View/(:any)/(:any)'] = 'Admin/view/$1/$2';
$route['View_admin/(:any)/(:any)']='Admin/View_admin/$1/$2';
$route['View_front/(:any)/(:any)'] = 'Admin/View_front/$1/$2';
$route['View_profile/(:any)'] = 'Home/View_profile/$1';
$route['Insert/(:any)/(:any)/(:any)/(:any)'] = 'Admin/insert/$1/$2/$3/$4';
$route['View_news/(:any)'] = 'Admin/view_news/$1';
$route['Delete/(:any)/(:any)/(:any)/(:any)'] = 'Admin/delete/$1/$2/$3/$4';
$route['Login_admin/(:any)']='Admin/Login_admin/$1';
$route['Logout_admin']='Admin/Logout_admin';

?>