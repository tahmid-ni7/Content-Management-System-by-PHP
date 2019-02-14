
<?php

$fname = "";
$lname = "";
$gender = "";
$inst = "";
$dpt = "";
$email = "";
$password = "";
$cpassword = "";
$contact = "";
$type = "";
$img = array();


$efname = "";
$egender = "";
$einst= "";
$eemail = "";
$epassword = "";
$ecpassword = "";
$econtact = "";
$etype = "";
$eimg = "";


if(isset($_POST['submit']))
{
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];

 if (isset($_POST['gender']))
    $gender = $_POST['gender'];

  $inst = $_POST['inst'];
  $dpt = $_POST['dpt'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $contact = $_POST['contact'];
  $type = $_POST['type'];
  $img = $_FILES['img'];


    $er = 0;
  
  if($fname == "")
  {
    $er++;
    $efname = '<span class="error">Required</span>';
  }  
  if($inst == "")
  {
    $er++;
    $einst = '<span class="error">Required</span>';
  } 
  if($email == "")
  {
    $er++;
    $eemail = '<span class="error">Required</span>';
  }

  if($type == "0")
  {
    $er++;
    $etype = '<span class="error">Please select your type</span>';
  }

  if($password == "")
  {
    $er++;
    $epassword = '<span class="error">Required</span>';
  }

  if($cpassword == "")
  {
    $er++;
    $ecpassword = '<span class="error">Required</span>';
  }
 if($contact == "")
  {
    $er++;
    $econtact = '<span class="error">Required</span>';
  }




     if($img['name']== "")
    {
        $er++;
        $eimg = '<span class= "errorimg"> Required</span>';
    }
    else
    {
        $a = explode(".", $img['name']);
        if(is_array($a) && count($a) > 1)
        {
            $ext = strtolower( $a[count($a)- 1]);
            if($ext== "jpg" || $ext == "png" || $ext == "jpeg" || $ext == "gif")
            {
                if($img['size']> (2*1024*1024))
                {
                    $er++;
                    $eimg = '<span class= "errorimg">Image size must have to less than 2MB.</span>';
                }
            }
            else
            {
                $er++;
                $eimg = '<span class= "errorimg">Invalid format: JPG, PNG, JEPG, GIF Required</span>';
                
            }
        }
        else
        {
            $er++;
            $eimg = '<span class="errorimg">Invalid format</span>';
        }
    }


    if($er == 0)
  {
    $sql = "insert into users (fname, lname, gender, inst, dpt, email, password, cpassword, contact, type, img)
      values ('".ms($fname)."','".ms($lname)."','".ms($gender)."','".ms($inst)."','".ms($dpt)."','".ms($email)."',password('".ms($password)."'),password('".ms($cpassword)."'),'".ms($contact)."','".ms($type)."','".ms($img['name'])."')";
    if(mysqli_query($cn, $sql))
    {
      print '<span class="successMessage" >Congraculation!!! Your registration is successfull</span>';

       $sp = $img['tmp_name'];
       $dp = "uploades/images/teacher-img/".mysqli_insert_id($cn)."_".$img['name'];
             
      move_uploaded_file($sp, $dp);
      $fname = "";
      $lname = "";
      $gender = "";
      $inst = "";
      $email = "";
      $password = "";
      $cpassword = "";
      $contact = "";
      $img = "";

      print "<div class='success'>Registration Successfull </div>";

       header("location: ?p=login");
     
    }
    else{
      print '<span class="error">'.mysqli_error($cn).'</span>';



    }
  }



}
?>


<!-- student registration form -->
<div class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="registration-form">
          <form method="post" action="" enctype="multipart/form-data">


              <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" value="<?php print $fname; ?>"><?php print $efname; ?>
              </div>
              <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" value="<?php print $lname; ?>">
              </div>
              <div class="form-group">
                <label>Gender</label><br>
                <label class="radio-inline">
                <input type="radio" name="gender" value="Male">Male
                </label>
                <label class="radio-inline">
                  <input type="radio" name="gender" value="Female">Female
                </label>
              </div>
              

              <div class="form-group">
                <label for="inst">Institution</label>
                <input type="text" name="inst" class="form-control" id="inst" placeholder="Institution Name" value="<?php print $inst; ?>"><?php print $einst; ?>
              </div>
               <div class="form-group">
                  <label for="department">Department</label>

                <select name="dpt" class="form-control" id="department">
                  
                 <?php
                  $sql = "select id, short_name from department";
                  $table = mysqli_query($cn, $sql);
                  while($row = mysqli_fetch_assoc($table))
                  {
                    print '<option value="'.$row["id"].'">'.$row["short_name"].'</option>';
                  }
                    ?>

                </select>

              </div>



              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?php print $email; ?>"><?php print $eemail; ?>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password"><?php print $epassword; ?>
              </div>
              <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm Password"><?php print $ecpassword; ?>
              </div>
              <div class="form-group">
                <label for="contact">Contact Number</label>
                <input type="text" name="contact" class="form-control" id="contact" placeholder="Contact Number" value="<?php print $contact; ?>"><?php print $econtact; ?>
              </div>
              <div class="form-group">
                <label for="type">Type</label>

                <select name="type" class="form-control" id="type" >
                  <option value="0">Select</option>
                  <option value="1">Teacher</option>
                  <option value="2">Student</option>
                </select><?php print $etype; ?>
              </div>
              <div class="form-group">
                <label for="img">Uploade Your Image</label>
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    
                  <span class="btn btn-default btn-file">
                    <img src="img/man.png" alt=""><br>
                    <input type="file" name="img" id="img"/>
                  </span><?php print $eimg; ?>
              </div>
              </div>



              <button type="submit" name="submit" class="btn btn-default">Submit</button>
              <a href="?p=login" class="notregister">Already Have An Account?</a>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>