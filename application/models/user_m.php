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
      
      $tmp = $query->result();
      
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
