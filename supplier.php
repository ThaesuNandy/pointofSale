<?php include ('nav.php'); ?>
<link rel="stylesheet" type="text/css" href="formAndtablestyle.css">

<div class="container-fluid" >
	<div class="row">
		<div class="col-md-4 " style="background:#f2eee3">
			
			<form class="px-3">
				<h5 class="modal-title fw-bold text-center py-2 my-4">Add Supplier</h5>
				<div class="mb-2 row ">
			    <label class="col-sm-4 col-form-label">Supplier Name</label>
			    <div class="col-sm-8">
			      <input type="text" class="form-control supplier" required>
			    </div>
			  </div>
			  <div class="mb-2 row">
			    <label class="col-sm-4 col-form-label">Contact Person</label>
			    <div class="col-sm-8 ">
			      <input type="text" class="form-control contact" required>
			    </div>
			  </div>
			  <div class="mb-2 row">
			    <label class="col-sm-4 col-form-label">Phone Number</label>
			    <div class="col-sm-8 ">
			     <input type="number" class="form-control phone" required>
			    </div>
			  </div>
			  <div class="mb-2 row">
			    <label class="col-sm-4 col-form-label">Address</label>
			    <div class="col-sm-8 ">
			      <textarea class="form-control address" rows="3" name=""></textarea>
			    </div>
			  </div>
			  <div class="mb-2 row">
			    <label class="col-sm-4 col-form-label">Description (optional)</label>
			    <div class="col-sm-8 ">
			    	<textarea class="form-control description" rows="3" name=""></textarea>
			    </div>
			  </div>
			  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
				  <button class="btn btn-outline-danger me-md-2" type="button" onclick="cancle()">Cancle</button>
				  <button class="btn btn-primary" type="submit"><i class="fa-regular fa-floppy-disk"></i> Save</button>
				</div>
			</form>
			 
			<!--  Show Product list as Table -->
		</div>
		<div class="col-md-8">
			<h5 class="modal-title fw-bold text-center py-2 my-4">
			Product Lists</h5>
			<table class="table table-striped table-hover shadow-lg ">
				<tr>
					<th>Id</th>
					<th>Supplier</th>
					<th>Contact Person</th>
					<th>Phone Number</th>
					<th>Address</th>
					<th>Description</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<tr>
					<td>1</td>
					<td>Thai Buyer</td>
					<td>U Aung Naing</td>
					<td>09450071676</td>
					<td>Bangkok,Thailand</td>
					<td>Snacks and Drinks Imported, Royal Supplier</td>
					<td><a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
					<td><a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Thai Buyer</td>
					<td>U Aung Naing</td>
					<td>09450071676</td>
					<td>24th, between 81st and 82nd street, Mandalay</td>
					<td>Snacks and Drinks Imported, Royal Supplier</td>
					<td><a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
					<td><a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Thai Buyer</td>
					<td>U Aung Naing</td>
					<td>09450071676</td>
					<td>Bangkok,Thailand</td>
					<td>Snacks and Drinks Imported, Royal Supplier</td>
					<td><a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
					<td><a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Thai Buyer</td>
					<td>U Aung Naing</td>
					<td>09450071676</td>
					<td>Bangkok,Thailand</td>
					<td>Snacks and Drinks Imported, Royal Supplier Royal Supplier</td>
					<td><a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
					<td><a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Thai Buyer</td>
					<td>U Aung Naing</td>
					<td>09450071676</td>
					<td>Bangkok,Thailand</td>
					<td>Snacks and Drinks Imported, Royal Supplier</td>
					<td><a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
					<td><a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Thai Buyer</td>
					<td>U Aung Naing</td>
					<td>09450071676</td>
					<td>24th, between 81st and 82nd street, Mandalay</td>
					<td>Snacks and Drinks Imported, Royal Supplier</td>
					<td><a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
					<td><a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Thai Buyer</td>
					<td>U Aung Naing</td>
					<td>09450071676</td>
					<td>Bangkok,Thailand</td>
					<td>Snacks and Drinks Imported, Royal Supplier</td>
					<td><a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
					<td><a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Thai Buyer</td>
					<td>U Aung Naing</td>
					<td>09450071676</td>
					<td>Bangkok,Thailand</td>
					<td>Snacks and Drinks Imported, Royal Supplier Royal Supplier</td>
					<td><a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
					<td><a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
				</tr>
				<tr>
					<td>1</td>
					<td>Thai Buyer</td>
					<td>U Aung Naing</td>
					<td>09450071676</td>
					<td>Bangkok,Thailand</td>
					<td>Snacks and Drinks Imported, Royal Supplier Royal Supplier</td>
					<td><a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
					<td><a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
				</tr>
				
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	function cancle(){
		$('.supplier').val("");
		$('.contact').val("");
		$('.phone').val("");
		$('.address').val("");
		$('.description').val("");
	}
</script>