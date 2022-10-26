<?php include ("cdn.php");?>
<?php include ('modal.php'); ?>
<style type="text/css">
  .navbar{
    background: #7a3b29;
  }
  .navbar a{
    color: #f2eee3;
    text-transform: uppercase;
     font-family: 'Poppins', sans-serif;
  }
  .search_input{
    width: 400px;
    border:none;
    outline: none; 
    border-bottom: 1px solid #aaa;
    background: #7a3b29;
    color: white;
  }
</style>

<nav class="navbar sticky-top navbar-light" id="navbarSupportedContent">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="home.php">Mini Grocery</a>
    <li class="nav-item dropdown" style="list-style: none;">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Product Category</a>
      <ul class="dropdown-menu bg-dark">
      <li><a class="dropdown-item" href="#">Snacks</a></li>
      <li><a class="dropdown-item" href="#">Sweets and Candy</a></li>
      <li><a class="dropdown-item" href="#">Drinks</a></li>
      <li><a class="dropdown-item" href="#">Cosmetics</a></li>
      <li><a class="dropdown-item" href="#">Personal Care</a></li>
      <li><a class="dropdown-item" href="#">Others</a></li>
      </ul>
    </li>
     <a class="nav-link active" aria-current="page" href="product.php">Products</a>
      <a class="nav-link" href="supplier.php">Supplier</a>
      <a class="nav-link" href="#">Transaction</a>
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link text-white">
          <input type="text" name="" value="" id="" placeholder="Search Anything..." class="mr-2 py-2 search_input" autocomplete="off"/>
          <i class="fa-solid fa-magnifying-glass"></i></a>
      </li>
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#" >
      <img src="img/22.1.jpg" class="rounded-circle mr-1" width="30px;" height="30px;">
    Admin</a>
   </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
      <i class="fa-solid fa-screwdriver-wrench"></i>
    Setting
    </a>
    <ul class="dropdown-menu bg-dark">
      <li><a class="dropdown-item nav-link" href="#">Add user</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php"><i class="fa-solid fa-power-off"></i>Log out</a>
  </li>
</ul>
  </div>
</nav>
<script type="text/javascript">
  $('.search_input').change(function(){
   $('#search_Modal').modal('show');
})
</script>

