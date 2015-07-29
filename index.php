
<?php
	$pageTitle = 'Home';
	include "header.php"; 
?>

		<div class="hero">
		  <div class="row clearfix">
		  	<?php if(!empty($userName)) : ?>
		  		<!-- If not empty, then move forward with.. -->
		      <h1>Hi <?php echo $userName; ?>, nice to see you again!</h1>
		    <?php else : ?>
		    	<h1>Who are you? Login <a href="login.php">here</a></h1>
		    <?php endif; ?>
		    	<!-- Else,... -->
		  </div>
		</div>
		<!-- A row of two 1/2 width columns -->
		<div class="row clearfix">
		  <div class="column one-half">
		    <h2>Column Heading</h2>
		    <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		  </div>

		  <div class="column one-half">
		    <h2>Column Heading</h2>
		    <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		  </div>
		</div>
<?php include "footer.php" ?>