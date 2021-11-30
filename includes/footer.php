<div id="footer"><!--------footer start--->

    <div class="container"><!--------container start--->
        <div class="row"><!--------row start--->
        
            <div class="col-sm-6 col-md-2"><!--------col-sm-6 col-md-3 start--->


            <h4>Pages</h4>


                        <ul><!--------ul start--->
                            <!----<li><a href="cart.php">Shopping Cart</a></li>--->
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="offers.php">Offers</a></li>
                            <li><a href="delivery_information.php">Delivery Info</a></li>
                           <!---- <li><a href="customer/my_account.php">My Account</a></li>--->
                        </ul><!--------ul end--->




                        <hr>

                        <h4>User Section</h4>

                        <ul><!----ul start---->

                                <li><a href="login.php">Login</a></li>
                                <li><a href="customer_register.php">Register</a></li>


                        </ul><!----ul end---->


                        <hr class="hidden-md hidden-lg hidden-sm">


            </div><!--------col-sm-6 col-md-3 end--->



            <div class="com-sm-6 col-md-2"><!----com-sm-6 col-md-3 start------->

                    <h4>Top Products Categories</h4>

                    <ul><!----ul start---->
                    <?php
                        $get_cats = "select * from category";
                        $run_cats = mysqli_query($con, $get_cats);

                        while($row_cats=mysqli_fetch_array($run_cats)){

                            $cat_id = $row_cats['Cat_ID'];
                            $cat_name = $row_cats['Cat_Name'];

                            echo "
                            
                                <li>
                                
                                <a href='shop.php?p_cat=$cat_id'>

                                $cat_name
                                
                                </a>


                                </li>
                            
                            ";


                        }
                    ?>
                    </ul><!----ul end---->

                    <hr class="hidden-md hidden-lg">



            </div><!----com-sm-6 col-md-3 end------->


            <div class="col-sm-6 col-md-2"><!----com-sm-6 col-md-3 start------->


                    <h4>Find Us:</h4>

                    <p><!----p start--->

                            <strong>Shopwise</strong>
                            <br/>Bandarapura
                            <br/>Passara Road
                            <br/>Badulla
                            <br/>shopwise12@gmail.com
                          <!---  <br/><strong>MrGhie</strong>-->

                    </p><!----p end--->


                    <a href="contact.php">Check Our Contact Page</a>

                    <hr class="hidden-md hidden-lg">

            </div><!----com-sm-6 col-md-3 end------->
            <div class="col-sm-6 col-md-2">
            <h4>Reach Us</h4>
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1VUBef-zntwhO4sBlQeEM16c5Tdq2-hR9" width="700" height="270"></iframe>

                </div></div>


                <div class="col-sm-6 col-md-2">

                <!----    <h4>Get the news</h4>
                    <p class="text-muted">
                    Dont miss our latest updates
                   
                    </p>

                    <form action="" method="post"><!---form start----->

                       <!----   <div class="input-group"><!---input-group start----->

                          <!----    <input type="text" class="form-control" name="email">

                                <span class="input-group-btn"><!---input-group-btn start----->

                               <!----       <input type="submit" value="subscribe" class="btn btn-default">----->

                                </span><!---input-group-btn end----->

                        </div><!---input-group end----->

                    </form><!---form end--->

                    <hr>

                    <h4>Keep In Touch</h4>

                    <p class="social">

                        <a href="https://www.facebook.com/"class="fa fa-facebook"></a>
                        <a href="https://mail.google.com/"class="fa fa-envelope"></a>
                        

                    </p>

                </div>

                

        </div><!--------row end--->
    </div><!--------container end--->

</div><!--------footer end--->




<!--Bottom Footer-->
<div class="bottom section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="copyright">
							<p>© <span>2020</span> <a href="#" class="transition">SHOPWISE</a> All rights reserved.</p>
                            
						</div>
					</div>

                    
				</div>
			</div>
		</div>
<!--Bottom Footer-->