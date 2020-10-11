<?php

include_once("libs/config.php");
include_once("libs/function.php");

$select=new data();


if(isset($_GET['id'])){

$id = $_GET['id'];    

$query="select*from post where id='$id' ";

$post = $select->select($query);
$row=$post->fetch_array();






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

   
    
    
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    

   
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

        <div class="col-xs-12 blog-main">
            
            
            
            

            

          <div class="blog-post">
              <h2 class="blog-post-title"><b><?php echo $row['title'];?></b></h2>
            <p class="blog-post-meta"><?php echo formateDate($row['date']);?> <a href="#"><?php echo $row['author'];?></a></p>

            <p><?php echo $row['content'];?></p>
            
            
         
            
          </div><!-- /.blog-post -->

         
          

<!-- Footer section -->
        </div><!-- /.blog-main -->

        

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>





