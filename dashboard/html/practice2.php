<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="../../css/bootstrap.min.css" />
<link rel="stylesheet" href="../../css/all.min.css" />
    <title>Form Process</title>
</head>
<body>
<div class="container my-5 mx-5">
<form action="practice.php" method="post">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" name="username" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3"  class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password"  name="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <input type="submit"  name="submit" class="btn btn-primary">
</form>
</div>
</body>
</html>