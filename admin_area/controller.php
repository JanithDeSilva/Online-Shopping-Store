<?php
session_start();
include("db1.php");
include("model.php");

//save user details  to user table
if(isset($_POST["register"])){
    $ress=mysqli_query($con,"SELECT UserID from user");
    //Generate a ID to user start
        $max=0;
	    while($row=mysqli_fetch_array($ress)){ 
		    $ID=$row["UserID"]; 
            if ($max < $ID) {
            $max = $ID;
            }
        }
        $nextId=$max+1;
        //Generate a ID to user end
    
    //profile pic uploading start
    $name=$_FILES["C_image"]["name"];
    $img=$_FILES["C_image"]["tmp_name"];
    $path="ProfilePic/".$name;

    $uploaded=move_uploaded_file($img,$path);
    if($uploaded){
	echo("Successfully uploaded");
	}else{
	echo("uploading Failed");
    }
    //profile pic uploading end
        $UserID=$nextId;
        $FName=$_POST["C_Fname"];
        $LName=$_POST["C_Lname"];
        $HomeN0=$_POST["Home_No"];
        $Street=$_POST["Street"];
        $City=$_POST["City"];
        $Email=$_POST["Email"];
        $Contact=$_POST["Contact"];
        $DOB=$_POST["DOB"];
	    $UserName=$_POST["Username"];
	    $Password=$_POST["Password"];
        $UserType="Customer";

        $data=array($UserID,$FName,$LName,$HomeN0,$Street,$City,$Email,$Contact,$DOB,$path,$UserName,$Password,$UserType);    
        $ob->save($data,"user","login.php");
}

//saving data to item table
if(isset($_POST["itemSave"])){
    $res=mysqli_query($con,"SELECT ItemID from item");
    //Generate a ID to item start
    $max=0;
	while($row=mysqli_fetch_array($res)){ 
		$id=$row["ItemID"]; 
        if ($max < $id) {
            $max = $id;
        }
    }
        $nextId=$max+1;
    //Generate a ID to item end 

    $ItemID=$nextId;
	$ItemName=$_POST["item_name"];
	$Description=$_POST["description"];
    $Sub_Cat_Name=$_POST["Sub_Cat_Name"];

    $data=array($ItemID,$ItemName,$Description,$Sub_Cat_Name);
    $ob->save($data,"item","insert_product.php");
}


//saving data to stock table
if(isset($_POST["Stock"])){

       
    $res=mysqli_query($con,"SELECT ItemID from Stock");
    $max=0;
    while($row=mysqli_fetch_array($res)){ 
	    $id=$row["ItemID"]; 
        if ($max < $id) {
            $max = $id;
        }
    }
        $nextId=$max+1;
        
    $ItemNo=$nextId;
    $ItemID=$_POST["ItemID"];
	$Colour=$_POST["Colour"];
    $Size=$_POST["Size"];
    $Prize=$_POST["Prize"];
    $ItemQuantity=$_POST["Qty"];
    $Offer=$_POST["Offer"];
    
    $name=$_FILES["Image"]["name"];
	$img=$_FILES["Image"]["tmp_name"];
	$path="items/".$name;

	$uploaded=move_uploaded_file($img,$path);
	if($uploaded){
        echo("Successfully uploaded");
    }else{
            echo("uploading Failed");
        }
	
	$data=array($ItemNo,$ItemID,$Colour,$Size,$Prize,$ItemQuantity,$path,$Offer);
    $ob->save($data,"stock","addto_stock.php");
    
        
	
}
    
//saving data to category table
if(isset($_POST["categorySave"])){
	$res=mysqli_query($con,"SELECT Cat_ID from category");
    $max=0;
	
    while($row=mysqli_fetch_array($res)){ 
		
        $id=$row["Cat_ID"]; 
      
        if ($max < $id) {
            $max = $id;
        }

        $nextId=$max+1;
        
    $CategoryID=$nextId;
	$CategoryName=$_POST["Cat_Name"];
	
	$data=array($CategoryID,$CategoryName);
    $ob->save($data,"category","insert_category.php");
    
}
}
//saving data to sub_category table
if(isset($_POST["subCategorySave"])){
	$res=mysqli_query($con,"SELECT Sub_Cat_ID FROM sub_category");
    $max=0;
	
    while($row=mysqli_fetch_array($res)){ 
		
        $id=$row["Sub_Cat_ID"]; 
      
        if ($max < $id) {
            $max = $id;
        }

        $nextId=$max+1;
        
    $SubCategoryID=$nextId;
	$CategoryID=$_POST["Cat_Id"];
	$SubCategoryName=$_POST["Sub_Cat_Name"];

	$data=array($SubCategoryID,$CategoryID,$SubCategoryName);
    $ob->save($data,"sub_category","admin_area/insert_sub_category.php");
    
}
}

//saving data to offer table
if(isset($_POST["OfferSave"])){
	
	$res=mysqli_query($con,"SELECT OfferID from offer");
    $max=0;
	
    while($row=mysqli_fetch_array($res)){ 
		
        $id=$row["OfferID"]; 
      
        if ($max < $id) {
            $max = $id;
        }

        $nextId=$max+1;
        
    
	$Amount=$_POST["amount"];
	

	$data=array($OfferID,$OfferName,$Amount);
    $obj->save($data,"offer","admin_area/Add_Offers.php");
    
}

}



	
	
	



    
    
    



//call from view_products.php
//admin view manage products-> view  item details in a table
if(isset($_POST["viewNedit"])){
	$id=$_GET["id"];
	$res=$obj->searchValueBy("item","ItemID",$id); 
	include("admin_area/updateItem.php");//go to updateItem.php 

}

if(isset($_POST["CatviewNedit"])){
	$id=$_GET["id"];
	$res=$obj->searchValueBy("category","Cat_ID",$id); 
	include("admin_area/CategoryUpdate.php");//go to updateItem.php 

}






 
			
else if(isset($_POST["addtocart"])){
    $ress=mysqli_query($con,"SELECT CartNo  from cart_includes_item");
    $max=0;
	
    while($row=mysqli_fetch_array($ress)){ 
		
        $ID=$row["CartNo"]; 
      
        if ($max < $ID) {
            $max = $ID;
        }
    }
        $nextId=$max+1;
    


                    $CartNo=$nextId;
                   // $CartNo=$max+1;

                    $Itemname=$_POST["ItemName"]; 
                    $res1=mysqli_query($con,"SELECT * from item where ItemName='$Itemname'");
                    while($row=mysqli_fetch_array($res1)){ 
                    $ItemID=$row["ItemID"];  
                    
                   
		
		           
                   
                    $Quantity=$_POST["Quantity"];
                   // $NewPrice=$_POST["NewPrice"];

                   
                    if(isset($_SESSION["user"])){
                        $UserName=$_SESSION["user"];
                    
                    }if(isset($_SESSION["Price"])){
                        $NewPrice=$_SESSION["Price"];
                    
                    }
                   
                    
                    $data=array($CartNo,$UserName,$ItemID,$Quantity,$NewPrice);
                    $ob->save($data,"cart_includes_item","shop.php");
                }
            
            
            }
                   
                  
                    



//if(isset($_GET["delete"])){
	//$=$_GET["id"];
	//$res=$obj->DeleteData("item","ItemID",$id);
	//if(res){
		//header("location:admin_area/view_products.php");
	//}
//}

if(isset($_POST["send_feedback"])){

       
    $res=mysqli_query($con,"SELECT FNO from feedback");
    $max=0;
	
    while($row=mysqli_fetch_array($res)){ 
		
        $id=$row["FNO"]; 
      
        if ($max < $id) {
            $max = $id;
        }
    }
        $nextId=$max+1;
        
    $FNO=$nextId;
        
    $Feedback=$_POST["feedback"];
    
    if(isset($_SESSION["user"])){
        $UserName=$_SESSION["user"];
    
    }
    $Itemname=$_POST["ItemName"]; 
    $res1=mysqli_query($con,"SELECT * from item where ItemName='$Itemname'");
    while($row=mysqli_fetch_array($res1)){ 
    $ItemID=$row["ItemID"];  
    $Date= date('Y/m/d');

        $Time= date('H:i:s');

    $data=array($FNO,$UserName,$ItemID,$FeedBack,$Date,$Time);
                    $ob->save($data,"feedback","my_account.php?send_feedback.php");

    }
}

?>