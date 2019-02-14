
	
<?php


if(isset($_GET['a']))
{
	if(file_exists('admin/'.$_GET['a'].'.php'))
	{
		    // $type= $_SESSION['type'];
        	if(isset($_SESSION['type'])){
        		if($type == 3){
        
        print '<h2 class="pageTitle text-center">'.ucwords(str_replace("_", " ", $_GET['a'])).'</h2>';
		include('admin/'.$_GET['a'].'.php');
               }
               else{
               	 print 'you have to login with an admin account to view this content<br>';
			     include('public/login.php');
        
               }

            }
        
        else{

             print 'you have to login with an account to view this content<br>';
			include('public/login.php');
        
        }
	}
	else{
		print '<h2 class="pageTitle">Security Warning</h2>';
		include('warning.php');
	}

}

else if(isset($_GET['p']))
{
	if($_GET['p'] == "login")
	{
		if(isset($_POST['btnLogin']))
		{
			if(isset($_SESSION['type']))
			{
				print '<span class="success">Login is successfull</a>';
				
			}
			else{
				print '<span class="error login">Invalid Login</span>';
//				include('public/login.php');
			}
		}
		else{
//			include('public/login.php');
		}
	}
    
    
    
    if(file_exists('public/'.$_GET['p'].'.php'))
           
	{
		print '<h2 class="pageTitle">'.ucwords(str_replace("_", " ", $_GET['p'])).'</h2>';
		include('public/'.$_GET['p'].'.php');
	}
	else
	{
		print '<h1 class="pageTitle">Security Warning</h1>';
		include('worning.php');
	}

}
else if(isset($_GET['t']))
{
    
    
    
	if(file_exists('teacher/'.$_GET['t'].'.php'))
	{
        
        if(isset($_SESSION['type']))
        {
        	if($type == 1){

        print '<h2 class="pageTitle">'.ucwords(str_replace("_", " ", $_GET['t'])).'</h2>';
		include('teacher/'.$_GET['t'].'.php');    
        }

        else
        {
        	print 'you have to login with a teacher account to view this content<br>';
			include('public/login.php');
        }
    }
        else{
            print 'you have to login with an account to view this content<br>';
			include('public/login.php');
        }

	}
	else{
		print '<h1 class="pageTitle">Security Warning</h1>';
		include('worning.php');
	}

}
else if(isset($_GET['s']))
{
	if(file_exists('student/'.$_GET['s'].'.php')) 
        
	{
        
                if(isset($_SESSION['type'])){
                	if($type == 2){

		print '<h2 class="pageTitle">'.ucwords(str_replace("_", " ", $_GET['s'])).'</h2>';
		include('student/'.$_GET['s'].'.php');
                    
                }
             else{
			print 'you have to login with a student account to view this content<br>';
			include('public/login.php');
             }
         }
        else{
                print 'you have to login with an account to view this content<br>';
			    include('public/login.php');
        }
	}
	else{
		print '<h1 class="pageTitle">Security Warning</h1>';
		include('worning.php');
	}

}
else{
		include('home.php');
}
?>
			
	