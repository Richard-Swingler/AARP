<?php include('includes/header.php'); ?>
<div id="loginlayout">
	<form>
	<!-- user enters name, comment and ticks a checkbox to say whether they liked the film or not -->
		<div class="form-group row">
			<dt><label class="col-md-2" for="username"><span class='glyphicon glyphicon-thumbs-up'</label></dt>
			<dd><input class="col-md-9" name="username" type="text" class="form-control" id="name" placeholder="your username"></dd>
		</div>		
		<div class="form-group row">
			<dt><label class="col-md-2 " for="password"><span class='glyphicon glyphicon-thumbs-down'></label>  </dt>
			<dd><input  class="col-md-9" name="password" type="text" class="form-control" id="password" placeholder="password">	</dd>
		</div>
		
		<!-- user can submit comment for processing -->
		<div class="row">
			<div class="col-md-1"></div>
			<button type="submit" class="col-md-10" class="btn btn-primary">Login</button>
		</div>
	</form>	
	
<?php include('includes/footer.php'); ?>