<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>USER SECTION</title>
	<?= link_tag('assets/css/bootstrap.min.css') ?>
  <style>
  img{
    width:50%;
    height:50%;
  }
  .boundary{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding:2%;
  }
  hr{
    width:50%;
  }
  .zoom{
    padding: 15px;
  transition: transform .2s;
  margin: 0 auto;
  }
  .zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
  </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">User Panel</a>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <?= form_open('user/search', ['class'=>'form-inline my-2 my-lg-0']) ?>
    
      <input class="form-control mr-sm-2" name="query" type="text" placeholder="Search for your Product">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Submit</button>
    <?= form_close(); ?>
    <?= form_error('query',"<p class='navbar-text text-danger'>",'</p>') ?>

    <button class="btn btn-secondary offset-10" type="submit" style="position:absolute;">
        <?= anchor('login/admin_login','Login'); ?>
      </button>
  </div>
</nav>