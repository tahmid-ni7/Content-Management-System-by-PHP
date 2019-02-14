
<div class="container section-padding">
	<div class="row height">

<?php


if(isset($_GET['did']))
{
    $sql = "delete from department where id = ".$_GET['did'];
    if(mysqli_query($cn, $sql))
    {
        print "<div class='de rubberBand'>Deleted</div>";
    }
    else
    {
        print mysqli_error($cn);
    }
}

$name = "";
$co_name = "";
$short_name = "";

$ename = "";
$eshort_name = "";

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$co_name = $_POST['co_name'];
	$short_name = $_POST['short_name'];
	
	$er = 0;
	
	if($name == "")
	{
		$er++;
		$ename = '<span class="error">Required</span>';
	}	
	if($short_name == "")
	{
		$er++;
		$eshort_name = '<span class="error">Required</span>';
	}
	
	if($er == 0)
	{
		$sql = "insert into department(name, co_name, short_name)
			values ('".ms($name)."', '".ms($co_name)."', '".ms($short_name)."')";
		if(mysqli_query($cn, $sql))
		{
			//print '<span class="success">Data Saved</span>';
			$name = "";
			$co_name = "";
			$short_name = "";
		}
		else{
			print '<span class="error">'.mysqli_error($cn).'</span>';
		}
	}
}




?>

		<div class="col-md-8 col-md-offset-1">
			
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Add Department
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Add New Department</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       				<form action="" method="post">
       					

       					<div class="form-group">
						    <label for="f-name">Department Name</label>
						    <input type="name" name="name" class="form-control" id="f-name" placeholder="Enter Name">
						</div>



						<div class="form-group">
						    <label for="f-name">Co-Ordinator NAme</label>
						    <input type="text" name="co_name" class="form-control" id="f-name" placeholder="Enter Co-Ordinator Name">
						</div>



						  <div class="form-group">
						    <label for="s-name">Short Name Of Department</label>
						    <input type="text" name="short_name" class="form-control" id="s-name" placeholder="Ex: BCSE">
						  </div>
						  <!-- <div class="form-check">
						    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						    <label class="form-check-label" for="exampleCheck1">Check me out</label>
						  </div> -->
						  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
       				</form>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php 
$sql="select id, name, co_name, short_name from department";
$table = mysqli_query($cn, $sql); ?>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Department Name</th>
        <th>Co Ordinator NAme</th>
        <th>Short Form</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = mysqli_fetch_assoc($table)) { ?>	
      <tr class="department">
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['short_name']; ?></td>
      
        <td><a href=<?php echo "\"?a=department&did=".$row["id"]."\""; ?> class="btn btn-default">Delete</a></td>
      </tr>

  <?php } ?>
    </tbody>
  </table>



		</div>
	</div>
</div>

