<?php 
define('TITLE', 'user || userRegistration' );
define('PAGE', 'userRegistration' );


include("dbconection.php");
if(isset($_POST['submit']))
{
 
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
      // check  empty field
      if($username=="" || $email=="" || $password=="")
      {    
              $msg="<div class='alert alert-danger'role='alert'>all field are required</div>";
       
           
      }
      else
      {
      	  // check email field
             $sqlt="SELECT email FROM signup WHERE email='" .$email. "'" ;
             $rest=mysqli_query($db,$sqlt);
              $result= mysqli_num_rows($rest);


              if($result == 1)
              {
              	$msg="<div class='alert alert-danger'role='alert'>email are already exists</div>";
              }
              else
              {
              	//check usename field

                 $sql="SELECT username FROM signup WHERE username='" .$username."'";
                 $res=mysqli_query($db,$sql);
                 $result=mysqli_num_rows($res);
                 if($result==1)
                 {
                 	$msg ="<div class='alert alert-warning'>username already taken</div>";
                 }
                 else
                 {
                 	$sql="INSERT INTO signup (username,email,password) VALUES ('$username','$email','$password')";
					 $res=mysqli_query($db,$sql);
					 if($res){
					 	$msg="<div class='alert alert-success'>sign up sucessfull</div>";
					 }

                 }

                	

              }

		      	 
      }

	
}
?>
<div class="container mt-5" id="registration">
		<h4 class="text-center">create account </h4>
		<div class="row">
			<div class="col-md-6 offset-md-3">
				   <?php 
				   if(isset($msg))
				   {
				   	 echo $msg;
				   }
				   ?>
				<form method="post" class="shadow  bg-white rounded p-2">
				<div class="form-group">
					<i class="fas fa-user"></i>
					<label>username</label>
					<input type="text" name="username" class="form-control">
				</div>
					<div class="form-group">
					<i class="fas fa-envelope-square"></i>
					<label>email</label>
					<input type="email" name="email" class="form-control">
				</div>
					<div class="form-group">
				<i class="fas fa-key"></i>
					<label>password</label>
					<input type="password" name="password" class="form-control">
				</div>
                 <button type="submit" class="btn btn-danger btn-block" name="submit">sign up</button>
				</form>
			</div>
		</div>
	</div>