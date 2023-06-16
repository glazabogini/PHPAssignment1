<?php
  class Database{
    private $connection;

    function __construct(){
      $this->connect_db();
    }

    public function connect_db(){
      $this->connection = mysqli_connect('localhost', 'root', '', 'assignment1');
      if(mysqli_connect_error()){
        die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_error());
      }
    }

    public function create($fname, $lname, $age, $instrument, $bname){
      $sql = "INSERT INTO school_band (fname, lname, age, instrument, bname) VALUES ('$fname', '$lname', '$age', '$instrument', '$bname')";
      $res = mysqli_query($this->connection, $sql);
      if($res){
	 		    return true;
		  }
      else{
			    return false;
		  }
    }

    public function read($id=null){
		$sql = "SELECT * FROM school_band";
		if($id){
            $sql .= " WHERE id=$id";
        }
 		$res = mysqli_query($this->connection, $sql);
 		return $res;
	}
  }
  $database = new Database();
?>
