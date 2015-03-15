<?php
	//Home Page Model
    class franquias_m extends CI_Model {

	    function __construct()
	    {
	        // Call the Model constructor
	        parent::__construct();
	    }

	    function getFranquias() {
	        $this -> db -> select('*');
			$this -> db -> from('Franquia');
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

	    function getSegmentos() {
	        $this -> db -> select('*');
			$this -> db -> from('Segmento');
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

	    function getFranquiaBySegment($id) {
	    	if(!$id){
	    		$id = 0;
	    	}
	    	$this -> db -> select('*');
			$this -> db -> from('Franquia');
			$this -> db -> where('Id',$id);
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
    
	}

?>