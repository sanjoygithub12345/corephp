<?php 
include('include/header.php');
 ?>
 <form>
 	<div class="form-group">
 		 <label>requset info</label>
 		 <input type="text" name="request" class="form-control form-control-sm">
 	</div>
 	<div class="form-group">
 		 <label>description</label>
 		 <input type="text" name="description" class="form-control form-control-sm">
 	</div>
 	<div class="form-group">
 		 <label>name</label>
 		 <input type="text" name="name" class="form-control form-control-sm">
 	</div>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 			<label>address line 1</label>
 			<input type="text" name="address" class="form-control-sm form-control">
 			</div>
 		</div>
 		<div class="col-md-6">
 			<div class="form-group">
 			<label>address line 2</label>
 			<input type="text" name="address1" class="form-control-sm form-control">
 			</div>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 				<label>city</label>
 				<input type="text" class="form-control form-control-sm" name="city">
 			</div>
 		</div>
 		<div class="col-md-4">
 			<div class="form-group">
 				<label>state</label>
 				<input type="text" class="form-control-sm form-control" name="state">
 			</div>
 		</div>
 		<div class="col-md-2">
 			<div class="form-group">
 				<label>Zip</label>
 				<input type="text" class="form-control-sm form-control" name="zip">
 			</div>
 		</div>

 	</div>
 	<div class="row">
 		<div class="col-md-6">
 			<div class="form-group">
 				<label>email</label>
 				<input type="email" class="form-control form-control-sm" name="email">
 			</div>
 		</div>
 		<div class="col-md-4">
 			<div class="form-group">
 				<label>mobile</label>
 				<input type="text" class="form-control-sm form-control" name="state">
 			</div>
 		</div>
 		<div class="col-md-2">
 			<div class="form-group">
 				<label>date</label>
 				<input type="date" class="form-control-sm form-control" name="date">
 			</div>
 		</div>

 	</div>
 	<input type="submit" value="submit" name="submit" class="btn btn-primary mt-3">

 </form>
 <?php
include('include/footer.php');

?>