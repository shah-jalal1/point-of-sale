<?php
include "header.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2>Manage Products</h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i>Homepage</a></li>
                        <li class="breadcrumb-item active">Manage Products</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>





    <!-- Main content -->
    <section class="content">

        <div class="card">
            <div class="card-header">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddProduct">
                    Add Product
                </button>
            </div>


            <div class="card-body">

                <div class="box">

                    <table class="table table-bordered table-striped table-responsive-sm mydatatable">      <!-- dt resposinve is from datatable-->

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Code</th>
                            <th>description</th>
                            <th>Category</th>
                            <th>Stock</th>
                            <th>Buying Price</th>
                            <th>Sell Price</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="dist/img/products/aspirador-industrial.png" alt="" class="img-thumbnail" width="50px"></td>
                            <td>0001</td>
                            <td>lorem ipsseml</td>
                            <td>Adminastrator</td>
                            <td>lorem ipsf</td>
                            <td>20</td>
                            <td>5.00</td>
                            <td>10.00</td>
                            <td>2020-11-12 12:05:32</td>
                            <td>

                                <div class="btn-group">

                                    <button class="btn btn-warning"><i class="fa fa-pen"></i></button>

                                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                                </div>

                            </td>
                        </tr>

                        </tbody>

                    </table>


                </div>

            </div>

        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<!--====================================================================================================-->
<!--                                        Modal Add Products              -->
<!--==================================================================================================== -->



<!-- Modal -->
<div id="modalAddProduct" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">


            <!--====================================================================================================-->
            <!--                                        Modal Header            -->
            <!--==================================================================================================== -->

            <div class="modal-header" style="background: #3c8dbc; color: white;">

                <h4 class="modal-title">Add Products</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!--====================================================================================================-->
            <!--                                        Modal Body          -->
            <!--==================================================================================================== -->

            <div class="modal-body">

                <div class="box-body">
                    <form action="" method="post" >

                        <!--                    ENTRY FOR CODE-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-code"></i></span>
                                </div>
                                <input type="text" class="form-control input-lg" name="newCode" placeholder="Add Code" required>
                            </div>

                        </div>

                        <!--                    ENTRY FOR Descripton-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-product-hunt"></i></span>
                                </div>
                                <input type="text" class="form-control input-lg" name="newDescription" placeholder="Add Description" required>
                            </div>

                        </div>


                        <!--                    Check category-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-th"></i></span>
                                </div>
                                <select class="form-control input-lg" name="newCategory">

                                    <option value="">Select Category</option>
                                    <option value="CONSTRUCTION EQUIPMENT">Adminastrator</option>
                                    <option value="Drill">Special</option>
                                    <option value="POWER GENERATORS">Seller</option>

                                </select>
                            </div>

                        </div>

                        <!--                    INPUT FOR STOCK-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-check"></i></span>
                                </div>
                                <input type="number" class="form-control input-lg" name="newStock" min="0" placeholder="Stock" required>
                            </div>

                        </div>







                        <!-- INPUT BUYING PRICE -->
                        <div class="form-group row">

                            <div class="col-xs-6">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>

                                    <input type="number" class="form-control input-lg" name="newBuyingPrice" min="0" placeholder="Buying Price" required>

                                </div>

                            </div>

                            <!-- INPUT SELLING PRICE -->
                            <div class="col-xs-6">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>

                                    <input type="number" class="form-control input-lg" name="newSellingPrice" min="0" placeholder="Selling Price" required>

                                </div>

                                <br>

                                <!-- CHECKBOX PERCENTAGE -->
                                <div class="col-xs-6">

                                    <div class="form-group">

                                        <label>

                                            <input type="checkbox" class="minimal percentage" checked>

                                            Use percentage

                                        </label>

                                    </div>

                                </div>

                                <!-- INPUT PERCENTAGE -->
                                <div class="col-xs-6" style="padding:0">

                                    <div class="input-group">

                                        <input type="number" class="form-control input-lg newPercentage" min="0" value="40" required>

                                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!--                    ENTRY FOR PICTURE-->

                        <div class="form-group">

                            <div class="panel">Upload Image</div>

                            <input type="file" id="newProductImage " name="newProductImage">

                            <p class="help-block">Maximum picture size 2MB </p>

                            <img src="dist/img/user/avatar.png" class="img-thumbnail" width="100px">

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="saveProducts">Save Products</button>
                        </div>

                    </form>



                </div>

            </div>


        </div>

    </div>
</div>







<!--====================================================================================================-->
<!--                                        Modal Add User End             -->
<!--==================================================================================================== -->




<!--====================================================================================================-->
<!--                                        Modal Add User End             -->
<!--==================================================================================================== -->




<!-- Modal -->



<?php
include "footer.php";
?>





<tbody>

<?php

include "connection.php";

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);

$count = 0;


while ($row = mysqli_fetch_assoc($result)){
    $count++;
    ?>

    <tr>
        <td><?= $count ?></td>
        <td><img src="dist/img/products/aspirador-industrial.png" alt="" class="img-thumbnail" width="50px"></td>
        <td><?= $row['code'] ?></td>
        <td><?= $row['description'] ?></td>
        <td>Adminastrator</td>
        <td><?= $row['stock'] ?></td>
        <td><?= $row['buying_price'] ?></td>
        <td><?= $row['selling_price'] ?></td>
        <td><?= $row['sales'] ?></td>
        <td><?= $row['date'] ?></td>
        <td>

            <div class="btn-group">

                <button class="btn btn-warning"><i class="fa fa-pen"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>


            </div>

        </td>
    </tr>

    <?php
}
?>

</tbody>


