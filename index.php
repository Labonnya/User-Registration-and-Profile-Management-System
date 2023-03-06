
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Registration</title>
    
        <style>
  html, body {
    height: 100%;
  }

  body {
    display: flex;
    align-items: center;
    justify-content: center;
  }

</style>
</head>
<body>
 <div class="container">
<form class="row g-3 " action="mysite.php" method="post" enctype="multipart/form-data" >
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" class="form-control" name="first_name" id="validationDefault01"  required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text" class="form-control" name="last_name" id="validationDefault02"  required>
  </div>
  <div class="col-12">
    <label for="validationDefaultUsername" class="form-label">Email</label>
    <div class="input-group">
      
      <input type="text" class="form-control" name="email" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>

  <div class="col-12">
    <label for="validationDefault03" class="form-label">Address</label>
    <textarea class="form-control" name="address" id="validationDefault03" aria-describedby="inputGroupPrepend2" required></textarea>
  </div>
   
  <div class="col-12">
    <br> 
</div>

<div class="col-12">
    <label for="validationDefaultUsername" class="form-label">Photo</label>
    <div class="input-group">
      
      <input type="file" name="photo" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>

  <div class="col-12">
    <br> 
</div>

  <div class="col-12 d-flex justify-content-center">
    
    <button class="btn btn-secondary" type="reset">Reset form</button>
    <button class="btn btn-primary ml-2" type="submit" name="submit">Submit form</button>
  </div>
</form>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>