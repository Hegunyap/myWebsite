</div><!-- /.container -->

    <footer class="blog-footer">
      <p>&#169; by Hegun</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $( 'nav a' ).on( 'click', function() {
      e.preventDefault();
      // alert('clicked');
      console.log($( this ).parent().find('a'));
      
      $('a').removeClass( 'active' );
      $( this ).addClass( 'active' );

      // return false;
    });
    </script>
    <?php wp_footer(); ?>
  </body>
</html>