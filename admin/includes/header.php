<?php

//Header.php file use for index.php file on header section


include_once("../libs/config.php");
include_once("../libs/function.php");


$select=new data();

$query="select * from post ";
$post= $select->select($query);


$query_cats = "select * from categories";
$cats= $select->select($query_cats);


$query_subject = "select * from subject";
$subject= $select->select($query_subject);

 
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
          <a class="blog-nav-item_a" href="add_subject.php">Add Subject</a>
          <a class="blog-nav-item pull-right" href="../index.php">View Blog</a>
          <a class="blog-nav-item pull-right" href="logout.php">Logout</a>
        </nav>
      </div>
    </div>

    <div class="container">

      

      <div class="row">

        <div class="col-sm-12 blog-main">
        
            
            <table class="table table-striped">
                
                <tr align="center">
                    <td colspan="4"><h1>Manage Post</h1></td>
                </tr>
                
                <tr>
                    <th>Post Id</th>
                    <th>Post Title</th>
                    <th>Post Author</th>
                    <th>Post Date</th>
                    
                </tr>
                
                <?php while($row = $post->fetch_array()): ?>
                
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><a href="edit_post.php?id=<?php echo $row['id']; ?> "><?php echo $row['title']; ?> </a></td>
                    <td><?php echo $row['author']; ?></td>
                    <td><?php echo formateDate($row['date']); ?></td>
                </tr>
                
                <?php endwhile;?>
                  
            </table>
            <br>
            <br>
            
            <table class="table table-striped">
                
                <tr align="center">
                    <td colspan="4"><h1>Manage Category</h1></td>
                </tr>
                
                <tr>
                    <th>Category Id</th>
                    <th>Category Title</th>
                    
                    
                </tr>
                
                <?php while($row_cats = $cats->fetch_array()): ?>
                
                <tr>
                    <td><?php echo $row_cats['category_id']; ?></td>
                    <td><a href="edit_cats.php?id=<?php echo $row_cats['category_id']; ?> "><?php echo $row_cats['title']; ?> </a></td>
                    
                </tr>
                
                <?php endwhile;?>
                  
            </table>
            <br>
            <br>
            
            <table class="table table-striped">
                
                <tr align="center">
                    <td colspan="4"><h1>Manage Subject</h1></td>
                </tr>
                
                <tr>
                    <th>Subject Id</th>
                    <th>Subject Title</th>
                    
                    
                </tr>
                
                <?php while($row_subject = $subject->fetch_array()): ?>
                
                <tr>
                    <td><?php echo $row_subject['subject_id']; ?></td>
                    <td><a href="edit_subject.php?id=<?php echo $row_subject['subject_id']; ?> "><?php echo $row_subject['title']; ?></a></td>
                    <td><h4><?php echo $row_subject['c_title']; ?></h4></td>
                </tr>
                
                <?php endwhile;?>
                  
            </table>

            
                       
          </div><!-- /.blog-post -->
          

        
        
       