<nav class="navbar navbar-inverse navbar-fixed-top" "><!-----navbar navbar-inverse navbar-fixed-top start--------->
    <div class="navbar-header"><!-----navbar-header start--------->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-exl-collapse"><!----navbar-toggle start--------->
            <span class="sr-only">Toggle Navigation</span>
            <span class="sr-only"></span>
            <span class="sr-only"></span>
            <span class="sr-only"></span>
        </button><!----navbar-toggle end--------->

<a href="index.php?dashboard" class="navbar-brand">Admin Area</a>

    </div><!-----navbar-header end--------->



    <ul class="nav navbar-right top-nav"><!---nav navbar-right top-nav start--------->
        <li class="dropdown"><!---dropdown start--------->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!---dropdown-toggle start--------->

                <i class="fa fa-user"></i> <?php 
		if(isset($_SESSION["user"])){
		echo $_SESSION["user"];
		}else{
			echo "user";
		} ?>                 <b class="caret"></b>

            </a><!---dropdown-toggle end--------->

                 <ul class="dropdown-menu"><!---dropdown-menu start--------->

                     <li><!---li start--------->
                         <a href="index.php?user_profile"><!--a href start--------->
                            <i class="fa fa-fw fa-user"></i> Profile
                         </a><!--a href end--------->                      
                    </li><!---li end--------->

                    <li><!---li start--------->
                         <a href="index.php?view_products"><!--a href start--------->
                            <i class="fa fa-fw fa-envelope"></i> Products
                            <span class="badge">7</span>
                         </a><!--a href end--------->                      
                    </li><!---li end--------->

                    <li><!---li start--------->
                         <a href="index.php?view_customers"><!--a href start--------->
                            <i class="fa fa-fw fa-users"></i> Customers
                            <span class="badge">11</span>
                         </a><!--a href end--------->                      
                    </li><!---li end--------->

                    <li><!---li start--------->
                         <a href="index.php?view_cats"><!--a href start--------->
                            <i class="fa fa-fw fa-gear"></i> Product Categories
                            <span class="badge">4</span>
                         </a><!--a href end--------->                      
                    </li><!---li end--------->

                        <li class="divider"></li>

                    <li><!---li start--------->
                         <a href="../logout.php"><!--a href start--------->
                            <i class="fa fa-fw power-off"></i> Log Out
                            
                         </a><!--a href end--------->                      
                    </li><!---li end--------->


                    

                 </ul><!---dropdown-menu end--------->

        </li><!---dropdown end--------->
    </ul><!---nav navbar-right top-nav end--------->

    </nav>
    <hr>
