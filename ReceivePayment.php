<?php include_once "./inc/datacon.php";
include_once "./inc/header.php";
include_once "classes/admin_class.php";
?>
    
<body>
    
<!--BEGIN wrapper-->
<?php 
if(isset($_SESSION['user_type']) &&isset($_SESSION['chamber_name']) && isset($_SESSION['doc_name'])) {
/*if($_SESSION['user_type'] == 'DOCTOR'){
    header("location:visit_list.php");
} else if($_SESSION['user_type'] == 'RECEPTIONIST'){*/
?>

	<div class="container">
    <!--BEGIN header-->
    <?php include("banner.php"); ?>
    <!--END of header-->
    <form id="bill_create_form" class="form-horizontal" >
                   <input type="hidden" name="chamber_id" value="<?php echo $_SESSION['chamber_name']; ?>">
				      <input type="hidden" name="doc_id" value="<?php echo $_SESSION['doc_name']; ?>">
				      <input type="hidden" name="loged_in_user_id" value="<?php echo $_SESSION['user_name']; ?>">
                      <div class="alert alert-danger" role="alert" id="search_alert_2" hidden="true">
				        
				      </div>
					  <div class="form-group">
					    <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>
					    <div class="col-sm-2">
					      <select class="form-control" name="sex" id="sex">
                            <option value="0">--SELECT--</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                            <option value="Transgender">Transgender</option>
                        </select>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="patient_name" class="col-sm-2 control-label">Patient Name</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" id="patient_name" name="patient_name" placeholder="Enter Name">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="theDate" class="col-sm-2 control-label">Date of Birth</label>
					    <div class="col-sm-2">
					      <input type="date" class="form-control" name="theDate" id="theDate" placeholder="DOB">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="cell" class="col-sm-2 control-label">Phone number</label>
					    <div class="col-sm-6">
					      <input type="tel" class="form-control" name="cell" id="cell" placeholder="Mobile number">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					    	<input type="button" id="rec_pay" class="btn btn-default"  value="Receive Payment" name="rec_pay" >
					    </div>
					  </div>
					</form>
    
   <?php include "footer_pg.php"; ?>
    
	</div><!-- End container-->

<?php } /*}*/ else {
    /*  header("location:index_login.php"); */
    echo "<script>location.href='index_login.php'</script>";
}
include_once './inc/footer.php';
?>
</body>
</html>
<?php ob_flush() ?>