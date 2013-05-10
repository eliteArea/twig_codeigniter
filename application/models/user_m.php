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
      
      
      foreach( $query->result() as $row )
      {
        var_dump( $row->name );
      }
      
    }
    

  }
