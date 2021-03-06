<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>CS252</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

  
  </head>
  <body>
    <div class="container-fluid">
      <div class="row" style="background:#d3d3d3">
        <div class="col-md-12 text-center">
          <h1>Students Database</h1>
        </div>
      </div>
      <div class="row" style="background:#d3d3d3;border-top:4px solid black">
        <div class="col-md-8 text-center" style="border-right:4px dashed black"><h4 style="margin-top:35%;margin-bottom:40%">Fill your details to add them into the database and press the submit button<br><br>
        <a href="/cs252/allstudents.php"><button type="button" class="btn btn-primary">Click here to see the whole list</button></a></h4></div>
        <div class="col-md-4"><h3 class="text-center">Fill the details here</h3>
          <form action="create_student.php" method="GET" style="padding:10%">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Ananth Reddy" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">DOB</label>
              <input type="dob" class="form-control" id="dob" name="dob" placeholder="YYYY-MM-DD" required>
            </div>
            <div class="form-group">
              <label for="roll">Roll Number</label>
              <input type="number" class="form-control" id="roll" name="roll" placeholder="14182" required>
            </div>
            <div class="form-group">
              <label for="reg">Phone Number</label>
              <input type="text" class="form-control" id="reg" name="reg" placeholder="7755057794" required>
            </div>
            <div class="form-group">
              <label for="cpi">CPI</label>
              <input type="number" step="0.01" min="0" max="10" name="cpi" class="form-control" id="cpi" placeholder="7.4" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
