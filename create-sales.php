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
                    <h2>Create Sales</h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i>Homepage</a></li>
                        <li class="breadcrumb-item active">Create Sales</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>




    <section class="content">

        <div class="row">
            <div class="col-lg-5 col-xs-12">

                <div class="card card-success">
                    <div class="card-header with-border"></div>

                        <div class="card-body">

                            <form action="" method="post">

                                <div class="box-body">
                                    <form action="" method="post" >

                                        <!--====================================================================================================-->
                                        <!--               Seller Input          -->
                                        <!--==================================================================================================== -->

                                        <div class="form-group">

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="newSale" name="newSale" value="User Adminastrator" readonly>
                                            </div>

                                        </div>

                                    <!--=============================================================-->
                                    <!--               Seller Input          -->
                                    <!--============================================================= -->

                                        <div class="form-group">

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="newSale" name="newSale" value="120444" readonly>

                                            </div>

                                        </div>

                                        <!--==========================================================-->
                                        <!--               Customer Input          -->
                                        <!--========================================================== -->

                                        <div class="form-group">

                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <select name="selectClient" id="selectClient" class="form-control" required>

                                                    <option value=""> Selct Client</option>

                                                </select>

                                                <div><span class="input-group"><button type="button" class="btn btn-default" data-toggle="modal"
                                                                                       data-target="#modalAddClient" data-dismiss="modal">Add Client</button></span></div>

                                            </div>

                                        </div>

                                        <!--=================================================================== -->
                                        <!--                     Input to add Product        -->
                                        <!--=================================================================== -->


                                        <div class="form-group row newProduct">

<!--                                            DESCRIPTION OF THE PRODUCT-->

                                            <div class="col-xs-6" style="padding-right: 0px">

                                                <div class="input-group">

                                                    <div>
                                                        <span class="input-group-append"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button>

                                                        <input type="text" class="form-control" id="addProduct" name="addProduct" placeholder="Product Description" required>

                                                        </span></div>
                                                    </div>

                                            </div>

<!--                                            PRODUCT QUANTITY-->

                                            <div class="col-3">

                                                <input type="number" class="form-control" id="newProduct" name="newProduct" min="1" placeholder="0" required>

                                            </div>

<!--                                            PRODUCT PRICE-->

                                            <div class="col-xs-6" style="padding-right: 0px">

                                                <div class="input-group-append">

                                                    <div>
<!--                                                        <span class="input-group-append">-->
                                                        <input type="number" min="1" class="form-control" id="newPriceProduct" name="newPriceProduct" placeholder="000000" required>
<!--                                                            <span class="input-group-text"><i class="fas fa-usd"><p>&dollar;</p></i></span></span>-->
                                                </div>

                                            </div>

                                        </div>


<!--                                            <button type="button" class="btn btn-default d-lg-none d-xl-block">Add Product</button>-->

                                            <div class="row">

                                                <hr>

                                                <!--=================================================================== -->
                                                <!--                     Tax and Total Price        -->
                                                <!--=================================================================== -->

                                                <div class="col-sm-8 pull-right">

                                                    <table class="table">

                                                        <thead>

                                                        <tr>
                                                            <th>Tax</th>
                                                            <th>Total</th>
                                                        </tr>

                                                        </thead>

                                                        <tbody>

                                                        <tr>

                                                            <td style="width: 50%">

                                                                <div class="input-group">

                                                                    <input type="number" class="form-control" min="0" id="taxPrice" name="taxPrice"
                                                                    placeholder="0" required>



                                                                </div>

                                                            </td>

                                                            <td style="width: 50%">

                                                                <div class="input-group">

                                                                    <input type="number" class="form-control" min="0" id="newTotalPrice" name="newTotalPrice"
                                                                           placeholder="0000" readonly required>

                                                                    <span class="input-group-append"><i><p>&dollar;</p></i></span>
<!--                                                                    <span class="input-group-append"><i class=""></i></span>-->

                                                                </div>

                                                            </td>

                                                        </tr>

                                                        </tbody>

                                                    </table>


                                                </div>


                                            </div>

                                </div>
                                        <hr>

                                        <!--=================================================================== -->
                                        <!--                     Payment Method        -->
                                        <!--=================================================================== -->

                                        <div class="form-group row">

                                            <div class="col-6" style="padding-left: 0px">

                                                <div class="input-group">

                                                    <select class="form-control" name="methodPayent" id="methodPayent" required>

                                                        <option value="">Select</option>
                                                        <option value="">Cash</option>
                                                        <option value="">Credi Card</option>
                                                        <option value="">Debit Card</option>

                                                    </select>

                                                </div>

                                            </div>


                                            <div class="col-6" style="padding-right: 0px">

                                                <div class="input-group">

<!--                                                    <div>-->

<!--                                                        <span class="input-group-prepend"><input type="text" class="form-control" id="newTransactionCode" name="newTransactionCode"-->
<!--                                                                                                 placeholder="Transaction Code" required>-->
<!---->
<!--                                                        <span class="input-group-append"><i class="fa fa-lock"></i></span></span>-->

                                                    <div >
                                                        <input type="text" class="form-control" id="newTransactionCode" name="newTransactionCode" placeholder="Transaction Code" required>
                                                    </div>

                                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                                    </div>



<!--                                                    </div>-->

                                                </div>

                                            </div>


                                        </div>

                                <div class="small-box-footer">

                                    <button type="button" class="btn btn-primary" name="saveSale">Save Sale</button>

                                </div>

                            </form>

                            <?php
                                include_once "controllers/testController.php";
                            ?>

                        </div>


                </div>

            </div>

            <div class="col-lg-7 hidden-md hidden-sm hidden-xs">

                <div class="card card-warning">
                    <div class="card-header">

                    </div>


                    <div class="card-body">

                        <div class="box">

                            <table class="table table-bordered table-striped table-responsive-sm mydatatable">      <!-- dt resposinve is from datatable-->

                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Image</th>
                                    <th>Code</th>
                                    <th>Description</th>
                                    <th>Stock</th>
                                    <th>Actionins</th>
                                </tr>
                                </thead>

                                <tbody>

                                <tr>
                                    <td>1</td>
                                    <td><img src="dist/img/n/aspirador-industrial.png" class="img-thumbnail" width="50px"></td>
                                    <td>00123</td>
                                    <td>lorem ipsam dolor sit</td>
                                    <td>20</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary">Add</button>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>

                            </table>


                        </div>

                    </div>

                </div>


            </div>

        </div>

    </section>

</div>



<!--====================================================================================================-->
<!--                                        Modal Add Category              -->
<!--==================================================================================================== -->

<!-- Modal -->
<!-- Modal -->
<div id="modalAddClient" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">


            <!--====================================================================================================-->
            <!--                                        Modal Header            -->
            <!--==================================================================================================== -->

            <div class="modal-header" style="background: #3c8dbc; color: white;">

                <h4 class="modal-title">Add Client</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!--====================================================================================================-->
            <!--                                        Modal Body          -->
            <!--==================================================================================================== -->

            <div class="modal-body">

                <div class="box-body">
                    <form action="" method="post" >

                        <!--                    ENTRY FOR NAME-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control input-lg" name="newClient" placeholder="Add Name" required>
                            </div>

                        </div>

                        <!--                    ENTRY FOR ID-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="number" min="0" class="form-control input-lg" name="newDocumentId" placeholder="Add Document" required>
                            </div>

                        </div>

                        <!--                    ENTRY FOR Email-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control input-lg" name="newEmail" placeholder="Add Email" required>
                            </div>

                        </div>

                        <!--                    ENTRY FOR Phone-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="text" class="form-control input-lg" name="newPhone" placeholder="Add Telephone"  required>
                            </div>

                        </div>

                        <!--                    ENTRY FOR Address-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-map-marked"></i></span>
                                </div>
                                <input type="text" class="form-control input-lg" name="newAddress" placeholder="New Address" required>
                            </div>

                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="saveClient">Save Client</button>
                        </div>

                    </form>

                    <?php
                    include_once "controllers/addClientController.php";
                    ?>


                </div>
            </div>


        </div>

    </div>
</div>





<!--====================================================================================================-->
<!--                                        Modal Add Category End             -->
<!--==================================================================================================== -->

<!--<script>-->
<!--    -->
<!--    $(document).ready()-->
<!--    -->
<!--</script>-->


<?php
include "footer.php";
?>
