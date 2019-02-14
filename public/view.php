
					<?php 

$sql="select content.id, content.title, content.date, content.description, content.file, content.departmentid, department.short_name from content left join department on content.departmentid = department.id ORDER BY id DESC ";
$table = mysqli_query($cn, $sql);  ?>

 <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Date & Time</th>
        <th>Description</th>
        <th>File</th>
      </tr>
    </thead>
    <tbody>
    <?php while($row = mysqli_fetch_assoc($table)) { ?>	
      <tr class="department">
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo substr($row['description'],0,40); ?></td>
        <?php print '<td><a target="_blankpage" href = "uploades/files/'.$row['id'].'_'.$row['file'].'">'.$row['file'].'</a></td>'; ?>
          <td><?php echo $row['short_name']; ?></td>
        <td>Edit | Delete</td>
      </tr>

  <?php } ?>
    </tbody>
  </table>