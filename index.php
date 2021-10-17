<?php
include "header.php";
?>
<section class="all_std_info">
  <div class="container"> 
    <div class="row">
      <div class="col-lg-12">
        <h2>All Students Information</h2>

        <!-- Table Starts -->
        <table class="table table-striped table-hover table-bordered">
          <thead class="table-dark">
            <tr>
              <th scope="col">#SL. No.</th>
              <th scope="col">Full Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>
              <th scope="col">Address</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // The SQL command to show the data of the student table from database
              $query = "SELECT * FROM students ORDER BY address , name DESC" ;
                        // Here as we use 2 parameter in ORDER BY , so 1st one be always asc and work 1st,then second one will work as per instructions.

              $allData = mysqli_query( $connect, $query) ;
              $i = 0;

              while ($row = mysqli_fetch_assoc($allData)) {
              $id     =$row['id'];
              $name     =$row['name'];
              $email    =$row['email'];
              $phone    =$row['phone'];
              $address  =$row['address'];
              $i++;
              ?>

                <tr>
                <th scope="row"><?php echo $i;?></th>
                <td><?php echo $name;?></td>
                <td><?php echo $email;?></td>
                <td><?php echo $phone;?></td>
                <td><?php echo $address;?></td>
                </tr>

              <?php
              }
            ?>
          </tbody>
        </table>
        <!-- Table End -->
        <a href="create.php" class="btn btn-info">Register New Student</a>
      </div>
    </div>
  </div>
</section>
<?php
include "footer.php";
?>