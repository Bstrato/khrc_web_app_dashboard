<?php
class Database
{
	protected $host;
	protected $user;
	protected $pass;
	protected $db;
	protected $tbname;
	public $query;
    

    function Database()    {
		    $this ->host = "localhost";
		    $this ->user = "root";
		    $this ->pass = "";
		    $this ->db = "test";
		    $this ->tbname ="khrc";
		    $this ->query =NULL;

   
    }

	public function connect()
	{
		$con=mysqli_connect($this->host,$this->user,$this->pass,$this->db);
		return $con;
	}
	


   public function query_fetch($query_str){



   	    $conn=$this->connect();

   	    if (!$conn){
         
         die(mysqli_error($conn));
          
		}else{

         $this->query=mysqli_query($conn,$query_str) ;
         return  $this->query;

		}
		

   }

}

			

