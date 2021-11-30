


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOPWISEadmin area</title>
    <!--- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    --->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
 


</head>

<style>


/*panel color custom*/


.huge{
    font-size: 40px;
    line-height: normal;
    padding: 3px;
    margin: 5px;
  
    
    

}
/*1*/
.panel-blue>.panel-heading{
    color: #ffffff;
    background-color:#1E90FF;
    padding: 8px;
    margin: 8px;
   

}
.panel-blue>a{
    color: #1E90FF;
    

}
/*2*/
.panel-green>.panel-heading{
    color: #ffffff;
    background-color: #5cd85c;
    padding: 7px;
    margin: 7px;
   

}
.panel-green>a{
    color: #5cd85c;
    

}
/*3*/
.panel-yellow>.panel-heading{
    color: #ffffff;
    background-color: #f0ad4e;
    padding: 7px;
    margin: 7px;

}
.panel-yellow>a{
    color:  #f0ad4e;

}
/*4*/
.panel-red>.panel-heading{
    color: #ffffff;
    background-color: #d9534f;
    padding: 7px;
    margin: 7px;
}
.panel-red>a{
    color: #d9534f;

}
/*5*/
.panel-5>.panel-heading{
    color: #ffffff;
    background-color: #072238;
    padding: 7px;
    margin: 7px;
}
.panel-5>a{
    color: #072238;

}
/*6*/
.panel-6>.panel-heading{
    color: #ffffff;
    background-color:#263E51;
    padding: 7px;
    margin: 7px;
}
.panel-6>a{
    color: #263E51;

}

/*7*/
.panel-7>.panel-heading{
    color: #ffffff;
    background-color: #072F5F;
    padding: 7px;
    margin: 7px;
}
.panel-7>a{
    color: #072F5F;

}

/*8*/
.panel-8>.panel-heading{
    color: #ffffff;
    background-color: #1261A0;
    padding: 7px;
    margin: 7px;
}
.panel-8>a{
    color: #1261A0;

}


/*9*/
.panel-9>.panel-heading{
    color: #ffffff;
    background-color: #1261A0;
    padding: 7px;
    margin: 7px;
}
.panel-9>a{
    color: #1261A0;

}




</style>
<body>






<!---<div id="wrapper"><!----wrapper start---->

<?php 
include("includes/header.php");
?>



       <!--- <div id="page-wrapper"><!---page-wrapper start---->
        <!---    <div class="container-fluid"><!---container-fluid start---->



                <!---<div class="row"><!---row start---->
                
                    <div class="col-md-12 "><!--col-lg-12 start---->
                        <h1 class="page-header" style="color:black;">Dashboard</h1>
                      <!---  <ol class="breadcrumb"><!--breadcrumb start---->
                      <!---      <li class="active"><!--active start---->
<!---
                                <i class="fa fa-dashboard"></i> Dashboard

                            </li><!--active end---->
                    <!---    </ol><!--breadcrumb end--->
                    </div><!--col-lg-12 end---->
                
               <!--- </div><!---row end---->



        <?php
        
        
            if(isset($_GET['insert_product'])){
                include("insert_product.php");
            }if(isset($_GET['view_products'])){
                include("view_products.php");
            }if(isset($_GET['delete_product'])){
                include("delete_product.php");
            }if(isset($_GET['edit_product'])){
                include("edit_product.php");
            }if(isset($_GET['view_stock'])){
                include("view_stock.php");
            }
            
        ?>



               <div class="row"><!---row start---->
               <!---------------------------------111111--------------------------------------------------------------------------->
                    <div class="col-lg-3 col-md-6""><!--col-lg-3 col-md-6 start---->
                        <div class="panel panel-blue" ><!--panel panel-primary start---->

                            <div class="panel-heading"><!--panel-header start---->
                                <div class="row"><!---row start---->
                                    <div class="col-xs-3"><!---col-xs-3 start---->

                                        <i class="fa fa-tasks fa-5x"></i>
                                        

                                    </div><!---col-xs-3 end---->

                                        <div class="col-xs-9 text-right" ><!---col-xs-9 text-right start---->
                                            <div class="huge" ><!---huge start---->
                                                <div>  Products </div>
                                            </div><!---huge end---->
                                        </div><!---col-xs-9 text-right end---->

                                </div><!---row end---->
                            


                            
                                <div class="panel-footer"><!---panel-footer start---->
                                    <span class="pull-left"><a href="insert_product.php"   style="color:#1E90FF; margin-right:30px; margin-left:40px; font-weight:bold;"> Insert   </a></span> 
                                    <span class="pull-left"><a href="view_products.php"   style="color:#5cd85c; margin-right:30px; font-weight:bold; "> View | Update | Delete   </a></span> 
                                     <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                                        
                                    
                                    <div class="clearfix"></div>
                                    

                                </div><!---panel-footer end---->
                            
                                </div><!--panel-header end--->
                            

                        </div><!--panel panel-primary end---->
                    </div><!--col-lg-3 col-md-6 end---->


                   <!----------------------------------222--------------------------------------------------------------------------->
                   <div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 start---->
                        <div class="panel panel-green"><!--panel panel-primary start---->

                            <div class="panel-heading"><!--panel-header start---->
                                <div class="row"><!---row start---->
                                    <div class="col-xs-3"><!---col-xs-3 start---->

                                        <i class="fa fa-save fa-5x"></i>

                                    </div><!---col-xs-3 end---->

                                        <div class="col-xs-9 text-right"><!---col-xs-9 text-right start---->
                                            <div class="huge"><!---huge start---->
                                                <div> Stock  </div>
                                            </div><!---huge end---->
                                        </div><!---col-xs-9 text-right end---->

                                </div><!---row end---->
                            


                            
                                <div class="panel-footer"><!---panel-footer start---->
                         <!--       <span class="pull-left"><a href="addto_stock.php"   style="color:#1E90FF; margin-right:30px; margin-left:40px; font-weight:bold;"> Insert   </a></span> -->
                                    <span class="pull-left"><a href="view_stock.php"   style="color:#5cd85c; margin-right:30px; font-weight:bold; "> View | Update | Delete   </a></span> 
                                      <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                                        

                                    <div class="clearfix"></div>

                                </div><!---panel-footer end---->
                                </div><!--panel-header end--->
                           
                            

                        </div><!--panel panel-primary end---->
                    </div><!--col-lg-3 col-md-6 end---->


                     <!-------------------------------------3---------------------------------------------------------------------------->
                     <div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 start---->
                        <div class="panel panel-yellow"><!--panel panel-primary start---->

                            <div class="panel-heading"><!--panel-header start---->
                                <div class="row"><!---row start---->
                                    <div class="col-xs-3"><!---col-xs-3 start---->

                                        <i class="fa fa-tags fa-5x"></i>

                                    </div><!---col-xs-3 end---->

                                        <div class="col-xs-9 text-right"><!---col-xs-9 text-right start---->
                                            <div class="huge"><!---huge start---->
                                                <div>   Status </div>
                                            </div><!---huge end---->
                                        </div><!---col-xs-9 text-right end---->

                                </div><!---row end---->
                            


                            
                                <div class="panel-footer"><!---panel-footer start---->
                                <!--<span class="pull-left"><a href="insert_product.php"   style="color:#1E90FF; margin-right:30px; margin-left:40px; font-weight:bold;">   </a></span> -->
                                    <span class="pull-left"><a href="view_status.php"   style="color:#5cd85c; margin-right:30px; font-weight:bold; "> Update   </a></span> 
                                      <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                                        

                                    <div class="clearfix"></div>

                                </div><!---panel-footer end---->
                            
                                </div><!--panel-header end--->
                            

                        </div><!--panel panel-primary end---->
                    </div><!--col-lg-3 col-md-6 end---->

                    <!-------------------------------------4---------------------------------------------------------------------------->
                    <div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 start---->
                        <div class="panel panel-red"><!--panel panel-primary start---->

                            <div class="panel-heading"><!--panel-header start---->
                                <div class="row"><!---row start---->
                                    <div class="col-xs-3"><!---col-xs-3 start---->

                                        <i class="fa fa-shopping-cart fa-5x"></i>

                                    </div><!---col-xs-3 end---->

                                        <div class="col-xs-9 text-right"><!---col-xs-9 text-right start---->
                                            <div class="huge"><!---huge start---->
                                                <div> Users  </div>
                                            </div><!---huge end---->
                                        </div><!---col-xs-9 text-right end---->

                               
                                        </div><!---row end---->


                            
                                <div class="panel-footer"><!---panel-footer start---->
                                <span class="pull-left"><a href="view_user.php"   style="color:#1E90FF; margin-right:30px; margin-left:40px; font-weight:bold;"> View User  </a></span> 
                                    <span class="pull-left"><a href="view_user.php"   style="color:#5cd85c; margin-right:30px; font-weight:bold; "> Bann User   </a></span> 
                                      <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                                        

                                    <div class="clearfix"></div>

                                </div><!---panel-footer end---->
                            
                                </div><!--panel-header end---> 
                            

                        </div><!--panel panel-primary end---->
                    </div><!--col-lg-3 col-md-6 end---->



                     <!---------------------------------55--------------------------------------------------------------------------->
                     <div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 start---->
                        <div class="panel panel-5"><!--panel panel-primary start---->

                            <div class="panel-heading"><!--panel-header start---->
                                <div class="row"><!---row start---->
                                    <div class="col-xs-3"><!---col-xs-3 start---->

                                        <i class="fa fa-trash fa-5x"></i>

                                    </div><!---col-xs-3 end---->

                                        <div class="col-xs-9 text-right"><!---col-xs-9 text-right start---->
                                            <div class="huge"><!---huge start---->
                                                <div>   Messages </div>
                                            </div><!---huge end---->
                                        </div><!---col-xs-9 text-right end---->

                                </div><!---row end---->
                            


                            
                                <div class="panel-footer"><!---panel-footer start---->
                                <span class="pull-left"><a href="view_message.php"   style="color:#1E90FF; margin-right:30px; margin-left:40px; font-weight:bold;"> View  </a></span> 
                            
                                     <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                                        
                                    
                                    <div class="clearfix"></div>
                                    

                                </div><!---panel-footer end---->
                            
                                </div><!--panel-header end--->
                            

                        </div><!--panel panel-primary end---->
                    </div><!--col-lg-3 col-md-6 end---->


                   <!----------------------------------66--------------------------------------------------------------------------->
                   <div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 start---->
                        <div class="panel panel-6"><!--panel panel-primary start---->

                            <div class="panel-heading"><!--panel-header start---->
                                <div class="row"><!---row start---->
                                    <div class="col-xs-3"><!---col-xs-3 start---->

                                        <i class="fa fa-tasks fa-5x"></i>

                                    </div><!---col-xs-3 end---->

                                        <div class="col-xs-9 text-right"><!---col-xs-9 text-right start---->
                                            <div class="huge"><!---huge start---->
                                                <div> Delivery </div>
                                            </div><!---huge end---->
                                        </div><!---col-xs-9 text-right end---->

                                </div><!---row end---->
                            


                            
                                <div class="panel-footer"><!---panel-footer start---->
                                <span class="pull-left"><a href="view_order.php"   style="color:#1E90FF; margin-right:30px; margin-left:40px; font-weight:bold;"> Insert </a></span> 
                                    <span class="pull-left"><a href="view_delivery.php"   style="color:#5cd85c; margin-right:30px; font-weight:bold; "> View | Update | Delete   </a></span> 
                                     <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                                        

                                    <div class="clearfix"></div>

                                </div><!---panel-footer end---->
                                </div><!--panel-header end--->
                           
                            

                        </div><!--panel panel-primary end---->
                    </div><!--col-lg-3 col-md-6 end---->


                     <!-------------------------------------77---------------------------------------------------------------------------->
                     <div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 start---->
                        <div class="panel panel-7"><!--panel panel-primary start---->

                            <div class="panel-heading"><!--panel-header start---->
                                <div class="row"><!---row start---->
                                    <div class="col-xs-3"><!---col-xs-3 start---->

                                        <i class="fa fa-tags fa-5x"></i>

                                    </div><!---col-xs-3 end---->

                                        <div class="col-xs-9 text-right"><!---col-xs-9 text-right start---->
                                            <div class="huge"><!---huge start---->
                                                <div> Sales </div>
                                            </div><!---huge end---->
                                        </div><!---col-xs-9 text-right end---->

                                </div><!---row end---->
                            


                            
                                <div class="panel-footer"><!---panel-footer start---->
                                <span class="pull-left"><a href="sales_report.php"   style="color:#1E90FF; margin-right:30px; margin-left:40px; font-weight:bold;"> View </a></span> 
                                 <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                                        

                                    <div class="clearfix"></div>

                                </div><!---panel-footer end---->
                            
                                </div><!--panel-header end--->
                            

                        </div><!--panel panel-primary end---->
                    </div><!--col-lg-3 col-md-6 end---->

                    <!-------------------------------------88--------------------------------------------------------------------------->
                    <div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 start---->
                        <div class="panel panel-8"><!--panel panel-primary start---->

                            <div class="panel-heading"><!--panel-header start---->
                                <div class="row"><!---row start---->
                                    <div class="col-xs-3"><!---col-xs-3 start---->

                                        <i class="fa fa-shopping-cart fa-5x"></i>

                                    </div><!---col-xs-3 end---->

                                        <div class="col-xs-9 text-right"><!---col-xs-9 text-right start---->
                                            <div class="huge"><!---huge start---->
                                                <div> Offer </div>
                                            </div><!---huge end---->
                                        </div><!---col-xs-9 text-right end---->

                               
                                        </div><!---row end---->


                            
                                <div class="panel-footer"><!---panel-footer start---->
                                   <span class="pull-left"><a href="insert_offer.php"   style="color:#1E90FF; margin-right:30px; margin-left:40px; font-weight:bold;"> Insert </a></span> 
                                    <span class="pull-left"><a href="view_offer.php"   style="color:#5cd85c; margin-right:30px; font-weight:bold; "> View | Update    </a></span> 
                                  <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                                        

                                    <div class="clearfix"></div>

                                </div><!---panel-footer end---->
                            
                                </div><!--panel-header end---> 
                            

                        </div><!--panel panel-primary end---->
                    </div><!--col-lg-3 col-md-6 end---->

                    <!-------------------------------------77---------------------------------------------------------------------------->
                    <div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 start---->
                        <div class="panel panel-7"><!--panel panel-primary start---->

                            <div class="panel-heading"><!--panel-header start---->
                                <div class="row"><!---row start---->
                                    <div class="col-xs-3"><!---col-xs-3 start---->

                                        <i class="fa fa-tags fa-5x"></i>

                                    </div><!---col-xs-3 end---->

                                        <div class="col-xs-9 text-right"><!---col-xs-9 text-right start---->
                                            <div class="huge"><!---huge start---->
                                                <div> Top Customer </div>
                                            </div><!---huge end---->
                                        </div><!---col-xs-9 text-right end---->

                                </div><!---row end---->
                            


                            
                                <div class="panel-footer"><!---panel-footer start---->
                                <span class="pull-left"><a href="top_customer.php"   style="color:#1E90FF; margin-right:30px; margin-left:40px; font-weight:bold;"> View </a></span> 
                                 <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                                        

                                    <div class="clearfix"></div>

                                </div><!---panel-footer end---->
                            
                                </div><!--panel-header end--->
                            

                        </div><!--panel panel-primary end---->
                    </div><!--col-lg-3 col-md-6 end---->

                      <!-------------------------------------99---------------------------------------------------------------------------->

<div class="col-lg-3 col-md-6"><!--col-lg-3 col-md-6 start---->
                        <div class="panel panel-7"><!--panel panel-primary start---->

                            <div class="panel-heading"><!--panel-header start---->
                                <div class="row"><!---row start---->
                                    <div class="col-xs-3"><!---col-xs-3 start---->

                                        <i class="fa fa-tags fa-5x"></i>

                                    </div><!---col-xs-3 end---->

                                        <div class="col-xs-9 text-right"><!---col-xs-9 text-right start---->
                                            <div class="huge"><!---huge start---->
                                                <div> Feedback </div>
                                            </div><!---huge end---->
                                        </div><!---col-xs-9 text-right end---->

                                </div><!---row end---->
                            


                            
                                <div class="panel-footer"><!---panel-footer start---->
                                <span class="pull-left"><a href="view_feedback.php"   style="color:#1E90FF; margin-right:30px; margin-left:40px; font-weight:bold;"> View </a></span> 
                                 <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                                        

                                    <div class="clearfix"></div>

                                </div><!---panel-footer end---->
                            
                                </div><!--panel-header end--->
                            

                        </div><!--panel panel-primary end---->
                    </div><!--col-lg-3 col-md-6 end---->





                   

                    



               </div><!---row end---->


        <!---    </div><!---container-fluid end---->
    <!---    </div><!---page-wrapper end---->
<!---</div><!----wrapper end---->




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!---<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>