<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>ACCOUNTCHEK</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	
    <!-- Custom styles for this template -->
    <link href="ac.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	  
<?php include("includes/header-nolinks.php"); ?>


<!-- Results header -->
<div class="row">
	<div class="col-md-12">
		<div class="container">
			
			<h3><i class="fa fa-files-o"></i> Views</h3>
      <p class="process-type"></p>
						
			<div class="list-group">
  				<a href="sign-in.php" target="_blank" class="list-group-item">
    				<h4 class="list-group-item-heading">Sign-in</h4>
    				<p class="list-group-item-text"></p>
  				</a>
  				<a href="bank-sign-in.php" target="_blank" class="list-group-item">
    				<h4 class="list-group-item-heading">Bank Sign-in</h4>
    				<p class="list-group-item-text"></p>
  				</a>
          <a href="challenge.php" target="_blank" class="list-group-item">
            <h4 class="list-group-item-heading">Bank Challenge</h4>
            <p class="list-group-item-text"></p>
          </a>
  				<a href="classify.php" target="_blank" class="list-group-item">
    				<h4 class="list-group-item-heading">Classify Accounts</h4>
    				<p class="list-group-item-text"></p>
  				</a>
  				<a href="share.php" target="_blank" class="list-group-item">
    				<h4 class="list-group-item-heading">Share Accounts</h4>
    				<p class="list-group-item-text"></p>
  				</a>
          <a href="share-nomatch.php" target="_blank" class="list-group-item">
            <h4 class="list-group-item-heading">Share Account - No Match</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="banks.php" target="_blank" class="list-group-item">
            <h4 class="list-group-item-heading">Banks</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="bank-detail.php" target="_blank" class="list-group-item">
            <h4 class="list-group-item-heading">Bank Detail</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="add-new-bank-alt.php" target="_blank" class="list-group-item">
            <h4 class="list-group-item-heading">Add New Bank</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="search-results.php" target="_blank" class="list-group-item">
            <h4 class="list-group-item-heading">Search Results</h4>
            <p class="list-group-item-text"></p>
          </a>
          <a href="loading.php" target="_blank" class="list-group-item">
            <h4 class="list-group-item-heading">Loading</h4>
            <p class="list-group-item-text"></p>
          </a>
			</div>

		</div>
	</div>
</div>

<?php include("includes/footer.php"); ?>

</body>
</html>

