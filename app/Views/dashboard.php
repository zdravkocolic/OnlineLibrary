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
			<div class="col-sm-3 col-lg-6">
				<ul>
					<li>
						<a href="./biblioteka" class="btn btn-info">Home</a>
					</li>
					<li>
						<a href="/domaci/public/login/logout" class="btn btn-warning">Logout</a>
					</li>	
					<li>
						<?php if($_SESSION['isAdmin']=='1'):?>
							<a href="/domaci/public/admin" class="btn btn-success">Admin meni</a>
						<?php endif;?>
					</li>	
				</ul>	
			</div>
			<div class="col-sm-8 col-lg-6 py-5">
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
					<button type="submit" name="update" class="btn btn-warning" value="Update">UPDATE </button>
						</form>
						<?php endif; ?>
 					</div>
			</div>
		</div>
	</div>
</section>
	<?php include 'templates/footer.php'; ?>