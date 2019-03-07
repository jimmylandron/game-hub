<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{

    public function index(){
        // Get All Products
        $data['products'] = $this->Product_model->get_products();

        // Load View
        $data['main_content'] = 'products';        
       $this->load->view('layouts/main', $data);
    }

    public function details($id){
        // Get Products Details
        $data['product'] = $this->Product_model->get_product_details($id);

        // Load View
        $data['main_content'] = 'details';        
       $this->load->view('layouts/main', $data);
    }

    // Added
    public function category($id){
        //get product details 
        //2 nd change
        $data['products'] = $this->Product_model->get_category_products($id);
        //Load View
        $data['main_content'] = 'category';
        $this->load->view('layouts/main', $data);
       
    }
}