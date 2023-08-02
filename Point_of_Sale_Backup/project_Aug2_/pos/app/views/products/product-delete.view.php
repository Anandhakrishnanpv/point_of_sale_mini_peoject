<?php require views_path('partials/header');?>

<div class="container-fluid border rounded p-5 m-3 col-4 lg-4 mx-auto">
    <?php if (!empty($row)): ?>

        <form method="post" enctype="multipart/form-data">

            <center><h3 class="text-success"></i><b>Şpi¢ē r໐นtē</b></h3><br></center>	
            <div class="alert alert-danger text-center text-danger"><i class="fa-solid fa-trash-can fa-fade fa-lg" style="color: #f50000;"></i><b> Are You Sure Want to Delete the Product?</b></div>
            <div class="mb-3">
                <label for="productControlInput1" class="form-label"><b>Product description</b></label>
                <input disabled value="<?= set_value('description', $row['description']) ?>" name="description" type="text"
                    class="form-control <?= !empty($errors['description']) ? 'border-danger' : '' ?>"
                    id="productControlInput1" placeholder="Product description">
                <?php if (!empty($errors['description'])): ?>
                    <small class="text-danger"><?= $errors['description'] ?></small>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="barcodeControlInput1" class="form-label"><b>Barcode </b><small class="text-muted">(optional)</small></label>
                <input disabled value="<?= set_value('barcode', $row['barcode']) ?>" name="barcode" type="text"
                    class="form-control <?= !empty($errors['barcode']) ? 'border-danger' : '' ?>"
                    id="barcodeControlInput1" placeholder="Product barcode">
                <?php if (!empty($errors['barcode'])): ?>
                    <small class="text-danger"><?= $errors['barcode'] ?></small>
                <?php endif; ?>
            </div>
            <br>
            <img class="mx-auto d-block" src="<?= $row['image'] ?>" style="width:80%;">
            <br>
            <button class="btn btn-danger float-end"><i class="fa-solid fa-trash"></i><b> Delete</b></button>
            <a href="index.php?page_name=admin&tab=products">
                <button type="button" class="btn btn-success"><i class="fa-solid fa-ban"></i><b> Cancel</b></button>
            </a>
        </form>
    <?php else: ?>
        That product was not found
        <br><br>
        <a href="index.php?page_name=admin&tab=products">
            <button type="button" class="btn btn-primary">Back to products</button>
        </a> 

    <?php endif;?>
</div>

<?php require views_path('partials/footer');?>
