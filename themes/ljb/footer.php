	
    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">

			<?php

$args = [
	'theme_location'  => 'footer_left',
	'menu_class'      => 'list-unstyled footer-menu',
	'container'       => 'div',
	'container_class' => 'col-6 col-md-2',
];
//wp_nav_menu( $args );
$args = [
	'theme_location'  => 'footer_right',
	'menu_class'      => 'list-unstyled footer-menu',
	'container'       => 'div',
	'container_class' => 'col-6 col-md-2',
];
//wp_nav_menu( $args );
?>

              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="/contact/">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">Servicing Saratoga Springs & Surrounding Area</p>
            <p class="text-muted small mb-4 mb-lg-0">&copy; Louis Bronson Inc <?php echo date("Y"); ?>. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-facebook-f fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fab fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

   
	<?php wp_footer();?>	

  </body>

</html>