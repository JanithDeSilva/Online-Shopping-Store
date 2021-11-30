<h1 align="center"> Change Password </h1>

<form action="passwordAct.php" method="post"><!-----form start--->

    <div class="form-group"><!-----form-group start--->
    
        <label> Your Old Password: </label>
        <input type="text" name="old_pass" class="form-control" required>
    
    </div><!-----form-group end-->

    <div class="form-group"><!-----form-group start--->
    
    <label> Your New Password: </label>
    <input type="text" name="new_pass" class="form-control" required>

</div><!-----form-group end-->

<div class="form-group"><!-----form-group start--->
    
    <label> Confirm Your New Password: </label>
    <input type="text" name="new_pass_again" class="form-control" required>

</div><!-----form-group end-->



<div cl="text-center"><!-----text-center start--->

    <button type="submit" name="ChangePw" class="btn btn-primary"><!-----btn btn-primary start--->

    <i class="fa fa-user-md"></i> Update Now
    
    </button><!-----btn btn-primary end--->

</div><!-----text-center end--->


</form><!-----form end--->


