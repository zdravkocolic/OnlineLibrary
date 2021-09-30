<?php 
require_once ('templates/input.php');
require_once ('templates/operation.php'); 
?>
<head>
<link rel="stylesheet" href="<?= base_url();?>/css/dashboard.css" type="text/css">
</head>
<section class="dash">
<?php include 'templates/header.php'; ?>
	<div class="container">
		<div class="row">
			
			<div class="col-sm-12 col-md-12 col-lg-6 py-5">
				<h4>Update user information</h4>
				<?php 
				if($user_data):?>
							<?php if(isset($validation)): ?> 
							<div class="alert alert-danger">
							<?= $validation->listErrors(); ?>
							</div>                               
							 <?php endif;?>
								<div class="form-group">
									<form method="POST" action= "/domaci/public/dashboard/update/<?=$user_data["user_id"];?>">
						<label>Change First Name</label>	
							<input type="firstName" 
							name="first_name" 
							id="ime"
							class="form-control my-2" 
							value="<?php echo $user_data['first_name']; ?>">
						<label>Change Last Name</label>	
							<input type="lastName" 
							name="last_name" 
							id="prezime" 
							class="form-control my-2" 
							value="<?php echo $user_data['last_name']; ?>">
						<label>Change Email</label>	
							<input type="email" 
							id="email"
							name="email" 
							class="form-control my-2" 
							value="<?php echo $user_data['email']; ?>">
						
					</div>
					<div class="form-group text-center">
					<button type="submit" name="update" class="btn btn-warning mb-5" value="Update">UPDATE </button>
						</form>
						<?php endif; ?>
 					</div>
			</div>
			<!-- narudzbine -->
		<div class="narudzbine col-sm-12 col-md-12 col-lg-6 py-5">
		
		
		<?php
//var_dump($orders);
if($orders):
  ?>
  <table class="table table-striped table-dark">
			<thead class="thead-dark">
				<tr>
					<th>Naziv knjige</th>
					<th>Email</th>
					<th>Ime</th>
					<th>Prezime</th>
					<th>Adresa</th>
					<th>Br. telefona</th>
				</tr>
			</thead>
			<tbody id="tdbody">
  <?php
	foreach($orders as $order): 
	  //var_dump($order);
	  ?>
	   <div class="d-flex table-data">
		
			   
					   <tr>
						   <td><?php echo $order['naziv_knjige']; ?></td>
						   <td><?php echo $order['email']; ?></td>
						   <td><?php echo $order['ime']; ?></td>
						   <td><?php echo $order['prezime']; ?></td>
						   <td><?php echo $order['adresa']; ?></td>
						  <td><?php echo $order['telefon']; ?></td>
					   </tr>
					  
			   
		   


</div>
</div>
		</div>
		
	</div>
	<!-- kraj update -->

	
	
		

	<?php endforeach; ?>
	</tbody>
	 </table>
	<?php endif; ?>
		</div>
		</div>
</section> 

	<?php include 'templates/footer.php'; ?>