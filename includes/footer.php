<?php



//Footer.php file use for index.php file on footer section

$query="select * from categories ";

$cats= $select->select($query);

 
?>


         
          


        </div><!-- /.blog-main -->

        <div class="col-sm-1 col-sm-offset-1 blog-sidebar">
          
          <div class="sidebar-module">
              
            
            <h4>Categories</h4>
            <ol class="list-unstyled">
                
            <?php while ($row=$cats->fetch_array()): ?>    
                
              <li><a href="category.php?id=<?php echo $row['category_id']; ?>"><?php echo $row['title'];?></a></li>
              
              <?php endwhile;  ?>
              
            </ol>
          </div>
        <!--<div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled" >
              <li><a href="https://github.com/">GitHub</a></li>
              <li><a href="https://twitter.com/">Twitter</a></li>
              <li><a href="https://facebook.com/">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      <!--</div><!-- /.row -->

    <!--</div><!-- /.container -->

    <!--<footer class="blog-footer">
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

