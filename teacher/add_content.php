
<?php

$title = "";
$tag = "";
$description = "";
$department = "";
$file = array();


$etitle = "";
$etag = "";
$efile = "";

if(isset($_POST['file_submit']))
{
    $title = $_POST['title'];
    $tag = $_POST['tag'];
    $description = $_POST['description'];
    $department = $_POST['department'];
    $file = $_FILES['file'];


    
    $er = 0;
    
    if($title == "")
    {
        $er++;
        $etitle = '<span class="error">Required</span>';
    }   
    if($tag == "")
    {
        $er++;
        $etag = '<span class="error">Required</span>';
    }

    // file 


     if($file['name']== "")
    {
        $er++;
        $efile = '<span class= "error"> Required</span>';
    }
    else
    {
        $a = explode(".", $file['name']);
        if(is_array($a) && count($a) > 1)
        {
            $ext = strtolower( $a[count($a)- 1]);
            if($ext == "doc" || $ext== "docx" || $ext== "pdf" || $ext== "ppt" || $ext== "jpg" || $ext == "png" || $ext == "jpeg" || $ext == "gif" || $ext== "pptx" || $ext== "zip")
            {
                if($file['size']> (10*1024*1024))
                {
                    $er++;
                    $efile = '<span class= "error">Image size must have to less than 10MB.</span>';
                }
            }
            else
            {
                $er++;
                $efile = '<span class= "error">Invalid format: DOC, DOCX, PDF, PPT, PPTX ,ZIP, JPG, PNG, JEPG, GIF Required</span>';
                
            }
        }
        else
        {
            $er++;
            $efile = '<span class="error">Invalid File Format</span>';
        }
    }


    
    if($er == 0)
    {
        $sql = "insert into content(title, tag, description, file, departmentid, userid)
            values ('".ms($title)."', '".ms($tag)."', '".ms($description)."', '".ms($file['name'])."', '".ms($department)."', ".$_SESSION['id'].")";
        if(mysqli_query($cn, $sql))
        {

        print '<span class="successMessage" > Content saved into the system </span>';

            $sp = $file['tmp_name'];
            $dp = "uploades/files/".mysqli_insert_id($cn)."_".$file['name'];
             
            move_uploaded_file($sp, $dp);
            $title = "";
            $tag = "";
            $description = "";
            $department = "";
            $file = "";
        }
        else{
            print '<span class="error">'.mysqli_error($cn).'</span>';



        }
    }
}
?>


<div class="container all">
    <div class="row">
        <div class="col-md-2">
            <div class="left-menu">
                <ul>
                    <li><a href="?t=all_content">All Content</a></li>
                    <li><a href="?t=add_content" class="active">Add Content</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="content">
               <div class="upload-form">
                <div class="row">
                    <div class="col-md-6 col-md-offset-1 ">
                        <form method="post" action="" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title " placeholder="Title" value="<?php print $title; ?>"><?php print $etitle; ?>
                          </div>

                          <div class="form-group">
                            <label for="tag">Course Code</label>
                            <input type="text" name="tag" class="form-control" id="tag" placeholder="Course Code" value="<?php print $tag; ?>"><?php print $etag; ?>
                          </div>

                          <div class="form-group">
                            <label for="des">Description</label>

                            <textarea name="description" class="form-control" id="des" placeholder="Description" value= ""><?php print $description; ?></textarea>
                          </div>

                          <div class="form-group">
                            <label for="department">Department</label>

                            <select name="department" class="form-control" id="des">
                                
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
                            <label for="content">File input</label>
                            <input type="file" name="file" id="content"><?php print $efile; ?>

                         <!--    <p class="help-block">Example block-level help text here.</p> -->
                          </div>

                        <!--   <div class="checkbox">
                            <label>
                              <input type="checkbox"> Check me out
                            </label>
                          </div> -->
                          <button type="submit" name="file_submit" class="btn btn-default">Submit</button>
                        </form>
                </div>
            </div>
        </div>
                
            </div>
        </div>
    </div>
</div>