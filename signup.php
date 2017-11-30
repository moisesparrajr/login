<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up Page</title>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sigin.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin"method="POST" action="index.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" id="inputUsername" class="form-control" 
        placeholder="email@email.com" name="email" required />

        <input type="text"  class="form-control" 
        placeholder="First Name" name="reg_password" required />

        <input type="text"  class="form-control" 
        placeholder="Last Name" name="reg_password" required />

        <input type="date"  class="form-control" 
        placeholder="mm/dd/yyyy" name="birth" required />

         <input type="text"  class="form-control" 
        placeholder="Phone Number" name="phone" required />

        <select class="form-control" name="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>

         <input type="Password"  class="form-control" 
        placeholder="Enter password" name="Password" required />
        
        <input type="hidden" name="action" value ="test_user_value">
        <br />
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="submitButton">Sign in</button>
        <a href="login.html"></a>
      </form>

    </div> <!-- /container -->

  </body>
</html>