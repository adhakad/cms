<?php


include_once("libs/config.php");
include_once("libs/function.php");

$select=new data();

if(isset($_GET['id'])){
    


$id = $_GET['id'];    

$query = "select*from post where subject_id='$id'";


$post = $select->select($query);



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
    
    

    <title>PHP Blog</title>

   
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" media="screen" >

    

   
    <link href="bootstrap/css/custom.css" rel="stylesheet">

    
    

    
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="index.php">Home</a>
          <a class="blog-nav-item" href="posts.php">All posts</a>
          <a class="blog-nav-item" href="services.php">Services</a>
          <a class="blog-nav-item" href="about.php">About us</a>
          <a class="blog-nav-item" href="contacts.php">Contacts</a>
        </nav>
      </div>
    </div>

    <div class="container">

      

      <div class="row">

        <div class="col-sm-8 blog-main">
            
            
        
              
            
         
        <?php while ($row=$post->fetch_array()): ?>    
  
            

          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title'];?></h2>
            <p class="blog-post-meta"><?php echo formateDate ($row['date']);?> <a href="#"><?php echo $row['author'];?></a></p>

            <p><?php echo substr($row['content'],0,250);?></p>
            <a class="readmore" href=" single.php?id=<?php echo $row['id'];?>" > Read More</a>
            
         
            
          </div><!-- /.blog-post -->
        <?php endwhile;  ?> 
           
        <?php include_once("includes/footer.php"); ?>

          
