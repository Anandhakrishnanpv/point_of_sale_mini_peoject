<div class="table-responsive">

    <table class="table table-striped table-hover">
        <tr>
            <th>Barcode</th>
            <th>Products</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Image</th>
            <th>Date</th>
            <th>
                <a href="index.php?page_name=products-new">
                     <button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</button>
                </a>
            </th>
        </tr>

        <?php if(!empty($products)): ?>
                <?php foreach($products as $product): ?>
            <tr>
                <td><?=esc($product['barcode'])?></td>
                <td>
                   <a class="flex nav-link text-black  p-2 mb-2 bg-info text-black col-7" href="index.php?page_name=productsingle&id=<?php $product['id']?>">
                   <i class="fa-solid fa-eye fa-fade"></i><b> <?=esc($product['description'])?></b>
                    </a>
                </td>
                <td><?=esc($product['qty'])?></td>
                <td><?=esc($product['amount'])?></td>
                <td><img src="<?=esc($product['image'])?>" style="width:100%; max-width:100px;"></td>
                <td><?=date("j, M, Y",strtotime($product['date']))?></td>
                <td>
                    <a href="index.php?page_name=product-edit&id=<?=$product['id']?>">
                        <button class="btn btn-success btn-sm">Edit</button>
                    </a>
                    <a href="index.php?page_name=product-delete&id=<?=$product['id']?>">
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>

</div>