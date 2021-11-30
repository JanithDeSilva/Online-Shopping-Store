

<div class="panel panel-default sidebar-menu"><!---panel panel-default sidebar-menu starts------->


    <div class="panel-heading"><!---panel-heading starts------->

            <h3 class="panel-title">Product Categories</h3>


    </div><!---panel-heading end------->



    <div class="panel-body"><!---panel-body starts------->


        <ul class="nav nav-pills nav-stacked category-menu"><!---nav nav-pills nav-stacked category-menu starts------->

  <?php 
        $db = mysqli_connect("localhost","root","","b31_25376655_shopwise");
                  
          $get_cats = "select * from category";
          $run_cats = mysqli_query($db,$get_cats);
      
          while($row_cats=mysqli_fetch_array($run_cats)){
 
         $cat_id = $row_cats['Cat_ID'];
         $cat_name = $row_cats['Cat_Name'];
 
         echo "
         
         <li>
         
         <a href='shop.php?Cat_ID=$cat_id'> $cat_name </a>
 
         </li>
 
         ";
 
 
     }   
 ?>
               

                    


        </ul><!---nav nav-pills nav-stacked category-menu end------->

    </div><!---panel-body end------->

</div><!---panel panel-default sidebar-menu end------->







<div class="panel panel-default sidebar-menu"><!---panel panel-default sidebar-menu starts------->

<div class="panel-heading"><!---panel-heading starts------->
  <h3 class="panel-title">Sub-Categories</h3>

  </div><!---panel-heading end------->



   <div class="panel-body"><!---panel-body starts------->


      <ul class="nav nav-pills nav-stacked category-menu"><!---nav nav-pills nav-stacked category-menu starts------->


     <?php
     $db = mysqli_connect("localhost","root","","b31_25376655_shopwise");
            
     $get_sub_cats = "select * from sub_category";
     $run_sub_cats = mysqli_query($db,$get_sub_cats);
 
     while($row_sub_cats=mysqli_fetch_array($run_sub_cats)){
 
         $sub_cat_id = $row_sub_cats['Sub_Cat_ID'];
         $sub_cat_name = $row_sub_cats['Sub_Cat_Name'];
 
         echo "
         
         <li>
         
         <a href='shop.php?Sub_Cat_ID=$sub_cat_id'> $sub_cat_name </a>
 
         </li>
 
         ";
     }   
     ?>



  </ul><!---nav nav-pills nav-stacked category-menu end------->
</div><!---panel-body end------->

</div><!---panel panel-default sidebar-menu end------->




