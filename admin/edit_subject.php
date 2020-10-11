<?php

//Header.php file use for index.php file on header section

include_once("../libs/config.php");
include_once("../libs/function.php");


$select=new data();

//selecting data

$subject_id = $_GET['id'];
$query = "select * from subject where subject_id ='$subject_id'";
$subject = $select->select($query);
$single = $subject->fetch_array();


//selecting categories
$query_cats = "select * from categories";
$cats= $select->select($query_cats);


// update post

if(isset($_POST['submit_update'])){
    
    $cat = mysqli_real_escape_string($select->link,$_POST['cat']);
    $title = mysqli_real_escape_string($select->link,$_POST['title']);
   
    if( $cat=='' || $title==''){
        echo "please fill all the fieldes !";
    }
    else{
        $query = "update subject set category_id='$cat',title='$title' where subject_id='$subject_id'";
        
        $run = $select->update($query);
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

    
    

    
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="index.php">Dashboard</a>
            <a class="blog-nav-item" href="add_post.php">Add Post</a>
            <a class="blog-nav-item_a" href="add_category.php">Add Category</a>
          <a class="blog-nav-item pull-right" href="localhost/phpblog">View Blog</a>
          <a class="blog-nav-item pull-right" href="logout.php">Logout</a>
        </nav>
      </div>
    </div>

    <div class="container">

      

      <div class="row">

        <div class="col-sm-12 blog-main">
        
            <br> 
            <h2>Update Post</h2><hr>            

            
            <form action="edit_subject.php?id=<?php echo $subject_id;?>" method="POST">
                
            <div class="form-group">
                <label >Subject Title:</label>
                <input type="text" class="form-control" value="<?php echo $single['title']; ?>" placeholder="Enter Title" name="title">
            </div>
            
            
            <div>
                <select class="form-control" name="cat">
                    <option> Select a Category</option>
                    <?php while($row = $cats->fetch_array()): ?>
                    <option value="<?php echo $row['category_id']; ?>"> <?php echo $row['title']; ?></option>
                    <?php endwhile;?>
                </select>
            </div>

                <button type="submit" class="btn btn-success" name="submit_update">Update</button>
                <a href="index.php" class="btn btn-default">Cancel</a>
                 <a href="delete_post.php?delete_id=<?php echo $post_id;?>" class="btn btn-danger">Delete</a>
               
        </form>    

            
                       
          </div><!-- /.blog-post -->
