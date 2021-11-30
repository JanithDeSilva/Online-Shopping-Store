<?php
include("db.php");
session_start();

?>





    <div class="collapse navbar-collapse navbar-exl-collapse"><!---collapse navbar-collapse navbar-exl-collapse start--------->

        <ul class="nav navbar-nav side-nav"><!---nav navbar-nav side-nav start--------->

            <li><!--li start--------->
                             <a href="index.php?dashboard"><!--a href start--------->
                                <i class="fa fa-fw fa-dashboard"></i> Dashboard                            
                            </a><!--a href end--------->                           
            </li><!--li end--------->

            <li><!--li start--------->
                            <a href="#" data-toggle="collapse" data-target="#products"><!--a href start--------->
                            <i class="fa fa-fw fa-tag"></i> Products 
                            <i class="fa fa-fw fa-caret-down"></i>                            
                        </a><!--a href end--------->            
                        
                        <ul id="products" class="collapse"><!--collapse start--------->
                            <li><!--li start--------->
                                <a href="insert_product.php?insert_product"> Manage Product</a>
                            </li><!--li end--------->
                            <li><!--li start--------->
                                <a href="index.php?view_products"> View Products</a>
                            
                            </li><!--li end--------->
                           
                            <li><!--li start--------->
                                <a href="insert_category.php?insert_cat"> Manage Categories</a>
                                </li><!--li end--------->
                            <li><!--li start--------->
                                <a href="index.php?view_cats"> View Categories</a>
                            </li><!--li end--------->
                            <li><!--li start--------->
                                <a href="insert_sub_category.php?insert_s_cats"> Manage Sub Categories</a>
                            </li><!--li end--------->
                            <li><!--li start--------->
                                <a href="index.php?view_s_cats"> View Sub Categories</a>
                            </li><!--li end--------->
                            <li><!--li start--------->
                                <a href="manage_p_types.php?view_s_cats"> Manage Product Types</a>
                            </li><!--li end--------->
                            <li><!--li start--------->
                                <a href="index.php?view_s_cats"> View Product Types</a>
                            </li><!--li end--------->

                        </ul><!--collapse ned--------->

            </li><!--li end--------->

            <li><!--li start--------->
                            <a href="#" data-toggle="collapse" data-target="#users"><!--a href start--------->
                            <i class="fa fa-fw fa-users"></i>  Manage Stock
                            <i class="fa fa-fw fa-caret-down"></i>                            
                        </a><!--a href end--------->            
                        
                        <ul id="users" class="collapse"><!--collapse start--------->
                            
                            <li><!--li start--------->
                                <a href="addto_stock.php?view_users"> Add to Stock</a>
                            </li><!--li end--------->

                            <li><!--li start--------->
                                <a href="index.php?ban_user"> Update Stock</a>
                            </li><!--li end--------->

                            <li><!--li start--------->
                                <a href="index.php?ban_user"> Delete from Stock</a>
                            </li><!--li end--------->

                        </ul><!--collapse ned--------->

            </li><!--li end--------->

           <!-- <li><!--li start--------->
                         <!--   <a href="#" data-toggle="collapse" data-target="#p_cat"><!--a href start--------->
                       <!--     <i class="fa fa-fw fa-edit"></i> Products Categories
                      <!--      <i class="fa fa-fw fa-caret-down"></i>                            
                        </a><!--a href end--------->            
                        
                   <!--     <ul id="p_cat" class="collapse"><!--collapse start--------->
                  <!--          <li><!--li start--------->
                <!--                <a href="index.php?insert_p_cat"> Insert Product Categories</a>
                                </li><!--li end--------->
               <!--             <li><!--li start--------->
               <!--                 <a href="index.php?view_p_cats"> View Products Categories</a>
                            </li><!--li end--------->
               <!--         </ul><!--collapse ned--------->

         <!--   </li><!--li end--------->

         <!--   <li><!--li start--------->
                  <!--          <a href="#" data-toggle="collapse" data-target="#cat"><!--a href start--------->
                <!--            <i class="fa fa-fw fa-book"></i>  Categories
                            <i class="fa fa-fw fa-caret-down"></i>                            
                        </a><!--a href end--------->            
                        
                    <!--    <ul id="cat" class="collapse"><!--collapse start--------->
                        <!--    <li><!--li start--------->
                            <!--    <a href="index.php?insert_cat"> Insert Categories</a>
                                </li><!--li end--------->
                            <!--<li><!--li start--------->
                                <!--<a href="index.php?view_cats"> View Categories</a>
                            </li><!--li end--------->
                        <!--</ul><!--collapse ned--------->

           <!-- </li><!--li end--------->

           <!-- <li><!--li start--------->
           <!--                 <a href="#" data-toggle="collapse" data-target="#slides"><!--a href start--------->
           <!--                 <i class="fa fa-fw fa-gear"></i>  Slides
                            <i class="fa fa-fw fa-caret-down"></i>                            
                        </a><!--a href end--------->            
                        
            <!--            <ul id="slides" class="collapse"><!--collapse start--------->
             <!--               <li><!--li start--------->
              <!--                  <a href="index.php?insert_slide"> Insert Slide</a>
                                </li><!--li end--------->
              <!--              <li><!--li start--------->
               <!--                 <a href="index.php?view_slide"> View Slides</a>
                            </li><!--li end--------->
              <!--          </ul><!--collapse ned--------->

          <!--  </li><!--li end--------->

            <li><!--li start--------->
                            <a href="#" data-toggle="collapse" data-target="#status"><!--a href start--------->
                            <i class="fa fa-fw fa-people-carry"></i> Status
                            <i class="fa fa-fw fa-caret-down"></i>                            
                        </a><!--a href end--------->            
                        
                        <ul id="status" class="collapse"><!--collapse start--------->
                            <li><!--li start--------->
                                <a href="index.php?insert_status"> Insert Status</a>
                                </li><!--li end--------->
                            <li><!--li start--------->
                                <a href="index.php?view_status"> View Status</a>
                            </li><!--li end--------->
                        </ul><!--collapse ned--------->

            </li><!--li end--------->


        <li><!--li start--------->
            <a href="index.php?view_customers"><!--href start--------->
                <i class="fa fa-fw fa-users"></i> View Customers
            </a><!--href end--------->
        </li><!--li end--------->

        <li><!--li start--------->
            <a href="index.php?view_orders"><!--href start--------->
                <i class="fa fa-fw fa-book"></i> View Orders
            </a><!--href end--------->
        </li><!--li end--------->

        <li><!--li start--------->
            <a href="index.php?view_payments"><!--href start--------->
                <i class="fa fa-fw fa-money"></i> View Payments
            </a><!--href end--------->
        </li><!--li end--------->

        <li><!--li start--------->
                            <a href="#" data-toggle="collapse" data-target="#users"><!--a href start--------->
                            <i class="fa fa-fw fa-users"></i>  Users
                            <i class="fa fa-fw fa-caret-down"></i>                            
                        </a><!--a href end--------->            
                        
                        <ul id="users" class="collapse"><!--collapse start--------->
                            
                            <li><!--li start--------->
                                <a href="index.php?view_users"> View Users</a>
                            </li><!--li end--------->

                            <li><!--li start--------->
                                <a href="index.php?ban_user"> Ban User</a>
                            </li><!--li end--------->

                        </ul><!--collapse ned--------->

            </li><!--li end--------->
            <li><!--li start--------->
            <a href="view_feedback.php"><!--href start--------->
                <i class="fa fa-fw fa-envelope"></i> View Feedback
            </a><!--href end--------->
        </li><!--li end--------->

            <li><!--li start--------->
            <a href="message_admin.php"><!--href start--------->
                <i class="fa fa-fw fa-envelope"></i> Message
            </a><!--href end--------->
        </li><!--li end--------->

        <li><!--li start--------->
            <a href="top_customer.php"><!--href start--------->
                <i class="fa fa-fw fa-envelope"></i> Top Customer
            </a><!--href end--------->
        </li><!--li end--------->

            <li><!--li start--------->
            <a href="../logout.php"><!--href start--------->
                <i class="fa fa-fw fa-power-off"></i> Log Out
            </a><!--href end--------->
        </li><!--li end--------->

        

        </ul><!---nav navbar-nav side-nav end-------->
    </div><!---collapse navbar-collapse navbar-exl-collapse end--------->

</nav><!-----navbar navbar-inverse navbar-fixed-top end--------->