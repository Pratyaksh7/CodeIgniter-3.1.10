<?php

class ProductsModel extends CI_Model {

	public function products_list( $limit, $offset )
	{
		$admin_id= $this->session->userdata('admin_id');
		$query= $this->db
							->select(['name','category','id'])
							->from('products')
							->where('admin_id', $admin_id)
							->limit( $limit, $offset )
							->get();
		return $query->result();                // here we are fetching all the records of products from dB to Dashboard
	}

	public function all_products_list( $limit, $offset )
	{
		$query= $this->db
							->select(['name','category','id','image_path'])
							->from('products')
							->limit( $limit, $offset )
							->get();
		return $query->result();                // here we are fetching all the records of products from dB to Dashboard
	}


	public function count_all_products()
	{
		$query= $this->db
							->select(['name','category','id'])
							->from('products')
							->get();
		return $query->num_rows(); 
	} 

	public function num_rows(){
		$admin_id= $this->session->userdata('admin_id');
		$query= $this->db
							->select(['name','category','id'])
							->from('products')
							->where('admin_id', $admin_id)
							->get();
		return $query->num_rows();   
	}

	public function add_product($array)
	{
		return $this->db->insert('products',$array);

	}

	public function find_product($product_id)
	{
		$q= $this->db->select(['id','name','category'])
					->from('products')
					->where('id', $product_id)
					->get();
		return $q->row();                       // here we are fetching only a single row/single record of particular product as a parameter		
	}

	public function update_product($product_id, Array $product)
	{
		return $this->db
				->where('id', $product_id)
				->update('products', $product);
	}

	public function delete_product($product_id)
	{
		 return 	$this->db->delete('products',['id'=>$product_id]);
	}

	public function search( $query ,$limit, $offset)
	{
		$q = $this->db->from('products')
					->like('name', $query)
					->limit($limit, $offset)
					->get();
		return $q->result() ;			
	}

	public function count_search_results($query)
	{
		$q = $this->db->from('products')
						->like('name', $query)
						->get();
		return $q->num_rows();				
	}
}