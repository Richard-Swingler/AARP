<?php include('includes/header.php'); ?>
<?php include('includes/welcome.php'); ?>
<?php include('includes/nav.php'); ?>
	
		<li class="dropdown padding">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Week ending<span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">Date</a></li>

			</ul>
		</li>

	<div class="row padding">
	<div class="col-md-12">
		<button class="col-md-2 content" id="red">
			Red
		</button>
		<button class="col-md-2 content" id="amber">
			Amber
		</button>
		<button class="col-md-2 content" id="yellow">
			Yellow
		</button>
		<button class="col-md-2 content" id="green">
			Green
		</button>
		<button class="col-md-2 content" id="grey">
			Incomplete
		</button>
	</div>
</div>

	<div>
		<table class="content col-md-12">
			<tr class="table"><td>Army number</td><td>Name</td><td>Score</td><td>Academic</td><td>Fitness</td><td>Medical</td><td>Personal</td></tr>
			<tr class="table"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>

			<tr class="table col-md-12"><td>Comments</td></tr><tr class="table"><td>Comments here</td><td><button>Message</button></td></tr>
		</table>
	
<?php include('includes/footer.php'); ?>