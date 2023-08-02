<?php require views_path('partials/header');?>

	<div class="container-fluid border rounded p-5 m-2 col-lg-4 mx-auto">
        <?php if(!empty($row)):?>

		<form method="post" enctype="multipart/form-data">

		<center><h3 class="text-success"></i><b>Şpi¢ē r໐นtē</b></h3><br></center>	
			
			<div class="mb-3">
			<div class="alert alert-success text-center text-success"><i class="fa-solid fa-pen-to-square fa-fade" style="color: #00661a;"></i><b> Edit product</b></div> 
			  <label for="productControlInput1" class="form-label"><b>Product description</b></label>
			  <input value="<?=set_value('description',$row['description'])?>" name="description" type="text" class="form-control <?=!empty($errors['description']) ? 'border-danger':''?>" id="productControlInput1" placeholder="Product description">
			  <?php if(!empty($errors['description'])):?>
					<small class="text-danger"><?=$errors['description']?></small>
				<?php endif;?>
			</div>
			
			<div class="mb-3">
			  <label for="barcodeControlInput1" class="form-label"><b>Barcode </b><small class="text-muted">(optional)</small></label>
			  <input value="<?=set_value('barcode',$row['barcode'])?>" name="barcode" type="text" class="form-control <?=!empty($errors['barcode']) ? 'border-danger':''?>" id="barcodeControlInput1" placeholder="Product barcode">
			  <?php if(!empty($errors['barcode'])):?>
					<small class="text-danger"><?=$errors['barcode']?></small>
				<?php endif;?>
			</div>

			<div class="input-group mb-3">
			  <span class="input-group-text"><b>Qty:</b></span>
			  <input name="qty" value="<?=set_value('qty',$row['qty'])?>" type="number" class="form-control <?=!empty($errors['qty']) ? 'border-danger':''?>" placeholder="Quantity" aria-label="Quantity">
			  <span class="input-group-text"><b>Amount:</b></span>
			  <input name="amount" value="<?=set_value('amount',$row['amount'])?>" step="0.05" type="number" class="form-control <?=!empty($errors['amount']) ? 'border-danger':''?>" placeholder="Amount" aria-label="Amount">
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
				<img class="mx-auto d-block" src="<?=$row['image']?>" style="width:80%;">
			<br>
			<button class="btn btn-success float-end"><i class="fa-solid fa-floppy-disk"></i><b> Save</b></button>
			<a href="index.php?page_name=admin&tab=products">
				<button type="button" class="btn btn-primary"><i class="fa-solid fa-ban"></i><b> Cancel</b></button>
			</a>
		</form>
		<?php else: ?>
			<b  class="text text-danger">That product was not found</b>
		<br><br>
		<a href="index.php?page_name=admin&tab=products">
			<button type="button" class="btn btn-primary"><b>Back to products</b></button>
		</a> 


        <?php endif;?>
	</div>

<?php require views_path('partials/footer');?>