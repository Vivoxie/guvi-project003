<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    
  <script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>

  <script defer
  src="./js/script2.js"  ></script>

  <script defer
  src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"  ></script>
  
 


  <style>
    .error{
        color:red;
    }
    .form-group{
        margin-bottom:20px;
    }
  </style>
    <title>Document</title>
</head>
<body>

    <div>
        
            <div class="container">
                <div class="row justify-content-center" style="margin-top:30px">
                    <div class="col-md-6 col-md-offset-3">

                    
                        <h1>Login</h1>
                        <p>Enter the Details correctly</p>

                        <hr class="mb-3">
                        <form action="login_detail.php" method="post" id="user_login_form"> 
                        

                        
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Albert@123" />
                        </div>

                        <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="text" name="password" id="password" placeholder="***" />
                        </div>
                        <hr class="mb-3">

                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                        </form>
                    </div>
                        
                </div>   
            </div>
        
    </div>
    
</body>
</html>