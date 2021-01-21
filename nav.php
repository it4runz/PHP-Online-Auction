<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Auction</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
		<?php
		if(isset($_SESSION['login']))
		{
			?>
		  <li class="nav-item">
            <a class="nav-link" href="add_product.php">Add Product</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="bidding.php">Start Bidding</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="view_bidding.php">View Bidding</a>
          </li>
          
			<li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
			<?php
		}
		else
		{
?>
<li class="nav-item">
<a class="nav-link" href="register.php">Register</a>
</li>
<li class="nav-item">
<a class="nav-link" href="login.php">Login</a>
</li>
<?php			
		}
		?>
          
		 
		  
       
          <!--<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Portfolio
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-col.php">1 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-2-col.php">2 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-3-col.php">3 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-4-col.php">4 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-item.php">Single Portfolio Item</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="blog-home-1.php">Blog Home 1</a>
              <a class="dropdown-item" href="blog-home-2.php">Blog Home 2</a>
              <a class="dropdown-item" href="blog-post.php">Blog Post</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Other Pages
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="full-width.php">Full Width Page</a>
              <a class="dropdown-item" href="sidebar.php">Sidebar Page</a>
              <a class="dropdown-item" href="faq.php">FAQ</a>
              <a class="dropdown-item" href="404.php">404</a>
              <a class="dropdown-item" href="pricing.php">Pricing Table</a>
            </div>
          </li>-->
        </ul>
      </div>
    </div>
  </nav>