
<?php

if(isset($_GET['p']) && $_GET['p'] == "logout")
{
  unset($_SESSION['id']);
  unset($_SESSION['fname']);
  unset($_SESSION['email']);
  unset($_SESSION['contact']);
  unset($_SESSION['type']);
    


}

if(isset($_POST['btnLogin']))
{
  
$email = "";
$password = "";
$fname = "";
$type = "";

$eemail = "";
$epassword = "";

if(isset($_POST['btnLogin']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];
  $type = $_POST['type'];
  
  $er = 0;
  if($email == "")
  {
    $er++;
    $eemail = '<span class="error">Required</span>';
  }
  if($password == "")
  {
    $er++;
    $epassword = '<span class="error">Required</span>';
  }
  
  if($er == 0)
  {
  
      $sql = "select id, fname, lname, email, type from users where (email = '".ms($email)."') and password = password('".$password."') and (type = '".ms($type)."')";
    
    $table = mysqli_query($cn, $sql);
    
    while($row = mysqli_fetch_assoc($table))
    {
        $_SESSION['id'] = $row['id'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['type'] = $row['type'];

        if($_SESSION['type']==1){
        header("location: ?t=all_content");
    }
        elseif($_SESSION['type']==2){
        header("location: ?s=student_panel");
    }
        elseif($_SESSION['type']==3){
        header("location: ?a=teacher_list");
    }

      else{
        header("location: home.php");
          
      }
        
        
        break;

    }
    
  } 
}
}

?>