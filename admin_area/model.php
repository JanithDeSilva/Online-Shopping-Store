<?php



include("db.php");
class Model extends db{
	
	 function save($a,$table,$page){
        $res=mysqli_query($this->connect(),"insert into $table values('".implode("','",$a)."')");
        if($res){
			$session="success";
			$_SESSION["Success"]=$session;
            
			header("location:$page");
			//echo"Successfully Saved";
			/*echo '<script type="text/javascript">

			window.onload = function () {alert("Successfully Saved"); }
  
 			</script>'; */
        }else{
			echo"Saving failed";
			echo "insert into $table values('".implode("','",$a)."')";
        }
            
            
            
        }
        
	
	public function view($table){
		$res=mysqli_query($this->connect(),"select * from $table");
			$array=array();
			while($row=mysqli_fetch_assoc($res)){
				$array[]=$row;
			}
			return $array;
			
	}
	
	public function searchValueBy($table,$feild,$value){
		$res=mysqli_query($this->connect(),"select * from $table where $feild='$value'");
			$array=array();
			while($row=mysqli_fetch_assoc($res)){
				$array[]=$row;
			}
			return $array;
	
	}

	
	//$ob=new Model;

	//public function DeleteData($table,$feild,$id){
		//$res=mysqli_Query($this->connect(),"delete from $table where $feild='$id'");
		
	//}
	
	
            
        
        
}	
$ob=new Model;
?>