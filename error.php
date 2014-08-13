<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>ACCOUNTCHEK</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css">
	
    <!-- Custom styles for this template -->
    <link href="ac.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	  
<?php include("includes/header-nolinks.php"); ?>
<div class="alert alert-success ac-alert-error">
  <i class="fa fa-exclamation-circle"></i> There was a problem.
</div>

<!-- Results header -->
<div class="container">
  <div class="row">
          <div class="col-md-12">

            <div class="info-block" style="margin-bottom:20px;">
    
              <p class="question"><strong>We apoligize for the inconvenience</strong></p>
              <p>Something unexpected has happened and we were unable to complete the operation. To continue using Accountchek please select one of the options below. </p>

            </div>

            <div class="list-group">
              <a href="#" class="list-group-item">Manage your banks</a>
              <a href="#" class="list-group-item">Add a new bank</a>
              <a href="#" class="list-group-item">Sign out</a>
            </div>

    </div>
  </div>
</div>


<?php include("includes/footer.php"); ?>
<script>
    $(document).ready(function() {
      $(".info-block").delay(0).slideDown("slow");
    })
    </script>
</body>
</html>

