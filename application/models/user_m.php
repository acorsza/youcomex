<?php

class User_m extends CI_model{

function get_Users() {
	$this -> db -> select('*');
	$this -> db -> from('user');
    $query = $this -> db -> get();

	if($query -> num_rows() != 0)
	{
		return $query->result();
	}
	else
	{
		return false;
	}
}

function get_Donnors() {

	$sql = "SELECT c.country,d.email,d.id,d.name,d.phone1,d.phone2,d.since,d.user_id
	 	FROM donnor as d, countries c	 	
	 	WHERE d.country=c.idcountries";
	 	$query = $this->db->query($sql);
	 	
	 	if($query -> num_rows() != 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
}


function get_Teachers() {
		$sql = "SELECT c.country,d.email,d.id,d.name,d.phone1,d.phone2,d.since,d.user_id
	 	FROM teacher as d, countries c	 	
	 	WHERE d.country=c.idcountries";
	 	$query = $this->db->query($sql);
	 	
	 	if($query -> num_rows() != 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
}

function get_Staffs() {
		$sql = "SELECT c.country,d.email,d.id,d.name,d.phone1,d.phone2,d.since,d.user_id
	 	FROM staff as d, countries c	 	
	 	WHERE d.country=c.idcountries";
	 	$query = $this->db->query($sql);
	 	
	 	if($query -> num_rows() != 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
}

function create_Login($user) {     
     $this->db->insert('user', $user); 
     return $this->db->insert_id();       
}

function get_id($user) {
	$this->db->select('*');
    $this->db->from('user');
    $this->db->where('login', $user); 
    $query = $this -> db -> get();
    $id = $query->result();
    return $id;
}

function create_Donor($donor) {     
     $this->db->insert('donnor', $donor);    
}

function create_Teacher($teacher) {     
     $this->db->insert('teacher', $teacher);    
}

function create_Staff($staff) {     
     $this->db->insert('staff', $staff);    
}

function login($login, $pwd)
	 {
	   $this -> db -> select('Id, Email, Senha, Nome');
	   $this -> db -> from('Usuario');
	   $this -> db -> where('Email', $login);
	   $this -> db -> where('Senha', $pwd);
	   $this -> db -> limit(1);
	   $query = $this -> db -> get();
	   //var_dump($query->result());
		if($query -> num_rows() == 1)
	   {	
	   		return $query->result();
	     
	   }else{
			return False;
	   }
	   
	 }

	function get_countries() {
		$query = $this->db->get('countries');
		return $query->result();
	}

	function get_Country_by_ID($country_id) {
		$this->db->select('*');
    	$this->db->from('countries');
    	$this->db->where('idcountries', $country_id); 
    	$query = $this -> db -> get();
    	$country = $query->result();
    	return $country;
	}
}



?>