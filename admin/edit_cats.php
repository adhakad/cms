
<?php

//Header.php file use for index.php file on header section

include_once("../libs/config.php");
include_once("../libs/function.php");


$select=new data();

//selecting data

$cat_id = $_GET['id'];
$query = "select * from categories where category_id ='$cat_id'";
$cat = $select->select($query);
$single = $cat->fetch_array();





// update post

if(isset($_POST['update'])){
    
    
    $cat = mysqli_real_escape_string($select->link,$_POST['title']);
    
    if($cat==''){
        echo "please fill all the fieldes !";
    }
    else{
        $query = "update categories set title='$cat' where category_id='$cat_id'";
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
            <a class="blog-nav-item pull-right" href="../index.php">View Blog</a>
          <a class="blog-nav-item pull-right" href="logout.php">Logout</a>
        </nav>
      </div>
    </div>

    <div class="container">

      

      <div class="row">

        <div class="col-sm-12 blog-main">
        
            <br> 
            <h2>Update Category</h2><hr>            

            
            <form action="edit_cats.php?id=<?php echo $cat_id;?>" method="POST">
                
            <div class="form-group">
                <label >Category Name</label>
                <input type="text" class="form-control" value="<?php echo $single['title']; ?>" placeholder="Enter Title" name="title">
            </div>
            
                <button type="submit" class="btn btn-success" name="update">Update</button>
                <a href="index.php" class="btn btn-default">Cancel</a>
                
                <a href="delete_cats.php?delete_id=<?php echo $cat_id;?>" class="btn btn-danger">Delete</a>
        </form>    

            
                       
          </div><!-- /.blog-post -->
          


