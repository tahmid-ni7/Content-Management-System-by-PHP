

     <div class="mainmenu">
        <ul>


        <?php if (isset($_SESSION['type'])){?>



    <?php  $type= $_SESSION['type']; ?>


    <?php  if($type== 1)  { ?>
                
                <li><a href="?t=all_content">Teacher </a></li>
                 <li><a href="?a=profile"><?php print $_SESSION['fname']; ?></a></li>
                 <li><a href="?p=logout">Logout</a></li>
                 <li><a href="?p=feedback">Feedback</a></li>



     <?php  }  elseif ($type== 2 )  { ?> 
                <li><a href="?s=student_panel">Student Panel</a></li>
                 <li><a href="?a=profile"><?php print $_SESSION['fname']; ?></a></li>
                 <li><a href="?p=logout">Logout</a></li>
                 <li><a href="?p=feedback">Feedback</a></li>

                


 
                <?php  }  elseif ($type== 3 )  { ?> 
                <li><a href="?a=teacher_list">Teacher List</a></li>
                <li><a href="?a=student_list">Student List</a></li>
                <li><a href="?a=all_content">Content List</a></li>
                <li><a href="?a=department">Department</a></li>
                 <li><a href="?a=profile"><?php print $_SESSION['fname']; ?></a></li>
                 <li><a href="?p=logout">Logout</a></li>
                 <li><a href="?a=all_feedback">All Feedback</a></li>
                 
                 
                 

                



     <?php }?>



        <?php } else{ ?>
         <li><a href="index.php">Home</a></li>
      <li><a href="?p=registration">Register</a></li>
       <li><a href="?p=login">Login</a></li>

        <?php } ?>
            


        </ul>
    </div>
