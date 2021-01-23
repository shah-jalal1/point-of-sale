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
                    <h2>Adminastrator Sales</h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i>Homepage</a></li>
                        <li class="breadcrumb-item active">Manage sales</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>





    <!-- Main content -->
    <section class="content">

        <div class="card">
            <div class="card-header">

            <a href="create-sales.php">

                <button class="btn btn-primary">
                    Add Sales
                </button>

            </a>

            </div>


            <div class="card-body">

                <div class="box">

                    <table class="table table-bordered table-striped table-responsive-sm mydatatable">      <!-- dt resposinve is from datatable-->

                        <thead>
                        <tr>
                            <th style="width: 10px;">#</th>
                            <th>invoice code</th>
                            <th>Client</th>
                            <th>Seller</th>
                            <th>Payment Method</th>
                            <th>Net</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th>Action </th>
                        </tr>
                        </thead>

                        <tbody>

                        <tr>

                        <td>1</td>
                        <td>1000123</td>
                        <td>sakib</td>
                        <td>tamim</td>
                        <td>TC-123456789</td>
                        <td>$ 10002454</td>
                        <td>$ 12354</td>
                        <td>12-11-2007</td>
                        <td>

                            <div class="btn-group">

                                <button class="btn btn-info"><i class="fa fa-print"></i></button>

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




<?php
include "footer.php";
?>


