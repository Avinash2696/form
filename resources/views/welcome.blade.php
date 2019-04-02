

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Registration Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
  
    .form-control{
        height: 40px;
        box-shadow: none;
        color: #969fa4;
    }
    .form-control:focus{
        border-color: #5cb85c;
    }
    .form-control, .btn{        
        border-radius: 3px;
    }
    .signup-form{
        width: 400px;
        margin: 0 auto;
        padding: 30px 0;
    }
    
    .signup-form form{
        color: #999;
        border-radius: 3px;
        margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
  
</style>
</head>
<body>
<div class="signup-form" >
    <form action="/" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <h2>Register</h2>
        <p class="hint-text"></p>
        <div class="form-group" >
            <div class="row">
                <div class="col-xs-6"><input type="text" class="form-control" name="name" placeholder="Name" required="required"></div>
              
            </div>          
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>

          <div class="form-group">
      
      <input type="number" name="rollno" min="1" max="50" class="form-control" id="rollno" placeholder="rollno" required>

    </div>
 
  <div class="form-group">
   
      <input type="number" class="form-control" id="age" placeholder="Enter age" min="5" max="25" name="age" required>
    </div>



        <div class="input-group control-group increment" >
          <input type="file" name="photo" class="form-control">
        
        </div>
       

           
        
        <div class="form-group">
            
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Save Now</button>
        </div>

    </form>
   
</div>
</body>
</html>                            