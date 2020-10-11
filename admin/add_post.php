<?php

//Header.php file use for index.php file on header section

include_once("../libs/config.php");
include_once("../libs/function.php");


$select=new data();

//selecting data



//selecting categories
$query_subjects = "select*from subject";

$subjects= $select->select($query_subjects);


// inserting post

if(isset($_POST['submit_post'])){
    
    
    $title = mysqli_real_escape_string($select->link,$_POST['title']);
    $content = mysqli_real_escape_string($select->link,$_POST['content']);
    $author = mysqli_real_escape_string($select->link,$_POST['author']);
    $tags = mysqli_real_escape_string($select->link,$_POST['tags']);
    $subject = mysqli_real_escape_string($select->link,$_POST['subject']);
    
    if($title=='' || $content=='' || $author=='' || $tags=='' || $subject=='' ){
        echo "please fill all the fieldes !";
    }
    else{
        $query = "insert into post (subject_id,title,content,author,tags) values('$subject','$title','$content','$author','$tags')";
        
        $run = $select->insert($query);
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    
    

    <title>Admin Panel</title>

   
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" media="screen" >

    

   
    <link href="../bootstrap/css/custom.css" rel="stylesheet">

    
  <script src="https://cdn.tiny.cloud/1/6amzuxbgq4nrnvdafhv2z5oeg3v47l6pwctq0v9c1kk6lq8e/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
     <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name'
    });
  </script>
  
    

    
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="index.php">Dashboard</a>
            <a class="blog-nav-item" href="add_post.php">Add Post</a>
            <a class="blog-nav-item_a" href="add_category.php" >Add Category</a>
            <a class="blog-nav-item pull-right" href="../index.php">View Blog</a>
          <a class="blog-nav-item pull-right" href="logout.php">Logout</a>
        </nav>
      </div>
    </div>

    <div class="container">

      

      <div class="row">

        <div class="col-sm-12 blog-main">
        
            <br> 
            <h2>Insert New Post</h2><hr>            

            
            <form action="add_post.php" method="POST">
                
            <div class="form-group">
                <label >Post Title:</label>
                <input type="text" class="form-control"  placeholder="Enter Title" name="title">
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea type="text" class="form-control"  placeholder="Enter Content" name="content"></textarea>
            </div>
            
            <div>
                <select class="form-control" name="subject">
                    <option> Select a Category</option>
                    <?php while($row = $subjects->fetch_array()): ?>
                    <option value="<?php echo $row['subject_id']; ?>"><?php echo $row['title'];?>&nbsp;&nbsp;<?php echo $row['c_title'];?></option>
                    <?php endwhile;?>
                </select>
            </div>
    
                
            <div class="form-group">
                <label >Author Name:</label>
                <input type="text" class="form-control"  placeholder="Enter Author Name" name="author">
            </div>
            <div class="form-group">
                <label>Tags:</label>
                <input type="text" class="form-control"  placeholder="Enter Tags" name="tags">
            </div>

                <button type="submit" class="btn btn-success" name="submit_post">Submit</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
        </form>    

            
                       
          </div><!-- /.blog-post -->
          
