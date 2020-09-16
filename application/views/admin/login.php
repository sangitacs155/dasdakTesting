<!DOCTYPE html>
<html>
<link href="<?php echo base_url()?>assets/css/maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="<https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="<https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
	<title>Dashboard</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>styles.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/admain.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3> Admin </h3>
			</div>
			<div class="card-body">
			<div  id = "flash-messages" class="d-flex justify-content-center links">
			<?php  if($error=$this->session->flashdata('Login_failed')) { ?>

				<?php echo $error; ?>

				<?php }?>

				</div>
				<form action="<?php echo site_url('Admin/login'); ?>" method="post"  class="clearfix" >
				</br>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name = "username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name = "password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me 
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				
			</div>
		</div>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
$(function(){
  $("#flash-messages").click(function(){$(this).hide()});
});
</script>


