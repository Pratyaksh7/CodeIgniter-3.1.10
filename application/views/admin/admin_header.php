<!DOCTYPE html>
<html>
<head>
	<title>ADMIN SECTION</title>
	<?= link_tag('assets/css/bootstrap.min.css') ?>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
      
      <button class="btn btn-secondary offset-11" type="submit">
        <?= anchor('login/admin_logout','Logout'); ?>
      </button>
    
  </div>
</nav>