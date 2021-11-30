<?php



include("db.php");






	class ItemAction extends db{
        function save($a,$table){
        $res=mysqli_query($this->connect(),"insert into $table values('".implode("','",$a)."')");
        if($res){
            echo"Successfully Saved";
        }else{
            echo"Saving failed";
        }
            
            
            
        }
        
            
        }	
        
	


	
	

$ob=new ItemAction;



if(isset($_POST["itemSave"])){

$ItemID=$_POST["1"];
$ItemName=$_POST["2"];
$Description=$_POST["3"];
$Colour=$_POST["4"];
$Size=$_POST["5"];
$Price=$_POST["6"];
$Image=$_FILES["7"];
$Cat_ID=$_POST["8"];
$Sub_Cat_ID=$_POST["9"];
$Wear_ID=$_POST["10"];
$Offer_ID=$_POST["11"];

foreach($Image as $key=>$value){
	echo $key."=".$value."<br>";
	
}

$name=$_FILES["7"]["name"];
$img=$_FILES["7"]["tmp_name"];
$path="imgs/".$name;

$uploaded=move_uploaded_file($img,$path);
if($uploaded){
	echo("Successfully uploaded");
	
}else{
	echo("uploading Failed");
}


    
    $data=array($ItemID,$ItemName,$Description,$Colour,$Size,$Price,$path,$Cat_ID,$Sub_Cat_ID,$Wear_ID,$Offer_ID);
    $ob->save($data,"item");
    
        
    }
	
	
if(isset($_POST["categorySave"])){
	$CategoryID=$_POST["1"];
	$CategoryName=$_POST["2"];
	
	$data=array($CategoryID,$CategoryName);
    $ob->save($data,"category");
    
}

if(isset($_POST["subCategorySave"])){
	$SubCategoryID=$_POST["1"];
	$CategoryID=$_POST["2"];
	$SubCategoryName=$_POST["3"];

	$data=array($SubCategoryID,$CategoryID,$SubCategoryName);
    $ob->save($data,"sub_category");
    
}

if(isset($_POST["offerSave"])){
	$OfferID=$_POST["1"];
	$OfferName=$_POST["2"];
	$Amount=$_POST["3"];
	$OfferCat=$_POST["4"];

	$data=array($OfferID,$OfferName,$Amount,$OfferCat);
    $ob->save($data,"offer");
    
}

if(isset($_POST["offercategorySave"])){
	$OfferCategoryID=$_POST["1"];
	$OfferCategoryName=$_POST["2"];
	
	$data=array($OfferCategoryID,$OfferCategoryName);
    $ob->save($data,"offer_cat");
    
}

if(isset($_POST["SaveWearType"])){
	$wearID=$_POST["1"];
	$subCatID=$_POST["2"];
	$waerType=$_POST["3"];

	$data=array($wearID,$subCatID,$waerType);
    $ob->save($data,"wear_type");
    
}

if(isset($_POST["saveStock"])){
	$ItemID=$_POST["1"];
	$Qty=$_POST["2"];
	

	$data=array($ItemID,$Qty);
    $ob->save($data,"stock");
    
}
if(isset($_POST["register"])){
	$ID=$_POST["C_ID"];
	$FName=$_POST["C_Fname"];
	$LName=$_POST["C_Lname"];
	$HomeN0=$_POST["C_HNo"];
	$Street=$_POST["C_Street"];
	$City=$_POST["C_City"];
	$Email=$_POST["c_email"];
	$Contact=$_POST["c_contact"];
	$DOB=$_POST["c_DOB"];
	//$Image=$_FILES["c_image"];
	
$name=$_FILES["c_image"]["name"];
$img=$_FILES["c_image"]["tmp_name"];
$path="ProfilePic/".$name;

$uploaded=move_uploaded_file($img,$path);
if($uploaded){
	echo("Successfully uploaded");
	
}else{
	echo("uploading Failed");
}


    
    $data=array($ID,$FName,$LName,$HomeN0,$Street,$City,$Email,$Contact,$DOB,$path);
    $ob->save($data,"customer");
}

?>