<div class="container">
    <div class="row height">
        <div class="col-md-12">
            <div class="pading-50">
                                <?php 

if(isset($_GET['did']))
{
    $sql = "delete from users where id = ".$_GET['did'];
    if(mysqli_query($cn, $sql))
    {
        print "<div class='de rubberBand'>Deleted</div>";
    }
    else
    {
        print mysqli_error($cn);
    }
}

$sql="select * from users where type = 1";

$table = mysqli_query($cn, $sql);  ?>
<?php while($row = mysqli_fetch_assoc($table)) { ?> 
            <div class="list">
                <div class="row">
                    <div class="col-md-2">
                        <div class="img">
                         <?php print '<img src="uploades/images/teacher-img/'.$row['id'].'_'.$row['img'].'" height="120px"/>'; ?>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="info">
                            <h4 class="name">Name: <span><?php echo $row['fname']." ".$row['lname']; ?></span></h4>
                            <h4 class="email">Email: <span> <?php echo $row['email']; ?></span></h4>
                            <h4 class="inst">Institute: <span><?php echo $row['inst']; ?></span></h4>
                            <h4 class="gender">Gender: <span><?php echo $row['gender']; ?></span></h4>
                            <h4 class="contact">Contact: <span><?php echo $row['contact']; ?></span></h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <a href=<?php echo "\"?a=teacher_list&did=".$row["id"]."\""; ?> class="delete">Delete</a>
                    </div>
                </div>
            </div>
             <?php } ?>
            </div>
        </div>
    </div>
</div>