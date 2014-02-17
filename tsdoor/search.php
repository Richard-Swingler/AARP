<?php include('includes/header.php'); ?>
<?php include('includes/welcome.php'); ?>
<?php include('includes/nav.php'); ?>
<h3>Search TSDOR records by:</h3>
<div class="row">
	<div class="col-md-5">
		<form>
			<label>Name </table><input></input>
			<label>Number </table><input></input>
			<label>Troop </table><input></input>
			<label>Year of study </table><input></input>
		</form>
	</div>
	<div class="col-md-5">
		<form>
			<label>Name(A-Z) </table>
			<label>Army number </table>
			<label>Troop </table><input></input>
			<label>Limit results to </table><input></input>
			<button>Clear</button>
			<button>Submit</button>
		</form>
	</div>
</div>
<div class="row">
	<div class="col-md-10">
	<h3>Results</h3>
	<table class="content col-md-12">
			<tr class="table"><td>Army number</td><td>Name</td><td>Score</td><td>Academic</td><td>Fitness</td><td>Medical</td><td>Personal</td></tr>
			<tr class="table"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>

			<tr class="table col-md-12"><td>Comments</td></tr><tr class="table"><td>Comments here</td><td><button>Message</button></td></tr>
		</table>
</div>
</div>
<?php include('includes/footer.php'); ?>