<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		body{
			font-family: 'Poppins', sans-serif;
		}
		.photo img{
			width: 150px;
			height: 100px;
		}
		hr.style-three {
    		border: 0;
    		border-bottom: 3px dashed Black;
    		background: #999;
		}
		.footer{
			text-transform: uppercase;
		}
	</style>
</head>
<body>
<?php include ('nav.php'); ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4" style="background: #f2eee3">
			<h1 class="text-center mt-3" style="color: #7a3b29;">Mini Grocery</h1>
			<p class="text-center"><i class="fa-sharp fa-solid fa-location-dot"></i> : N0.155, Main Street, Dawei. <i class="fa-sharp fa-solid fa-phone"></i>: 09450071565</p>
			<hr class="style-three">
			<p class="text-center">10/23/2022&#160;&#160;&#160;&#160;&#160;&#160;12:13:45 AM&#160;&#160;&#160;&#160;&#160;&#160;Cashier : Thaesu</p>

			<table class="table table-hover">
				<thead>
					<tr>
					<th>Item</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Amount</th>
				</tr>
				</thead>
				<tbody>
					<tr>
					<td>Choco stick</td>
					<td>3</td>
					<td>1500 kyats</td>
					<td>4500 kyats</td>
				</tr>
				<tr>
					<td>lemon Juice</td>
					<td>2</td>
					<td>3200 kyats</td>
					<td>6400 kyats</td>
				</tr>
				<tr>
					<td>Toothpaste</td>
					<td>1</td>
					<td>2000 kyats</td>
					<td>2000 kyats</td>
				</tr>
				<tr>
					<td>Palasta</td>
					<td>1</td>
					<td>700 kyats</td>
					<td>700 kyats</td>
				</tr>
				</tbody>
				<tfoot class="fw-bold footer">
					<tr>
      				<td class="text-center" colspan="3">Total</td>
      				<td>13600 kyats</td>
    			</tr>
    			<tr>
      				<td class="text-center" colspan="3">Cash</td>
      				<td>15000 kyats</td>
    			</tr>
    			<tr>
      				<td class="text-center" colspan="3">Change</td>
      				<td>1400 kyats</td>
    			</tr>
				</tfoot>
				
			</table>
			<p style="color: #7a3b29;"> Thank you for shopping with us.<i class="fa-sharp fa-solid fa-heart"></i></p>
		</div>




		<!------ show item ----- --->
		<div class="col-md-8">
			<div class="row photo px-3">
				<div class="col-md-3 my-2">
      			<div class="card">
        			<img src="img/snack.webp" class="card-img-top img-fluid" alt="...">
        			<div class="card-body">
           			<h5 class="card-title">Gap Biscuit Stick</h5>
              		<p class="card-text">2500 mmk</p>
              		<a href="#" class="btn btn-primary" style="border-radius: 20px">&#43; Add</a>
        			</div>
      			</div>
    			</div>

    			<div class="col-md-3 my-2">
      			<div class="card">
        			<img src="img/snack2.webp" class="card-img-top img-fluid" alt="...">
        			<div class="card-body">
           			<h5 class="card-title">Wafer Roll</h5>
              		<p class="card-text">4800 mmk</p>
              		<a href="#" class="btn btn-primary" style="border-radius: 20px">&#43; Add</a>
        			</div>
      			</div>
    			</div>

    			<div class="col-md-3 my-2">
      			<div class="card">
        			<img src="img/snack3.webp" class="card-img-top img-fluid" alt="...">
        			<div class="card-body">
           			<h5 class="card-title">Gums and Yums</h5>
              		<p class="card-text">3200 mmk</p>
              		<a href="#" class="btn btn-primary" style="border-radius: 20px">&#43; Add</a>
        			</div>
      			</div>
    			</div>

    			<div class="col-md-3 my-2">
      			<div class="card">
        			<img src="img/milk.webp" class="card-img-top img-fluid" alt="...">
        			<div class="card-body">
           			<h5 class="card-title">Latosoy</h5>
              		<p class="card-text">2700 mmk</p>
              		<a href="#" class="btn btn-primary" style="border-radius: 20px">&#43; Add</a>
        			</div>
      			</div>
    			</div>

    			<div class="col-md-3 my-2">
      			<div class="card">
        			<img src="img/wine.webp" class="card-img-top img-fluid" alt="...">
        			<div class="card-body">
           			<h5 class="card-title">Italy made red wine</h5>
              		<p class="card-text">2350 mmk</p>
              		<a href="#" class="btn btn-primary" style="border-radius: 20px">&#43; Add</a>
        			</div>
      			</div>
    			</div>

    			<div class="col-md-3 my-2">
      			<div class="card">
        			<img src="img/juice1.webp" class="card-img-top img-fluid" alt="...">
        			<div class="card-body">
           			<h5 class="card-title">French apple juice</h5>
              		<p class="card-text">500 mmk</p>
              		<a href="#" class="btn btn-primary" style="border-radius: 20px">&#43; Add</a>
        			</div>
      			</div>
    			</div>

    			<div class="col-md-3 my-2">
      			<div class="card">
        			<img src="img/medicine.webp" class="card-img-top img-fluid" alt="...">
        			<div class="card-body">
           			<h5 class="card-title">Palasta for everything</h5>
              		<p class="card-text">2500 mmk</p>
              		<a href="#" class="btn btn-primary" style="border-radius: 20px">&#43; Add</a>
        			</div>
      			</div>
    			</div>

    			<div class="col-md-3 my-2">
      			<div class="card">
        			<img src="img/other2.webp" class="card-img-top img-fluid" alt="...">
        			<div class="card-body">
           			<h5 class="card-title">toothpaste</h5>
              		<p class="card-text">2500 mmk</p>
              		<a href="#" class="btn btn-primary" style="border-radius: 20px">&#43; Add</a>
        			</div>
      			</div>
    			</div>

    			<div class="col-md-3 my-2">
      			<div class="card">
        			<img src="img/other3.webp" class="card-img-top img-fluid" alt="...">
        			<div class="card-body">
           			<h5 class="card-title">Shampoo</h5>
              		<p class="card-text">2500 mmk</p>
              		<a href="#" class="btn btn-primary" style="border-radius: 20px">&#43; Add</a>
        			</div>
      			</div>
    			</div>

    			<div class="col-md-3 my-2">
      			<div class="card">
        			<img src="img/cosmetic.webp" class="card-img-top img-fluid" alt="...">
        			<div class="card-body">
           			<h5 class="card-title">Personal care</h5>
              		<p class="card-text">2500 mmk</p>
              		<a href="#" class="btn btn-primary" style="border-radius: 20px">&#43; Add</a>
        			</div>
      			</div>
    			</div>

    			<div class="col-md-3 my-2">
      			<div class="card">
        			<img src="img/snack.webp" class="card-img-top img-fluid" alt="...">
        			<div class="card-body">
           			<h5 class="card-title">Gap Biscuit Stick</h5>
              		<p class="card-text">2500 mmk</p>
              		<a href="#" class="btn btn-primary" style="border-radius: 20px">&#43; Add</a>
        			</div>
      			</div>
    			</div>

    			<div class="col-md-3 my-2">
      			<div class="card">
        			<img src="img/snack.webp" class="card-img-top img-fluid" alt="...">
        			<div class="card-body">
           			<h5 class="card-title">Gap Biscuit Stick</h5>
              		<p class="card-text">2500 mmk</p>
              		<a href="#" class="btn btn-primary" style="border-radius: 20px">&#43; Add</a>
        			</div>
      			</div>
    			</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>