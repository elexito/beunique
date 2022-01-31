<?php 
session_start();
if(isset($_SESSION['username'])){

?>
<?php
include('connect.php');
 ?>

<?php 
include('header.php');
 ?>


	<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="dashboard_container">
										<div class="dashboard_container_header">
											<div class="dashboard_fl_1">
												<h4 style="text-align: center;">LIST OF STUDENTS WHO HAVE MADE PAYMENT</h4>
													<a href="logout.php"><p style="color: red;">LOG OUT</p></a>
												<button type="button" onclick="window.print()" class="btn btn-warning">PRINT</button>
													
											</div>
										</div>
										<div class="dashboard_container_body">
											<div class="table-responsive">
												<table class="table">
													<thead class="thead-dark">
														<tr>
															<th scope="col">#</th>
      <th scope="col">Date of Payment</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
      <th scope="col">Session</th>
      <th scope="col">Course</th>
      <th scope="col">Matriculation Number</th>
														</tr>
													</thead>
													<tbody>
														<?php 
  	$count = 1;
  	$query = "SELECT * FROM students ORDER BY id DESC";
$result = mysqli_query($con,$query);
while($row = $result->fetch_assoc()) {
	?>
														<tr>
															<th scope="row"><?php echo $count; ?></th>
															<td><?php echo date("l jS \of F Y h:i:s A", strtotime($row["timestamp"])); ?></td>
															<td><?php echo $row["last_name"]; ?></td>
															<td><?php echo $row["first_name"]; ?></td>
															<td><?php echo $row["phone_number"]; ?></td>
															<td><?php echo $row["email"]; ?></td>
															<?php 
															$session = $row["session"]; 
															if($session == "01"){
																$answer = "Morning";
																}elseif ($session == "02") {
																	$answer = "Afternoon";
																}elseif ($session == "03") {
																	$answer = "Weekend";
																}
															 ?>
															
															<td><?php echo $answer; ?></td>
															<?php 
															$lesson = $row["lesson"]; 
															if($lesson == "45000"){
																$money = "Full Stack Web Development";
																$code = "WB";
																}elseif ($lesson == "25000") {
																	$money = "Graphic Design";
																	$code = "GRA";
																}elseif ($lesson == "40000") {
																	$money = "Digital Marketing";
																	$code = "DM";
																}
															 ?>
															<td><?php echo $money; ?></td>
															<?php 
															$id =  $row["id"]; 
															$matric = "BU/".$code."/".$session."/".$id;
															 ?>
															<td><?php echo $matric; ?></td>
														</tr>
														<?php 
    $count++;
 }
  	 ?>
														
													</tbody>
												</table>
											</div>
										</div>
										
									</div>
								</div>
							</div>



 <?php 
include('footer.php');
 ?>
 <?php
 }else{
	header("Location: login.php");
}
?>