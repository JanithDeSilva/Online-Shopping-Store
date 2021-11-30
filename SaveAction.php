<?php



include("db.php");






	class ItemAction extends db{
        function save($a,$table){
        $res=mysqli_query($this->connect(),"insert into $table values('".implode("','",$a)."')");
        if($res){
            header("location:login.php");
        }else{
            echo"Saving failed";
        }
            
            
            
        }
        
            
        }	
        
	


	
	

$ob=new ItemAction;



if(isset($_POST["itemSave"])){

$ItemID=$_POST["item_id"];
$ItemName=$_POST["item_name"];
$Description=$_POST["description"];
$Colour=$_POST["colour"];
$Size=$_POST["size"];
$Price=$_POST["price"];
$Image=$_FILES["item_img"];
$Type_ID=$_POST["type_id"];
$Offer_ID=$_POST["offer_id"];

foreach($Image as $key=>$value){
	echo $key."=".$value."<br>";
	
}

$name=$_FILES["item_img"]["name"];
$img=$_FILES["item_img"]["tmp_name"];
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
	$CategoryID=$_POST["Cat_Id"];
	$CategoryName=$_POST["Cat_Name"];
	
	$data=array($CategoryID,$CategoryName);
    $ob->save($data,"category");
    
}

if(isset($_POST["subCategorySave"])){
	$SubCategoryID=$_POST["Sub_Cat_Id"];
	$CategoryID=$_POST["Cat_Id"];
	$SubCategoryName=$_POST["Sub_Cat_Name"];

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
	$ID="6";
	$FName=$_POST["C_Fname"];
	$LName=$_POST["C_Lname"];
	$HomeN0=$_POST["Home_No"];
	$Street=$_POST["Street"];
	$City=$_POST["City"];
	$Email=$_POST["Email"];
	$Contact=$_POST["Contact"];
	$DOB=$_POST["DOB"];
	
	
$name=$_FILES["C_image"]["name"];
$img=$_FILES["C_image"]["tmp_name"];
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

if(isset($_POST["register"])){
	$Cus_ID="7";
	$UserName=$_POST["Username"];
	$Password=$_POST["Password"];
	$UserType="customer";

    $data=array($Cus_ID,$UserName,$Password,$UserType);
    $ob->save($data,"login");
}
?>