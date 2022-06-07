<?php 
//require_once('session_login.php');
include('dbconnect.php');
include('header.php');

 ?>

 
<br />
<div class="container-fluid">
	<?php include('menubar.php');?>
	<div class="col-md-1"></div>
	<div class="col-md-8">
		<div class="panel panel-success">
			<div class="panel panel-success">
			 	<div class="panel-heading">
			 		<h3 class="panel-title">
			 			Case List
			 		</h3>
			 	</div>
<div id="trans-table">
<table id="myTable-trans" class="table table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
	    <tr>
	        <th>S/N</th>
	        
	         <th>Car Plate Number</th>
	        <th ><center>Crime Type</center></th>
	        <th><center>Time Reported</center></th>
	        <!-- <th><center> NCO</center></th>
	         <th><center>CID</center></th>
	        <th><center> Investigation Status</center></th> -->
	        <th><center>Action</center></th>
	    </tr>
	</thead>
    <tbody>
    	<?php
		// The serial number variable
		$sn=0;
		$query=mysqli_query($dbcon,"select * from caseDetail");
		while($row = mysqli_fetch_array($query)){
		$id = $row['caseid'];
		$sn++;
		?>
		<tr>
       
        <td><?php echo $sn;?></td>
       
        <!-- <td><?php echo $row['caseid'];?></td>  -->
		<td><?php echo $row['plate_no'];?></td>
		<td><?php echo $row['crime_type'];?></td>
		<td><?php echo $row['date_added']; ?></td> 
		
		<td class="empty" width="">
			<a data-placement="left" title="Click to view" id="view<?php echo $id;?>" href="casedetails.php<?php echo '?id='.$id; ?>" class="btn btn-success">Details<i class="icon-pencil icon-large"></i></a>
           
		
			
		</td>
		</tr>
	<?php } ?>    
    </tbody>
</table>
</div>
</div>

	</div>
	<div class="col-md-1"></div>
</div>


<?php include('scripts.php'); ?>


	

<script type="text/javascript">
	$(document).ready(function() {
		$('#myTable-trans').DataTable();
	});
</script>
</body>
</html>