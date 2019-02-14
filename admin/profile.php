


<?php
$sql = "select * from users where id=".$_SESSION['id'];
$table = mysqli_query($cn, $sql); ?>

  <div class="container">
    <div class="row">
        <div class="col-md-12">
               <?php while($row= mysqli_fetch_assoc($table)){  ?>
            <div class="profile">
                 <div class="img">
             <?php   print '<img src = "uploades/images/teacher-img/'.$row['id'].'_'.$row['img'].'" height="100px">'.'<br>'; ?>
            </div>


                <h3>Name: <span><?php echo $row['fname']." ".$row['lname']; ?></h3>
                <h3>Intitution: <span><?php echo $row['inst']; ?></h3>
                <h3>Contact: <span><?php echo $row['contact']; ?></h3>
                <h3>Email: <span><?php echo $row['email']; ?></h3>
                
            </div>

              <?php } ?>
        </div>
    </div>
</div>