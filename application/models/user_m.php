<?php 

  class  User_m extends CI_Model
  {
    public function __construct()
    {  
      parent::__construct();
    }
    
    public function listing()
    {
      $this->load->database();
      
      $query = $this->db->query("SELECT * FROM user");
      
      //$obj->values:protected->uid->language->value;
      //print_r( $tmp[0]->uid->__get('value'));die;
      $tmp = array();
      foreach( $query->result() as $row )
      {
        $rows['name'] = $row->name;
        $rows['uid'] = $row->uid;
        $rows['date'] = $row->date;
        $rows['age'] = $row->age;
        $rows['type'] = $row->type;
        array_push( $tmp ,$rows );
      }
      
      return $tmp;
      
    }
    

  }
