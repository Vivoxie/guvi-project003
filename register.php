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
  src="./js/script.js"  ></script>
  <script defer
  src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"  ></script>
 
    <title>Register-Form</title>

    <style>
    .error{
        color:red;
    }
    </style>



</head>
<body>
    

    <div>
        
            <div class="container">
                <div class="row justify-content-center" style="margin-top:30px">
                    <div class="col-md-6 ">

                        
                        <h1>Register</h1>
                        <br>
                        <p>Fill your Details</p>

                        <hr class="mb-3">
                        <form action="save_user.php" method="post" id="register_form"> 
                        <div class="form-group " style="margin-bottom:20px">

                        <label for="firstname"><strong>First Name</strong></label>
                        <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Albert" />
                        </div>
                        <div class="form-group" style="margin-bottom:20px">
                        <label for="lastname"><strong>Last Name</strong></label>
                        <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Einstein" />
                        </div>
                        <div class="form-group" style="margin-bottom:20px">
                        <label for="email"><strong>Email</strong></label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Albert@123" />
                        </div>
                        <div class="form-group" style="margin-bottom:20px">
                        <label for="new_password"><strong>Enter Password</strong></label>
                        <input class="form-control" type="text" name="new_password" id="new_password" placeholder="***" />
                        <div class="form-group" style="margin-bottom:20px">
                        <label for="confirm_password"><strong>Confirm Password</strong></label>
                        <input class="form-control" type="text" name="confirm_password" id="confirm_password" placeholder="***" />
                        </div>
                        <hr class="md-3">
                        <button class="btn btn-primary btn-block" type="submit" >Register</button>
                        </form>
                    </div>
                        
                </div>   
            </div>
       
    </div>
    
</body>
</html>