<?php

class User extends MY_Controller 
{
	public function index()
	{
		$this->load->helper('form');
		$this->load->model('productsmodel','products');

		$this->load->library('pagination');
		$config= [
			'base_url'		=>	base_url('user/index'),
			'per_page'		=>	15,
			'total_rows'	=>	$this->products->count_all_products(),
			
		];

		$this->pagination->initialize($config);

		$products = $this->products->all_products_list($config['per_page'], $this->uri->segment(3));

		$this->load->view('public/product_list', compact('products'));
	}
	public function search()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('query','Query','required');

		if( ! $this->form_validation->run() )
			return $this->index();

		$query = $this->input->post('query');
		return redirect("user/search_results/$query");
		
	}
	public function search_results($query){
		$this->load->helper('form');
		$this->load->model('productsmodel','products');

		$this->load->library('pagination');
		$config= [
			'base_url'		=>	base_url("user/search_results/$query"),
			'per_page'		=>	9,
			'total_rows'	=>	$this->products->count_search_results($query),
			'uri_segment'	=>	4,
			
		];

		$this->pagination->initialize($config);
		$products = $this->products->search($query, $config['per_page'], $this->uri->segment(4));

		$this->load->view('public/search_results',compact('products') );
	}

	/* public function send()
	{
		$this->load->library('email');

		$config = [
			'mailtype'		=>	'html',
			'protocol'		=>	'smtp',
			'smtp_host'		=>	'172.0.0.1',
			'smtp_port'		=> 	 80,
			'smtp_user'		=>	'pratyakshgupta7@gmail.com',
			'smtp_pass'		=>	'pratyaksh',
			'charset'		=>	'iso-8859-1',
			'wordwrap'		=>	TRUE
		];

		$this->email->initialize($config);
		$message = '<h3>Hello Dear User this is test email which is sent to you for testing the working of email.</h3><br>
		<h4>REGARDS PRATYAKSH (admin)</h4>';
		$this->email->from('pratyakshgupta7@gmail.com','Pratyaksh Gupta');
		$this->email->to('pratyakshgupta4@gmail.com');
		$this->email->subject('Testing Email send');
		$this->email->message($message);
		
		if($this->email->send() )
		{
			echo "Email sent Successfully!";
		}
		else{
			show_error($this->email->print_debugger() );
		}
	}
	*/

	/*public function add_to_cart()
	{
		$this->load->helper('form');	
		$this->load->library('cart');
		$data = [
			'id'		=>		'sku_123ABC',
			'qty'		=>		1,
			'price'		=>		40.00,
			'name'		=>		'T-Shirt',
		];

		$this->cart->insert($data);
		$this->load->view('public/cart.php');
	} */


	 public function demo()
	 {
		 $this->load->view('public/dashboard.php');
	 }

	 public function signup()                       // or add users
	 {
		 $this->load->view('public/signup.php');
	 }
	 public function userlogin()
	 {
		 $this->load->view('public/userlogin.php');
	 }

	 private function _flashAndRedirect($successful,$successMessage,$failureMessage)
	{
		if( $successful ) {
			$this->session->set_flashdata('feedback',$successMessage);
			$this->session->set_flashdata('feedback_class', 'alert-success');
		} else {
			$this->session->set_flashdata('feedback',$failureMessage);
			$this->session->set_flashdata('feedback_class', 'alert-danger');
		}
		return redirect('Login/user_login');
	}

	 public function __construct(){
		parent::__construct();

		$this->load->model('usersmodel','users');
		$this->load->helper('form');
	 }

	 public function store_user(){
		$this->load->library('form_validation');
		if($this->form_validation->run('add_user_rules') ){
			//success
			$post= $this->input->post();
			unset($post['submit']);

			return $this->_flashAndRedirect(
				$this->users->add_user($post),
				"You are Added Successfully",
				" Failed to Add, Please Try Again"
);
		}
		else{
			//failed
			return redirect('user/demo');
		}
	 }


	 

}