<?php
include "header.php";
?>
    <section>
      <div class="container"> 
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <h1>Update Student Information</h1>
            
            <?php

            if (isset( $_GET['id'])){

              $UpdateId =$_GET['id'];

              $query = "SELECT * FROM students WHERE  id = '$UpdateId' ";

              $updateStudent = mysqli_query( $connect, $query) ;

              while ($row = mysqli_fetch_assoc($updateStudent)) {
              $id     =$row['id'];
              $u_name     =$row['name'];
              $u_email    =$row['email'];
              $u_phone    =$row['phone'];
              $u_address  =$row['address'];

              ?>

              <form action="" method="POST">
                <div class="mb-3">
                  <label>Full Name</label>
                  <input type="text" name="fname" class="form-control" required="required" autocomplete="off" value="<?php echo $u_name; ?>">
                </div>
                <div class="mb-3">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" required="required" autocomplete="off" value="<?php echo $u_email; ?>">
                </div>
                <div class="mb-3">
                  <label>Mobile</label>
                  <input type="text" name="phone" class="form-control" required="required" autocomplete="off" value="<?php echo $u_phone; ?>">
                </div>
                <div class="mb-3">
                  <label>Address</label>
                  <input type="text" name="address" class="form-control" required="required" autocomplete="off" value="<?php echo $u_address; ?>">
                </div>
                <div class="mb-3">
                  <input type="submit" name="update" class="btn btn-success" value="Save Changes">
                </div>
              </form>

              <?php

              }

            }

            ?>

            
            <?php
            if (isset( $_POST['update']))
            {
              $updatedName =$_POST['fname'];
              $updatedEmail    =$_POST['email'];
              $updatedPhone    =$_POST['phone'];
              $updatedAddress  =$_POST['address'];

              //echo $fullName. "<br>" . $email;

              // The SQL command line to UPDATE a data into the database
              $query = "UPDATE students SET name='$updatedName', email='$updatedEmail', phone='$updatedPhone', address='$updatedAddress' WHERE  id = '$UpdateId'";
              $updatedStudent = mysqli_query( $connect, $query) ;

              if ( $updatedStudent ){
                //Here header is a php built in function which used to change url
                header("Location:index.php");
              }
              else{
                echo "Something went wrong!";
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