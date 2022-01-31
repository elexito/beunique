<?php 
session_start();
include('header.php');
 ?>

 <section class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="breadcrumbs-wrap">
								<h1 class="breadcrumb-title">Thank You</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li>Your Enrollment was Successful.</li>
										<?php $answer = $_SESSION['answer']; ?>
										<li><h1 style="color: orange;">Your Matric/Access Code is: <?php echo $answer; ?></h1> </li>
										<li>Please Visit Our Office at 230, Beside Isikan Market, Ondo Road, Akure to begin your training.</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
				</div>
			</section>

 <?php 
include('footer.php');
 ?>