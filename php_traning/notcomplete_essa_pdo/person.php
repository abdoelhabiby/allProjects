<?php 

require_once("connect.php");

function u($input){return urlencode($input);}
function h($input){return htmlspecialchars($input);}

//-----------------------------------------------------------

$error = array();


function checkinput($input){
 $input = strip_tags($input);
 $input = htmlspecialchars($input);
 $input = trim($input);

  return $input;

}


function checkempty($inpu){
      
      global $error;

	if(strlen($inpu) == ''){
       $error[] = "SOORRY THE FAILED MUST NOT BE EMPTY";   
	}

}



function checkerror($error){
  
  global $error;

  if(!empty($error)){
      
      foreach ($error as $value) {
      	
      	return $value . "<br>";
      }

  }


}



//---------------------------------------------------------------




class person{

private $db;

public function __construct($conn){


$this->db = $conn; 


} 
//---------------------------------------------------------------------

//-----------------------------create--------------------------------

public function create($username,$email,$pass){

try{


$query = "INSERT INTO users (username,email,password) VALUES (?,?,?)";

$stmt = $this->db->prepare($query);

$stmt->bindParam("1",$username,PDO::PARAM_STR);
$stmt->bindParam("2",$email,PDO::PARAM_STR);
$stmt->bindParam("3",$pass,PDO::PARAM_STR);

$stmt->execute();

return $stmt;


}catch(PDOException $e){
	echo $e;
}


}



//----------------------------------------------------------------------------------
//----------------------------------------read----------------------------------------

public function read($id){

		$query = "SELECT * FROM users WHERE id = ?";
		$stmt = $this->db->prepare($query);
        $stmt->execute(array($id));
		
        
        return $stmt;

}
//----------------------------------------------------------------------------------
//-----------------------------------update-----------------------------------------


public function update($username,$email,$pass,$id){


		try{

		$query = "UPDATE users SET username = ? , email = ? , password = ? WHERE id = ?";

		$stmt = $this->db->prepare($query);

		$stmt->bindParam("1",$username,PDO::PARAM_STR);
		$stmt->bindParam("2",$email,PDO::PARAM_STR);
		$stmt->bindParam("3",$pass,PDO::PARAM_STR);
		$stmt->bindParam("4",$id,PDO::PARAM_INT);


		$stmt->execute();
         //echo $stmt->rowCount();
            return $stmt;

		//return true;


		}catch(PDOException $e){

		return false;

		}

}
//----------------------------------------------------------------------------------
//----------------------------------dlete--------------------------------------------

public function delete($id){


$query = "DELETE FROM users WHERE id = ?";

$stmt = $this->db->prepare($query);

$stmt->execute(array($id));

return  $stmt;


}

//----------------------------------------------------------------------------------

//----------------------------------viewdata---------------------------------------------


public function viewdata(){

		$query = "SELECT * FROM users WHERE 1";
		$stmt = $this->db->prepare($query);
        $stmt->execute();

if($stmt->rowCount() > 0){

		//$value = $stmt->fetch(PDO::FETCH_ASSOC);

return $stmt;

}


        

}
//




//----------------------------------------------------------------------------------
//----------------------------------------------------------------------------------
//----------------------------------------------------------------------------------



}





$person = new person($connect);








?>