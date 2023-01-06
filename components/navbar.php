<!-- Navbar with company Logo -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Logo -->
  <a class="navbar-brand" href="#">
  <img src="images/logo.png" width="100" height="60" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="toggle-menu-txt">Menu</span>  
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Products
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="items.php">Crochet Items</a>
            <a class="dropdown-item" href="patterns.php">Crochet Patterns</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
        </li>
    </ul>
    <!-- search bar
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    -->
    <ul class="navbar-nav">
        <li class="nav-item mx-2"> <a class="nav-link" href="login.php"><i class="fa-solid fa-user"></i></a></li>
        <li class="nav-item mx-2"> <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a> </li>
    </ul>
    </div>
</nav>