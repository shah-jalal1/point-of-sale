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

                        <form method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="newSale" name="newSale" value="User Adminastrator" readonly>
                                    </div>
                                </div>
<!--                                <div class="form-group col-md-6">-->
<!--                                    <label for="inputPassword4">Password</label>-->
<!--                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">-->
<!--                                </div>-->
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="newSale" name="newSale" value="120444" readonly>

                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Sign in</button>
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

<!--                        <div class="box">-->

                            <table  class="table table-bordered table-striped table-responsive-sm" id="example" >      <!-- dt resposinve is from datatable-->

                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
<!--                                    <th>Image</th>-->
                                    <th>Code</th>
                                    <th>Description</th>
                                    <th>Stock</th>
                                    <th>Actionins</th>
                                </tr>
                                </thead>

                                <tbody id="tbody">  </tbody>

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
