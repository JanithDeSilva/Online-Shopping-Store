
<?php
include("includes/db.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Items</title>
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
include("includes/header.php");
?>


<br>
<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
       <ol class="breadcrumb"><!----breadcrumb start--->       
            <li class="active"><!----active start---> 
                <i class="fa fa-dashboard"></i> Dashboard / View Offers
            </li>     <!----active end--->    
        </ol><!----breadcrumb end--->  
    </div><!----col-lg-12 end--->
</div><!----row end--->

<div class="row"><!----row start--->
    <div class="col-lg-12"><!----col-lg-12 start--->
        <div class="panel panel-default"><!----panel panel-default start--->
            <div class="panel-heading"><!----panel heading start--->
                <h3 class="panel-title"><!---panel-title start--->
                    <i class="fa fa-money fa-fw"></i>  View Offers
                </h3><!----panel-title end--->
            </div><!----panel heading end--->




            <div class="panel-body"><!----panel-body start--->
                <div class="table-responsive"><!----table-responsive start--->
                    <table class="table table-striped table-bordered table-hover"><!---table table-striped table-bordered table-hover start--->

                        <thead><!---thead start--->
                            <tr><!---tr start--->
                                <th>OfferID</th>
                                <th>Offer Name</th>
                                <th>percentage</th>

                                
                                <th>Offer Update</th>
                              
                                
								
                            </tr><!---tr end--->
                        </thead><!---thead end--->

                        <tbody><!---tbody start--->
                            <?php
                            
                            $i=0;

                            $get_Offer = "select * from offer";

                            $run_Offer = mysqli_query($con,$get_Offer);

                            while($row_Offer=mysqli_fetch_array($run_Offer)){
                                $offer_id = $row_Offer['OfferID'];

                                $offer_name = $row_Offer['O_Name'];

                                $percentage = $row_Offer['Percentage'];

                                
                               $i++;
                               ?>

                               <tr><!---tr start--->
                                    <td><?php echo $offer_id ; ?></td>
                                    <td><?php echo $offer_name; ?></td>
									<td><?php echo $percentage; ?></td>
									
                                    
                                   
                                    <td>   
                                         <a href="update_offer.php?edit_offer=<?php echo $offer_id; ?>">
                                        <i class="fa fa-pencil"></i> Update

                                        </a>                    
                                    </td>
									
									 
                               </tr><!---tr end--->


                            <?php } ?>




                            
                        </tbody><!---tbody end--->

                    </table><!----table table-striped table-bordered table-hover end--->
                </div><!----table-responsive end--->
            </div><!----panel-body end--->

        






</div>


            </div><!----panel panel-default end--->
    </div><!----col-lg-12 end--->
</div><!----row end--->





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!---<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
