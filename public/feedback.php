

<?php

$name = "";
$email = "";
$message = "";

$ename = "";
$eemail = "";
$emessage = "";

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $er = 0;
    
    if($email == "")
    {
        $er++;
        $eemail = '<span class="error">Required</span>';
    }
    if($name == "")
    {
        $er++;
        $ename = '<span class="error">Required</span>';
    }   
    if($message == "")
    {
        $er++;
        $emessage = '<span class="error">Required</span>';
    }
    
    if($er == 0)
    {
        $sql = "insert into feedback(name, email, message)
            values ('".ms($name)."', '".ms($email)."', '".ms($message)."')";
        if(mysqli_query($cn, $sql))
        {
            //print '<span class="success">Data Saved</span>';
            $name = "";
            $email = "";
            $message = "";
        }
        else{
            print '<span class="error">'.mysqli_error($cn).'</span>';
        }
    }
}




?>


<div class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="registration-form">
          <form method="post" action="" enctype="multipart/form-data">
              <div class="form-group">
                <label for="email">Name</label>
                 <input type="text" name="name" class="form-control" placeholder="Name" value="<?php print $name; ?>"><?php print $ename; ?>
              </div>

				<div class="form-group">
                <label for="email">Email</label>
                 <input type="email" name="email" class="form-control" placeholder="Email" value="<?php print $email; ?>"><?php print $eemail; ?>
              </div>


              <div class="form-group">
                <label for="mess">Message</label>
               <textarea name="message" id="mess" class="form-control" cols="30" rows="10" placeholder="Message"><?php print $message; ?></textarea><?php print $emessage; ?>
              </div>

              <button type="submit" name="submit" class="btn btn-default">Send</button>

            </form>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>


