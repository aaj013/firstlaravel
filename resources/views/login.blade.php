<!DOCTYPE html>
<html>
    <head>
        <title>New</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    </head>
    <body>
	<section class="container">
	<div class="container">
  <div class="row">
    <div class="col-md-10"></div>
    <div class="col-md-10">
	<form class="form-horizontal" action="" method="post">
    {{csrf_field()}}
	<div class="form-group">
	  <div class="col-sm-2"><label>Email</label></div>
      <div class="col-sm-3"><input type="email" class="form-control" name="email" /></div>
	</div>
	<div class="form-group">
	  <div class="col-sm-2"><label>Password</label></div>
      <div class="col-sm-3"><input type="password" class="form-control" name="password" /></div>
	</div>
	<div class="col-sm-3 col-sm-offset-2">
	  <input type="submit" class="btn btn-default" name="login" value="Login" />
	</div>
	</form>
	</div>
  </div>
</div>
	</section>
    </body>
</html>
