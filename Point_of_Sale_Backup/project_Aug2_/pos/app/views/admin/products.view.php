<div class="table-responsive">

    <table class="table table-striped table-hover">
        <tr>
            <th><i class="fa-solid fa-barcode"></i><b> Barcode</b></th>
            <th><i class="fa-solid fa-burger"></i><b> Products</b></th>
            <th><i class="fa-solid fa-scale-unbalanced-flip"></i><b> Qty</b></th>
            <th><i class="fa-regular fa-money-bill-1"></i><b> Price</b></th>
            <th><i class="fa-solid fa-image"></i><b> Image</b></th>
            <th><i class="fa-solid fa-calendar-days"></i><b> Date</b></th>
            <th>
                <a href="index.php?page_name=products-new">
                     <button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i><b> Add New</b></button>
                </a>
            </th>
        </tr>

        <?php if(!empty($products)): ?>
                <?php foreach($products as $product): ?>
            <tr>
                <td><b><?=esc($product['barcode'])?></b></td>
                <td>
                   <a class="flex nav-link text-black  p-2 mb-2 bg-info text-black col-7" href="index.php?page_name=productsingle&id=<?php $product['id']?>">
                   <i class="fa-solid fa-eye fa-fade"></i><b> <?=esc($product['description'])?></b>
                    </a>
                </td>
                <td><b><?=esc($product['qty'])?></b></td>
                <td><i class="fa-solid fa-indian-rupee-sign"><b></i> <?=esc($product['amount'])?></b></td>
                <td><img src="<?=crop($product['image'])?>" style="width:100%; max-width:100px;"></td>
                <td><b><?=date("jS , M , Y",strtotime($product['date']))?></b></td>
                <td>
                    <b><a href="index.php?page_name=product-edit&id=<?=$product['id']?>"></b>
                        <button class="btn btn-success btn-sm"><b><i class="fa-solid fa-pen-to-square"></i> Edit</b></button>
                    </a>
                    <a href="index.php?page_name=product-delete&id=<?=$product['id']?>">
                        <button class="btn btn-danger btn-sm"><b><i class="fa-solid fa-trash"></i> Delete</b></button>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>

</div>