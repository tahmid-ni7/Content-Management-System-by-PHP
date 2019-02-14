
<div class="container section-padding">

    <div class="row height">
        <div class="col-md-12">
            
     


<?php 


if(isset($_GET['did']))
{
    $sql = "delete from feedback where id = ".$_GET['did'];
    if(mysqli_query($cn, $sql))
    {
        print "<div class='de rubberBand'>Deleted</div>";
    }
    else
    {
        print mysqli_error($cn);
    }
}


$sql="select id, name, email, message from feedback";
$table = mysqli_query($cn, $sql);
                         

$table = mysqli_query($cn, $sql);  ?>

 <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = mysqli_fetch_assoc($table)) { ?>	
      <tr class="department">
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo substr($row['message'],0,40); ?></td>
      
        <td><a href=<?php echo "\"?a=all_feedback&did=".$row["id"]."\""; ?> class="btn btn-default">Delete</a></td>
      </tr>

  <?php } ?>
    </tbody>
  </table>
  
  
     </div>
    </div>

</div>