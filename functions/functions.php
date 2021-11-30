<?php

$db = mysqli_connect("localhost","root","","b31_25376655_shopwise");
///bein getPro function//


///bein geRealIpUser function//

function getRealIpUser(){

    switch(true){
        case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
        case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
        case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];

        default : return $_SERVER['REMOTE_ADDR'];
        
    }

}



///start add cart function//
function add_cart(){

    global $db;

    if(isset($_GET['add_cart'])){

        $ip_add =  getRealIpUser();

        $p_id = $_GET['add_cart'];

        $product_qty = $_POST['product_qty'];

        $product_size = $_POST['product_size'];

        $product_color = $_POST['product_color'];

        $check_product = "select * from cart where ip_add='$ip_add' AND p_id='$p_id'";

        $run_check = mysqli_query($db,$check_product);

        if(mysqli_num_rows($run_check)>0){
           echo "<script>('This Product has already added in cart')</script>";
           echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
        }else{
            $query = "insert into cart (p_id,ip_add,qty,size,color) values ('$p_id','$ip_add',$product_qty','$product_size','$product_color')";

            $run_query = mysqli_query($db,$query);
        echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
        }


    }

}
///end add cart function//

///end geRealIpUser function//



function getPro(){
    global $db;

      
    $res1 = mysqli_query($db,"SELECT * FROM item order by 1 DESC LIMIT 6");
    

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




                <p class='button'>
                
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

///end getPro function//



    

?>