
<div class="container">

    <div class="row height">
        <div class="col-md-12">


<?php 
$id="";
$sql="select * from users where type=1";

$table = mysqli_query($cn, $sql);  ?>


<div class="container section-padding">
  <div class="row">
    <div class="col-md-12">
      <div class="teacher-list">


                  
                    <tbody>
                    <?php while($row = mysqli_fetch_assoc($table)) { ?> 
                      <div class="teacherlist">
                        <td><a href="?p=content_page&id=<?php echo $row["id"]; ?>"><?php echo $row['fname']." ".$row['lname']; ?></td>
                      </div>

                  <?php } ?>

      </div>
    </div>
  </div>
</div>


        </div>
    </div>
</div>

