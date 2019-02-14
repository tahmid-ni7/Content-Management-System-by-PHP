<div class="container all">
    <div class="row">
        <div class="col-md-2">
            <div class="left-menu">
                <ul>
                    <li><a href="?t=all_content" class="active">All Content</a></li>
                    <li><a href="?t=add_content">Add Content</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="content">
               
                 <?php 




if(isset($_GET['did']))
{
    $sql = "delete from content where id = ".$_GET['did'];
    if(mysqli_query($cn, $sql))
    {
        print "<div class='de rubberBand'>Deleted</div>";
    }
    else
    {
        print mysqli_error($cn);
    }
}

                $sql="select * from content where userid =".$_SESSION['id'];

                $table = mysqli_query($cn, $sql);  ?>

                 <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Tag</th>
                        <th>Date & Time</th>
                        <th>Description</th>
                        <th>File</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php while($row = mysqli_fetch_assoc($table)) { ?> 
                      <tr class="department">
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['tag']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo substr($row['description'],0,40); ?></td>
                        <?php print '<td><a target="_blankpage" href = "uploades/files/'.$row['id'].'_'.$row['file'].'">'.$row['file'].'</a></td>'; ?>
                      
                        <td><a href=<?php echo "\"?t=all_content&did=".$row["id"]."\""; ?> class="btn btn-default">Delete</a></td>
                      </tr>

                  <?php } ?>
                    </tbody>
                  </table> 
            </div>
        </div>
    </div>
</div>