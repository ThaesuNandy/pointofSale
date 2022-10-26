<?php include ('nav.php'); ?>
<link rel="stylesheet" type="text/css" href="formAndtablestyle.css">

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 " style="background:#f2eee3">
			<form class="px-3">
				<h5 class="modal-title fw-bold text-center py-2 my-4">Add Product</h5>
				<div class="mb-2 row">
			    <label class="col-sm-3 col-form-label">Brand Name</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control brand" required>
			    </div>
			  </div>
			  <div class="mb-2 row">
			    <label class="col-sm-3 col-form-label">Category</label>
			    <div class="col-sm-9 ">
			      <input type="text" class="form-control category" required>
			    </div>
			  </div>
			  <div class="mb-2 row">
			    <label class="col-sm-3 col-form-label">Supplier</label>
			    <div class="col-sm-9">
			      <select class="form-select select" aria-label="Default select example" required>
						  <option selected class="default_option">Choose Supplier</option>
						  <option value="1">U Aung Than</option>
						  <option value="2">Thailand Buyer</option>
						  <option value="3">Daw Aye Thuzar</option>
						</select>
			    </div>
			  </div>
			  <div class="mb-2 row">
			    <label class="col-sm-3 col-form-label">Received Date</label>
			    <div class="col-sm-9">
			      <input type="date" class="form-control Rdate" required>
			    </div>
			  </div>
			  <div class="mb-2 row">
			    <label class="col-sm-3 col-form-label">Expired Date</label>
			    <div class="col-sm-9">
			      <input type="date" class="form-control Edate" required>
			    </div>
			  </div>
			  <div class="mb-2 row">
			    <label class="col-sm-3 col-form-label">Original Price</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control Oprice" onkeyup="getProfit()" placeholder="mmk" required>
			    </div>
			  </div>
			  <div class="mb-2 row">
			    <label class="col-sm-3 col-form-label">Selling Price</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control Sprice"  onkeyup="getProfit()" placeholder="mmk" required>
			    </div>
			  </div>
			  <div class="mb-2 row">
			    <label class="col-sm-3 col-form-label">Profit</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control profit" value="" readonly>
			    </div>
			  </div>
			  <div class="mb-2 row">
			    <label class="col-sm-3 col-form-label">Quantity</label>
			    <div class="col-sm-9">
			      <input type="number" class="form-control qty" required>
			    </div>
			  </div>
			  <div class="mb-2 row">
			     <input type="file" name="photo" class="photo" required>
			  </div>
			  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
				  <button class="btn btn-outline-danger me-md-2" type="button" onclick="cancle()">Cancle</button>
				  <button class="btn btn-primary" type="submit">Add item</button>
				</div>
			</form>
			 
			<!--  Show Product list as Table -->
		</div>
		<div class="col-md-8">
			<h5 class="modal-title fw-bold text-center py-2 my-4">
			Product Lists</h5>
			<table class="table table-striped table-hover shadow-lg">
				<tr>
					<th>Id</th>
					<th>Brand Name</th>
					<th>Image</th>
					<th>Category</th>
					<th>Supplier</th>
					<th>Received Date</th>
					<th>Expired Date</th>
					<th>Original Price</th>
					<th>Selling Price</th>
					<th>Quantity</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<tr>
					<td>1</td>
					<td>Tazo</td>
					<td><img src="img/snack.webp" class="img-fluid"></td>
					<td>Snacks</td>
					<td>Thai Buyer</td>
					<td>10/24/2022</td>
					<td>10/24/2024</td>
					<td>2500</td>
					<td>3000</td>
					<td>20</td>
					<td><a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
					<td><a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Tazo</td>
					<td><img src="img/snack.webp" class="img-fluid"></td>
					<td>Snacks</td>
					<td>Thai Buyer</td>
					<td>10/24/2022</td>
					<td>10/24/2024</td>
					<td>2500</td>
					<td>3000</td>
					<td>20</td>
					<td><a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
					<td><a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
				</tr><tr>
					<td>1</td>
					<td>Tazo</td>
					<td><img src="img/snack.webp" class="img-fluid"></td>
					<td>Snacks</td>
					<td>Thai Buyer</td>
					<td>10/24/2022</td>
					<td>10/24/2024</td>
					<td>2500</td>
					<td>3000</td>
					<td>20</td>
					<td><a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
					<td><a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
				</tr><tr>
					<td>1</td>
					<td>Tazo</td>
					<td><img src="img/snack.webp" class="img-fluid"></td>
					<td>Snacks</td>
					<td>Thai Buyer</td>
					<td>10/24/2022</td>
					<td>10/24/2024</td>
					<td>2500</td>
					<td>3000</td>
					<td>20</td>
					<td><a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
					<td><a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
				</tr>
				
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	function cancle(){
		$('.brand').val("");
		$('.category').val("");
		$('.select').val($('.default_option').val());
		$('.Rdate').val("");
		$('.Edate').val("");
		$('.Oprice').val("");
		$('.Sprice').val("");
		$('.profit').val("");
		$('.qty').val("");
		$('.photo').val("");
	}
	function getProfit(){
		var tempOrigin= $('.Oprice').val();
		var tempSelling= $('.Sprice').val();
		var result= parseInt(tempSelling) - parseInt(tempOrigin);
		if(!isNaN(result)){
			$('.profit').val(result);
		}
	}
</script>
