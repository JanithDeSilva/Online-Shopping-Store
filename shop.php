<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOPWISE index</title>
    <!--- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    --->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
 


</head>

<body>


        
        

       


<?php
session_start();		

?>

<?php
$active='Shop';
include("includes/header.php");



?>


<div id="content"><!----content start---->

    <div class="container"><!----container start---->

        <div class="col-md-12"><!----col-md-12 start---->

                <ul class="breadcrumb">
                    <li>

                        <a href="index.php">Home</a>

                    </li>
                    <li>
                        Shop                      
                    </li>
                </ul>

        </div><!----col-md-12 end---->

        <div class="col-md-3"><!---col-md-3 start--->
             <?php
                include("includes/sidebar.php");
              ?>

        </div><!---col-md-3 end--->



        


        <div class="col-md-9"><!---col-md-9 start--->

            <?php
            
            if(isset($_GET['Cat_ID'])){//////category name load start/////

                $cat_id = $_GET['Cat_ID'];
        
                $res1 = mysqli_query($db,"SELECT * FROM category where Cat_ID='$cat_id'");

                while($row=mysqli_fetch_array($res1)){
                $cat_name = $row['Cat_Name'];
            
                    echo "
                    <div class='box'>
                        <h1> $cat_name </h1> 
                      </div>     
                    ";
                }//////category name load end////////////
             }else if(isset($_GET['Sub_Cat_ID'])){//////sub category name load start/////
                $sub_cat_id = $_GET['Sub_Cat_ID'];
        
                $res1 = mysqli_query($db,"SELECT * FROM sub_category where Sub_Cat_ID='$sub_cat_id'");

                while($row=mysqli_fetch_array($res1)){
                $sub_cat_name = $row['Sub_Cat_Name'];
            
                    echo "
                    <div class='box'>
                        <h1> $sub_cat_name </h1> 
                      </div>     
                    ";
                }//////sub category name load end////////////////
             }else{///shop div box shows start////
                echo "
                <div class='box'>
                    <h1> Shop</h1> 
                  </div>    
                  
                  

                  
                ";//shop div box shows end////
                
             }
            
            ?>

            <div class="row"><!---row start--->

            <?php
            if(isset($_GET['Cat_ID'])){////main category products loading start/////////////////

                $cat_id = $_GET['Cat_ID'];  
                $res = mysqli_query($db,"SELECT * FROM category where Cat_ID='$cat_id'");

                while($row=mysqli_fetch_array($res)){
                $cat_name = $row['Cat_Name'];
                $per_page=6;
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                }else{
                     $page=1;
                }

                 $start_from = ($page-1) * $per_page;
                 $res1 = mysqli_query($db,"SELECT * FROM item WHERE Cat_Name='$cat_name' order by 1 DESC LIMIT $start_from,$per_page");
                 $count = mysqli_num_rows($res1);
                 if($count==0){
                     echo "
                     <div class='box'>
                     <h1> No Product Found </h1>
                    </div>
                ";     
                    }else{
                        while($row=mysqli_fetch_array($res1)){
                            $pro_id = $row['ItemID'];
                            $pro_title = $row['ItemName'];
                            $pro_img1 = $row['Product_Img1'];
                            $pro_price = $row['Price'];
                            $offer_id = $row['Offer_ID'];

                        $res2 = mysqli_query($db,"SELECT * FROM offer where OfferID='$offer_id'");
                        while($row=mysqli_fetch_array($res2)){
                                $Percentage = $row['Percentage']; 
                                $Amount=$pro_price * ($Percentage/100);
                                $NewPrice=$pro_price - $Amount;
                            if((int)$offer_id >0){

                            echo "
                            
                            <div class='col-md-4 col-sm-6 single'>
                            <div class='product'>
                                <a href='details.php?ItemID=$pro_id'>

                                <img class='img-responsive' src='admin_area/$pro_img1'>
                                </a>


                            
                            
                            
                                <span class='new-label' style='color:#fff;background-color:red;font-size:13px;font-weight:800; text-transform:uppercase;line-height:45px;height:45px;width:45px;border-radius:50%;position:absolute;right:10px;top:15px;'>$Percentage %</span>
                            
                                <div class='text'>
                                    <h3>
                                        <a href='details.php?ItemID=$pro_id'>
                                        $pro_title
                                    </h3>

                                    <h4 class='price'>

                                        Rs. $NewPrice /=
                                        <span style='color:red;font-size:17px;font-weight:400;text-decoration:line-through;margin-left:3px;display:inline-block'> Rs. $pro_price /= </span>
                                    
                                    </h4>




                                    <p class='buttons'>
                                    
                                    <a class='btn btn-default' href='details.php?ItemID=$pro_id'>

                                        View Details

                                    </a>
                                    
                                    
                                    </p>
                                </div>
                            </div>    
                            </div>
                            
                            
                            ";



                            
                        
                            }

                        }



                    }



                    }
            ?>

            </div><!---row end--->




        <center>
          <ul class="pagination"><!----pagination start--->
            
                <?php

                    $query  = "select * from item";
                   

                    $result = mysqli_query($con,$query);

                    $total_records = mysqli_num_rows($result);

                    $total_pages = ceil($total_records / $per_page);

                        echo "
                        
                            <li>
                                <a href='shop.php?Cat_ID=".$cat_id."page=1'>  ".'First Page'." </a>
                            </li>
                        
                        ";

                        for($i=1; $i<=$total_pages; $i++){

                            echo "
                        
                            <li>
                                <a href='shop.php?Cat_ID=".$cat_id."page=".$i."'>  ".$i." </a>
                            </li>
                        
                        ";

                        };

                        echo "
                        
                            <li>
                                <a href='shop.php?Cat_ID=".$cat_id."page=$total_pages'>  ".'Last Page'." </a>
                            </li>
                        
                        ";

                
                    }///main category products loading end/////////////////

                }else if(isset($_GET['Sub_Cat_ID'])){/////////////////////sub cat item load start/////////////////////////////////////////////////////////////////////////
                    $sub_cat_id = $_GET['Sub_Cat_ID'];  
                $res1 = mysqli_query($db,"SELECT * FROM sub_category where Sub_Cat_ID='$sub_cat_id'");

                while($row=mysqli_fetch_array($res1)){
                $sub_cat_name = $row['Sub_Cat_Name'];
                $per_page=6;
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                }else{
                     $page=1;
                }

                 $start_from = ($page-1) * $per_page;
                 $res2 = mysqli_query($db,"SELECT * FROM item WHERE Sub_Cat_Name='$sub_cat_name' order by 1 DESC LIMIT $start_from,$per_page");
                 $count = mysqli_num_rows($res2);
                 if($count==0){
                     echo "
                     <div class='box'>
                     <h1> No Product Found </h1>
                    </div>
                ";     
                    }else{
                        while($row=mysqli_fetch_array($res2)){
                            $pro_id = $row['ItemID'];
                            $pro_title = $row['ItemName'];
                            $pro_img1 = $row['Product_Img1'];
                            $pro_price = $row['Price'];
                            $offer_id = $row['Offer_ID'];

                        $res3 = mysqli_query($db,"SELECT * FROM offer where OfferID='$offer_id'");
                        while($row=mysqli_fetch_array($res3)){
                                $Percentage = $row['Percentage']; 
                                $Amount=$pro_price * ($Percentage/100);
                                $NewPrice=$pro_price - $Amount;
                            if((int)$offer_id >0){

                            echo "
                            
                            <div class='col-md-4 col-sm-6 single'>
                            <div class='product'>
                                <a href='details.php?ItemID=$pro_id'>

                                <img class='img-responsive' src='admin_area/$pro_img1'>
                                </a>


                            
                            
                            
                                <span class='new-label' style='color:#fff;background-color:red;font-size:13px;font-weight:800; text-transform:uppercase;line-height:45px;height:45px;width:45px;border-radius:50%;position:absolute;right:10px;top:15px;'>$Percentage %</span>
                            
                                <div class='text'>
                                    <h3>
                                        <a href='details.php?ItemID=$pro_id'>
                                        $pro_title
                                    </h3>

                                    <h4 class='price'>

                                        Rs. $NewPrice /=
                                        <span style='color:red;font-size:17px;font-weight:400;text-decoration:line-through;margin-left:3px;display:inline-block'> Rs. $pro_price /= </span>
                                    
                                    </h4>




                                    <p class='buttons'>
                                    
                                    <a class='btn btn-default' href='details.php?ItemID=$pro_id'>

                                        View Details

                                    </a>
                                    
                                    
                                    </p>
                                </div>
                            </div>    
                            </div>
                            
                            
                            ";



                            
                        
                            }

                        }



                    }



                    }
            ?>

            </div><!---row end--->




        <center>
          <ul class="pagination"><!----pagination start--->
            
                <?php

                    $query  = "select * from item";
                   

                    $result = mysqli_query($con,$query);

                    $total_records = mysqli_num_rows($result);

                    $total_pages = ceil($total_records / $per_page);

                        echo "
                        
                            <li>
                                <a href='shop.php?Sub_Cat_ID=".$sub_cat_id."page=1'>  ".'First Page'." </a>
                            </li>
                        
                        ";

                        for($i=1; $i<=$total_pages; $i++){

                            echo "
                        
                            <li>
                                <a href='shop.php?Sub_Cat_ID=".$sub_cat_id."page=".$i."'>  ".$i." </a>
                            </li>
                        
                        ";

                        };

                        echo "
                        
                            <li>
                                <a href='shop.php?Sub_Cat_ID=".$sub_cat_id."page=$total_pages'>  ".'Last Page'." </a>
                            </li>
                        
                        ";//////////////////////////////sub cat item load end////////////////////////////////////////////////////////////////////////////////////////
                }
            }else{///all products loading start/////////////////
                    $per_page=6;

                    if(isset($_GET['page'])){
                        $page = $_GET['page'];

                    }else{
                            $page=1;
                        }

                        $start_from = ($page-1) * $per_page;

                        

                        $res1 = mysqli_query($db,"SELECT * FROM item order by 1 DESC LIMIT $start_from,$per_page");
    
                        $count = mysqli_num_rows($res1);

                        if($count==0){

                        echo "
                
                     <div class='box'>
                    
                    <h1> No Product Found </h1>
                       
                    </div>
                ";     
                    }else{
                        while($row=mysqli_fetch_array($res1)){
                            $pro_id = $row['ItemID'];
                            $pro_title = $row['ItemName'];
                            $pro_img1 = $row['Product_Img1'];
                            $pro_price = $row['Price'];
                            $offer_id = $row['Offer_ID'];

                        $res2 = mysqli_query($db,"SELECT * FROM offer where OfferID='$offer_id'");
                        while($row=mysqli_fetch_array($res2)){
                                $Percentage = $row['Percentage']; 
                                $Amount=$pro_price * ($Percentage/100);
                                $NewPrice=$pro_price - $Amount;
                            if((int)$offer_id >0){

                            echo "
                            
                            <div class='col-md-4 col-sm-6 single'>
                            <div class='product'>
                                <a href='details.php?ItemID=$pro_id'>

                                <img class='img-responsive' src='admin_area/$pro_img1'>
                                </a>


                            
                            
                            
                                <span class='new-label' style='color:#fff;background-color:red;font-size:13px;font-weight:800; text-transform:uppercase;line-height:45px;height:45px;width:45px;border-radius:50%;position:absolute;right:10px;top:15px;'>$Percentage %</span>
                            
                                <div class='text'>
                                    <h3>
                                        <a href='details.php?ItemID=$pro_id'>
                                        $pro_title
                                    </h3>

                                    <h4 class='price'>

                                        Rs. $NewPrice /=
                                        <span style='color:red;font-size:17px;font-weight:400;text-decoration:line-through;margin-left:3px;display:inline-block'> Rs. $pro_price /= </span>
                                    
                                    </h4>




                                    <p class='buttons'>
                                    
                                    <a class='btn btn-default' href='details.php?ItemID=$pro_id'>

                                        View Details

                                    </a>
                                    
                                    
                                    </p>
                                </div>
                            </div>    
                            </div>
                            
                            
                            ";



                            
                        
                            }

                        }



                    }



                    }
            ?>

            </div><!---row end--->




        <center>
          <ul class="pagination"><!----pagination start--->
            
                <?php

                    $query  = "select * from item";
                   

                    $result = mysqli_query($con,$query);

                    $total_records = mysqli_num_rows($result);

                    $total_pages = ceil($total_records / $per_page);

                        echo "
                        
                            <li>
                                <a href='shop.php?page=1'>  ".'First Page'." </a>
                            </li>
                        
                        ";

                        for($i=1; $i<=$total_pages; $i++){

                            echo "
                        
                            <li>
                                <a href='shop.php?page=".$i."'>  ".$i." </a>
                            </li>
                        
                        ";

                        };

                        echo "
                        
                            <li>
                                <a href='shop.php?page=$total_pages'>  ".'Last Page'." </a>
                            </li>
                        
                        ";

                
                    }
                    ///all products loading end/////////////////
                
                    
                
                ?>

          </ul><!----pagination end--->
        </center>
<div class="row">
                    
        
        </div><!----row end--->


        </div><!---col-md-9 end--->

    </div><!----container end---->

</div><!----content end---->






<?php
include("includes/footer.php");



?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!---<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>