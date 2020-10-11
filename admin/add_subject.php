<?php

//Header.php file use for index.php file on header section

include_once("../libs/config.php");
include_once("../libs/function.php");


$select=new data();




//selecting categories
$query_cats = "select * from categories";

$cats= $select->select($query_cats);


// inserting post

if(isset($_POST['submit_subject'])){
    
    
    $cat = mysqli_real_escape_string($select->link,$_POST['cat']);
    $title = mysqli_real_escape_string($select->link,$_POST['title']);
    $c_title = mysqli_real_escape_string($select->link,$_POST['c_title']);
    
    if($cat=='' || $title=='' || $c_title==''){
        echo "please fill all the fieldes !";
    }
    else{
        $query = "insert into subject (category_id,title,c_title) values('$cat','$title','$c_title')";
        
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

    
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

  
    

    
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
            <h2>Insert New Subject</h2><hr>            

            
            <form action="add_subject.php" method="POST">
                
            <div class="form-group">
                <label >Subject Title:</label>
                <input type="text" class="form-control"  placeholder="Enter Subject Title" name="title">
            </div>
             
            <div>
                <select class="form-control" name="cat">
                    <option> Select a Category</option>
                    <?php while($row = $cats->fetch_array()): ?>
                    <option value="<?php echo $row['category_id']; ?>"> <?php echo $row['title']; ?></option>
                    <?php endwhile;?>
                </select>
            </div>
            <div class="form-group">
                <label >Re-Enter class name:</label>
                <input type="text" class="form-control"  placeholder="Enter Category Title" name="c_title">
            </div>
    
                
                <button type="submit" class="btn btn-success" name="submit_subject">Submit</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
        </form>    

            
                       
          </div><!-- /.blog-post -->

