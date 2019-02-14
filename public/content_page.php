
<div class="container">

    <div class="row height">
        <div class="col-md-12">



<?php 



// $sql="select content.id, content.title, content.date, content.description, content.file, content.departmentid, department.short_name from content left join department on content.departmentid = department.id ORDER BY id DESC ";

 $sql="select * from content where userid =".ms($_GET['id']);

$table = mysqli_query($cn, $sql);  ?>




  <div class="content">
    
      <div class="row">
           <?php while($row = mysqli_fetch_assoc($table)) { ?>  
        <div class="col-md-4">
          <div class="single-content">
          <div class="title"><h3><?php echo $row['title']; ?></h3></div>
          <div class="des">
            <p><?php echo substr($row['description'],0,40); ?></p>
            
          </div>
          <div class="file">
            Download:  <?php print '<td><a target="_blankpage" href = "uploades/files/'.$row['id'].'_'.$row['file'].'">'.$row['file'].'</a></td>'; ?>
            </div>

          <div class="date"><p>Date: <?php echo $row['date']; ?></p></div>
        </div>
      </div>
        <?php } ?>
    </div>
  </div>
  
  
        </div>
    </div>
</div>
