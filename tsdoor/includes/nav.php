<div id="menu">
		<?php
					//array of pages in my nav bar. Genre page is sepratly defined
					$navArray = array(
					'staffhomepage'			=> '<span class="glyphicon glyphicon-home"></span> Stats homepage',
					'search'			=> 'Search submissions',
					'export'			=> 'Export results',
					);
					?>
		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-tabs">
				 <?php foreach($navArray as $key => $nav) : // iterate through each nav item - also use the array key as $key ?>
				<?php
				// see if the string exists in the server script name
				// this is the name and path from the root URL of the file
				// if the current page is the item in the loop, add class="active"
				if(strstr($_SERVER['SCRIPT_NAME'], $key)) $active = 'class="active"';
				//if page is not active, set $active to an empty string
				else $active = '';
				?>
				<!-- create the list item adding in the class="active" if needed, the href and link name -->
				<li <?=$active; ?>><a href="<?=$key; ?>.php"><?=$nav; ?></a></li>
			<?php endforeach;?>
			
				</ul>
			</div>
		</div>
	</div>
<div class="content">