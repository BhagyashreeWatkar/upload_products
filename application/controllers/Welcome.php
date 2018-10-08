<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('welcome_model'); 
	}
 

	public function index()
	{
		//$error=array('error_image' => '',
			//'error_name' => '');
		$this->load->view('upload_image');
	}
	public function uploads()
	{

		$config=array(
		//$config_image = array();
		'upload_path' =>'./uploads/',
		'allowed_types' => 'jpg|png|gif',
		'max_size' => '4000');
		//$config_image['max_width'] = '1024';
		//$config_image['max_height'] = '768';
	$this->load->library('upload',$config);
	$this->upload->do_upload();
	$data=array('upload_data'=>$this->upload->data());
	// echo "<pre>";
	// print_r($data);
	// echo "<pre>";
	$products=array('product_name'=>$this->input->post('productname'),
					'product_image'=>$data['upload_data']['file_name']);

	$this->welcome_model->insert($products);
	redirect('index.php/welcome/product_list');
	//$this->load->view('product_list');


	//if(!$this->upload->do_upload())
	//{
		//$error= array('error'=>$this->upload->display_errors());
		//$this->load->view('upload_image',$error);
	//}
	//else
	//{
	//	$data = array('upload_data'=>$this->upload->data());
		//print_r($data);
	//	$this->image_resize($data['upload_data']['full_path'],$data['upload_data']['file_name']);

	//}
	}
	/*public function image_resize($path,$file)
	{
		$config_resize = array('image_library'=>'gd2',
			'source_image'=>$path,
			'craete_thumb'=>TRUE,
			'maintain_ratio'=>TRUE,
			'width'=>160,
			'height'=>120,
			'new_image'=>'./uploads/thumb/'.$file);
		$this->load->library('image_lib',$config_resize);
		$this->image_lib->resize();
	}*/

	public function product_list()
	{
		
		$product['products']=$this->welcome_model->get_product_lists();
		//echo "<pre>";
		//print_r($product);
		//echo "<pre>";
		$this->load->view('product_list',$product);
	}
	public function edit_product($id)
	{
		$product['products']=$this->welcome_model->edit_product_list($id);
		//print_r($product);
		$this->load->view('edit_product',$product);
	}
	public function update()
	{
		$config=array(
		//$config_image = array();
		'upload_path' =>'./uploads/',
		'allowed_types' => 'jpg|png|gif',
		'max_size' => '4000');
		//$config_image['max_width'] = '1024';
		//$config_image['max_height'] = '768';
	$this->load->library('upload',$config);
	$this->upload->do_upload();
	$data=array('upload_data'=>$this->upload->data());
	//echo "<pre>";
	//print_r($data);
	//echo "<pre>";
	$id=$this->input->post('productid');
	//echo $id;
	//$query=$this->db->query("select * from product_details where product_id='{$id}'");
//print_r($query);
	//foreach ($query->result() as $row)
	//{
	//	unlink('/.uploads/'.$row->product_image);
	//}
	//$product['products']=$this->welcome_model->edit_product_list($id);
	//print_r($product);
	//$this->load->view('edit_product',$product);
	$product=array('product_name'=>$this->input->post('productname'),
					'product_image'=>$data['upload_data']['file_name']);
	//print_r($product);

	$this->welcome_model->update_product($product,$id);
	redirect('index.php/welcome/product_list');
	}
	
	public function delete_product($id)
		{
			//$query = $this->db->query("select * from product_details where product_id ='{$id}'");
			//foreach($query->result() as $row){}
			$this->db->where('product_id',$id);
			$this->db->delete('product_details');
			redirect('index.php/welcome/product_list');
		}

}
