<DOCTYPE html>
        <head>
                <title>My pos</title>
        </head>
<?php require views_path('partials/header'); ?>

        <!-- product session-->
        <div class=" d-flex">
                <div style="height:900px;" class="shadow-sm col-7 p-4">

             
                <div class="input-group mb-3"><h3><strong>Items </strong></h3>       
                 <input type="text" class="ms-4 form-control" placeholder="Search" aria-label="Search" aria-description="basic-addon1" autofocus>
                 <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                </div>
                <div class="js-products d-flex" style=" flex-wrap:wrap; height:90%; overflow-y:scroll;">

                           <!--card,items in the page-->
                           <div class="card m-2 border-0" style="min-width: 230px; max-width: 230px">
                        <a href="#">
                                <img src="assets/images/biriyani2.jpg" class="w-100 rounded border">
                                </a>
                                <div class="p-2" style="font-size: 20px">
                                  <div class="text-muted">BIRIYANI</div>
                                  <div class=""><b>₹180.00</b></div>
                                </div>
                        </div>
                          <!-- end card,items in the page-->

                            <!--card,items in the page-->
                        <div class="card m-2 border-0" style="min-width: 230px;  max-width: 230px">
                        <a href="#">
                                <img src="assets/images/biriyani.jpeg" class="w-100 rounded border">
                                </a>
                                <div class="p-2" style="font-size: 20px">
                                  <div class="text-muted">SALAD</div>
                                  <div class=""><b>₹280.50</b></div>
                                </div>
                        </div>
                          <!-- end card,items in the page-->
                          
                          
                          
                </div>

        </div>
                <div class="col-5 bg-light p-4 pt-2">
                        <!--cart session -->
                        <div><center><h3><i class="fa-solid fa-pizza-slice fa-lg"></i></i><strong> Cart </strong><div class="badge bg-primary rounded-circle">3</div></h3></center></div>

                        <div class="table-responsive" style="height:600px; overflow-y: scroll;">
                                <table class="table table-striped table-hover">
                                        <tr>
                                                <th><i class="fa-solid fa-image"></i><strong> Image</strong></th>
                                                <th><i class="fa-sharp fa-solid fa-clipboard"></i><strong> Descriptiom</strong></th>
                                                <th><i class="fa-solid fa-money-bill-wave"></i><strong> Amount</strong></th>
                                        </tr>
                                        <!--item,items in the page-->
                                        <tr>
                                        <td style="width:110px"> <img src="assets/images/biriyani2.jpg" class="rounded border" style="width:100px; height:100px"> </td>
                                        <td class="text-primary">
                                               <strong>BIRIYANI</strong>
                                                <div class="input-group my-3" style="max-width:150px">
                                                <div class="input-group-prepend">
                                                
                                                </div>
                                                <span class="input-group-text" style="cursor:pointer"><i class="fa fa-minus text-primary"></i></span>
                                                <input type="text" class="form-control text-primary" placeholder="1" value="1">
                                                <span class="input-group-text" style="cursor:pointer"><i class="fa fa-plus text-primary"></i></span>
                                                </div>
                                                
                                        </td>
                                        <td style="font-size: 20px"><b>₹180.00</b></td>
                                        </tr>
                                <!-- end item,items in the page-->
                                
                                </table>
                        </div>
                        <div class="alert alert-info" style="font-size:25px"><i class="fa-solid fa-coins fa-xl"></i><strong> Total: ₹180.00</strong></div>
                        <div class="">
                             <button class=" btn btn-success my-2 w-100 py-3"><i class="fa-solid fa-cart-shopping fa-lg"></i><strong> Checkout </strong></button>
                             <button class=" btn btn-primary my-3 w-100 py-3"><i class="fa-solid fa-xmark fa-xl"></i><strong> Clear All </strong></button>  
                        </div>
                </div>
        </div>
        
        </div>
        <?php require views_path('partials/footer');?>