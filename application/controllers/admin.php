<?php

class Admin extends MY_Controller
{
	public function admin_dashboard(){

		$this->load->library('pagination');
		$config= [
			'base_url'		=>	base_url('admin/admin_dashboard'),
			'per_page'		=>	5,
			'total_rows'	=>	$this->products->num_rows(),
			
		];

		$this->pagination->initialize($config);
		
		$products= $this->products->products_list( $config['per_page'], $this->uri->segment(3) );

		$this->load->view('admin/admin_dashboard', ['products'=>$products]);
	}

	public function add_product()
	{
		$this->load->view('admin/add_product.php');
	}

	public function store_product(){

		$config1 = [

			'upload_path'		=>		'./uploads',
			'allowed_types'		=>		'jpg|jpeg|png|gif|JPG',
		];
		$this->load->library('upload', $config1);
		$this->load->library('form_validation');
		if( $this->form_validation->run('add_product_rules') && $this->upload->do_upload('image') )
		{
			$post= $this->input->post();
			
			unset($post['submit']);
			$data= $this->upload->data();
			

			$image_path= base_url("uploads/".$data['raw_name'].$data['file_ext']);
			$post['image_path'] = $image_path;

			return $this->_flashAndRedirect(
							 $this->products->add_product($post),
							 "Product Added Successfully",
							 "Product Failed to Add, Please Try Again"
			);

		} else{
			$upload_error = $this->upload->display_errors();
			
			$this->load->view('admin/add_product',compact('upload_error'));
			
		}
	}

	public function edit_product($product_id)
	{
		$product= $this->products->find_product($product_id);
		$this->load->view('admin/edit_product',['product'=> $product]);
	}
 
	public function update_product($product_id)
	{
		$this->load->library('form_validation');
		if( $this->form_validation->run('add_product_rules') )
		{
			$post= $this->input->post();
			unset($post['submit']);
			
			return  $this->_flashAndRedirect(
						 $this->products->update_product($product_id,$post),
						 "Product Updated Successfully",
						 "Product Failed to Update, Please Try Again"
			);

		} else{
			return redirect('admin/edit_product');
		}

	}

	public function delete_product()
	{
		$product_id = $this->input->post('product_id');

		return $this->_flashAndRedirect(
					$this->products->delete_product($product_id),
					"Product Deleted Successfully",
					"Product Failed to Delete, Please Try Again"
		);

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
		return redirect('admin/admin_dashboard');
	}

	public function __construct()
	{
		parent::__construct();
		if( ! $this->session->userdata('admin_id') )
			return redirect('login');
		$this->load->model('productsmodel','products');
		$this->load->helper('form');
	}
}
