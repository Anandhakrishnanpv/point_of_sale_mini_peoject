<?php require views_path('partials/header');?>

	<div class="container-fluid border rounded p-5 m-5 col-3 lg-4 mx-auto">

		<form method="post" enctype="multipart/form-data">

		<center><h3 class="text-success"></i><b>Şpi¢ē r໐นtē</b></h3><br></center>	
			
			<div class="mb-3">
			<div class="alert alert-success text-center text-success"><i class="fa-solid fa-cart-plus fa-beat-fade" style="color: #007508;"></i><b> Add product</b></div>    
			  <label for="productControlInput1" class="form-label"><b>Product description</b></label>
			  <input name="description" type="text" class="form-control <?=!empty($errors['description']) ? 'border-danger':''?>" id="productControlInput1" placeholder="Product description">
			  <?php if(!empty($errors['description'])):?>
					<small class="text-danger"><?=$errors['description']?></small>
				<?php endif;?>
			</div>
			
			<div class="mb-3">
			  <label for="barcodeControlInput1" class="form-label"><b>Barcode </b><small class="text-muted">(optional)</small></label>
			  <input name="barcode" type="text" class="form-control <?=!empty($errors['barcode']) ? 'border-danger':''?>" id="barcodeControlInput1" placeholder="Product barcode">
			  <?php if(!empty($errors['barcode'])):?>
					<small class="text-danger"><?=$errors['barcode']?></small>
				<?php endif;?>
			</div>

			<div class="input-group mb-3">
			  <span class="input-group-text"><b>Qty:</b></span>
			  <input name="qty" value="1" type="number" class="form-control <?=!empty($errors['qty']) ? 'border-danger':''?>" placeholder="Quantity" aria-label="Quantity">
			  <span class="input-group-text"><b>Amount:</b></span>
			  <input name="amount" value="0.00" step="0.05" type="number" class="form-control <?=!empty($errors['amount']) ? 'border-danger':''?>" placeholder="Amount" aria-label="Amount">
			</div>
				<?php if(!empty($errors['qty'])):?>
					<small class="text-danger"><?=$errors['qty']?></small>
				<?php endif;?>
				<?php if(!empty($errors['amount'])):?>
					<small class="text-danger"><?=$errors['amount']?></small>
				<?php endif;?>
				<br>
			<div class="mb-3">
			  <label for="formFile" class="form-label"><b>Product Image</b></label>
			  <input name="image" class="form-control <?=!empty($errors['image']) ? 'border-danger':''?>" type="file" id="formFile">
			  <?php if(!empty($errors['image'])):?>
					<small class="text-danger"><?=$errors['image']?></small>
				<?php endif;?>
			</div>

			<br>
			<button class="btn btn-success float-end"><i class="fa-solid fa-floppy-disk"></i><b> Save</b></button>
			<a href="index.php?page_name=admin&tab=products">
				<button type="button" class="btn btn-danger"><i class="fa-solid fa-ban"></i><b> Cancel</b></button>
			</a>
		</form>
	</div>

<?php require views_path('partials/footer');?>