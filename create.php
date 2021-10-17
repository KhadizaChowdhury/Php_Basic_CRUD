<?php
include "header.php";
?>
  	<section>
  		<div class="container"> 
  			<div class="row">
  				<div class="col-lg-6 offset-lg-3">
  					<h1>Students Information</h1>
  					<form action="" method="POST">
  						<div class="mb-3">
                <label>First Name</label>
                <input type="text" name="fname" class="form-control" required="required" autocomplete="off">
              </div>
              <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required="required" autocomplete="off">
              </div>
              <div class="mb-3">
                <label>Mobile</label>
                <input type="text" name="phone" class="form-control" required="required" autocomplete="off">
              </div>
              <div class="mb-3">
                <label>Address</label>
                <input type="text" name="address" class="form-control" required="required" autocomplete="off">
              </div>
  						<div class="mb-3">
  							<input type="submit" name="register" class="btn btn-success" value="Register Student">
  						</div>
  					</form>
            <?php
            if (isset( $_POST['register']))
            {
              $fullName =$_POST['fname'];
              $email    =$_POST['email'];
              $phone    =$_POST['phone'];
              $address  =$_POST['address'];

              //echo $fullName. "<br>" . $email;

              // This is the the SQL command line to insert a data into the database
              $query = "INSERT INTO students (name, email, phone, address) VALUES ('$fullName', '$email', '$phone', '$address')";
              $addStudent = mysqli_query( $connect, $query) ;

              if ( $addStudent ){
                //Here header is a php built in function which used to change url
                header("Location:index.php");
              }
              else{
                echo "Something went wrong";
              }

            }
            ?>
  				</div>
  			</div>
  		</div>
  	</section>
<?php
include "footer.php";
?>