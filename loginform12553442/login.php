<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    

    <link rel="stylesheet" href="css/style.css">

    <title>Login #8</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-11">
              <div class="mb-6">
              <h3>Sign In to <br><strong>Anahaw Farmers Association</strong></h3>
              <p class="mb-4">If you are an admin or already a member so you can log in.</p>
            </div>
            <form action="../actions/xlogin.php" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" value="" id="username" name="uname" required="" autocomplete="false" autofocus="" autosave="false">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" value="" id="password" name="pword" required="" autocomplete="false">
                
              </div>
              
             

              <input type="submit" value="Log In" name="logbtn" class="btn text-white btn-block btn-primary">

            <div>
              <div>
                <div class="missed-some">
                  <span class="missed">Missed something <a href="../index.php" class="a-prim" style="text-decoration: none; color: #38d39f; font-weight: 900;">bring me back to homepage</a></span>
                </div>
              </div>
            </div>

            
              
              
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>


<style type="text/css">
              .missed{
                color:gray;
                text-decoration: none;
              }
              .prim{
                color: #38d39f;
                text-decoration: none;
              }
              .a-prim{
                text-decoration: none;
                color: #38d39f;
              }

              .missed-some{
                margin-top: 20px;
              }
</style>