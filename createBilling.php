<?php
include_once "./inc/datacon.php";
include_once './inc/header.php';
if(isset($_SESSION['chamber_name']) && isset($_SESSION['doc_name']) ){
    
include_once 'classes/admin_class.php';
$admin = new admin();
?>
<div class="container"><!-- Begin container -->

<div class="row">
                                            
    <form id="bill_create_form" class="form-horizontal" >
                   <input type="hidden" name="chamber_id" value="<?php echo $_SESSION['chamber_name']; ?>">
				      <input type="hidden" name="doc_id" value="<?php echo $_SESSION['doc_name']; ?>">
				      <input type="hidden" name="loged_in_user_id" value="<?php echo $_SESSION['user_name']; ?>">
                      <div class="alert alert-danger" role="alert" id="search_alert_1" hidden="true">
				        
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
					      Biswarup Ghoshal
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="theDate" class="col-sm-2 control-label">Date of Birth</label>
					    <div class="col-sm-2">
					      12-12-12
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
					    	<input type="button" id="add_bill" class="btn btn-default"  value="Add Bill" name="AddBill" >
					    </div>
					  </div>
					</form>
</div>
<?php 
if(isset($_GET['patient_id'])){
    $chamber_name = $_SESSION['chamber_name'];
    $doc_name= $_SESSION['doc_name'];
    $user_name= $_SESSION['user_name'];
    
    $_SESSION['page']='processData';
    
    $patient_id = $_GET['patient_id'];
    $_SESSION['patient_id'] = $patient_id;
    
    $result = mysql_query("select * from visit where patient_id = '$patient_id' and doc_id =  '$doc_name' and chamber_id = '$chamber_name' and visited = 'no'");
    
    
   
   
    
    
}
?>
</div>
<?php } else {
    echo "You are not authorize to perform this operation";
}
?>
<?php include_once './inc/footer.php';?>
</body>
</html>