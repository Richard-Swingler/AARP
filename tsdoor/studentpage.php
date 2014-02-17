<?php include('includes/header.php'); ?>
<?php include('includes/welcome.php'); ?>
<div class="content">
<h3>Questionaire</h3>
<form>
	<label>Academic</label>
	<?php include('partial/dropdown.php'); ?>
	<label>Fitness</label>
	<?php include('partial/dropdown.php'); ?>
	<label>Medical</label>
	<?php include('partial/dropdown.php'); ?>
	<label>Personal</label>
	<?php include('partial/dropdown.php'); ?>
	<label>Comments</label><input></input>
	<button>Reset</button>
	<button>Submit</button>
</form>
<?php include('includes/footer.php'); ?>