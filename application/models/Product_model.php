<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Product_model extends CI_Model{

    // Get All Products
    public function get_products(){

        $this->db->select('*');
        $this->db->from('products');
        $query = $this->db->get();
        return $query->result();
    }

    // Get Single Product
    public function get_product_details($id){
        
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }


    // Get Categories
    public function get_categories(){
        $this->db->select('*');
        $this->db->from('categories');
        $query = $this->db->get();
        return $query->result();
    }

    // Get products in the category ------ Added 
    public function get_category_products($category_id){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('category_id',$category_id);
    
        $query = $this->db->get();
        return $query->result();
    }

    // Get Most Poupular Products
    public function get_popular(){
        $this->db->select('P.*, COUNT(O.product_id) as total');
        $this->db->from('orders AS O');
        $this->db->join('products AS P', 'O.product_id = P.id', 'INNER');
        $this->db->group_by('O.product_id');
        $this->db->order_by('total', 'desc');
        $query = $this->db->get();
        return $query->result();
    }
}