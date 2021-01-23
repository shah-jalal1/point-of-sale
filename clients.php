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
                    <h2>Manage Clients</h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i>Homepage</a></li>
                        <li class="breadcrumb-item active">Manage Clients</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>





    <!-- Main content -->
    <section class="content">

        <div class="card">
            <div class="card-header">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddClient">
                    Add Client
                </button>
            </div>


            <div class="card-body">

                <div class="box">

                    <table class="table table-bordered table-striped table-responsive-sm mydatatable">      <!-- dt resposinve is from datatable-->

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Document Id</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Address</th>
                            <th>Total Purchase</th>
                            <th>Action </th>
                        </tr>
                        </thead>

                        <tbody>


                        <?php

                        include_once "connection.php";

                        $query = "SELECT * FROM clients";
                        $result = mysqli_query($conn, $query);

                        $count = 0;


                        while ($row = mysqli_fetch_assoc($result)){
                        $count++;
                        ?>

                        <tr>

                        <td><?= $count ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['document'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['address'] ?></td>
                        <td><?= $row['purchases'] ?></td>
                        <td>

                            <div class="btn-group">

                                <button class="btn btn-warning" data-toggle="modal" data-target="#editClientModal-<?= $row['id'] ?>"><i class="fa fa-pen"></i></button>

                                <a href="controllers/deleteClient.controller.php?client_delete=<?= base64_encode($row['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete')"><i class="fa fa-times"></i></a>

                            </div>

                        </td>

                        </tr>

                        <?php
                        }
                        ?>

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




<!--====================================================================================================-->
<!--                                        Modal Edit Category End             -->
<!--==================================================================================================== -->


<?php


include "connection.php";



$query = "SELECT * FROM category";
$result = mysqli_query($conn, $query);


while ($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $query = "SELECT * FROM clients WHERE `id` = '$id'";
    $client_info = mysqli_query($conn, $query);
    $editClientInfo = mysqli_fetch_assoc($client_info);
?>

<!-- Modal -->
<div id="editClientModal-<?= $row['id'] ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">


            <!--====================================================================================================-->
            <!--                                        Modal Header            -->
            <!--==================================================================================================== -->

            <div class="modal-header" style="background: #3c8dbc; color: white;">

                <h4 class="modal-title">Edit Category</h4>

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
                                <input type="text" class="form-control input-lg" name="editClientName"  required value="<?= $editClientInfo['name'] ?>">
                                <input type="hidden" class="form-control" name="id"  value="<?= $editClientInfo['id'] ?>" required>
                            </div>

                        </div>

                        <!--                    ENTRY FOR Document Id-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="number" min="0" class="form-control input-lg" name="editClientDocument"  required value="<?= $editClientInfo['document'] ?>">
                            </div>

                        </div>

                        <!--                    ENTRY FOR Document Id-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="text"  class="form-control input-lg" name="editClientEmail"  required value="<?= $editClientInfo['email'] ?>">
                            </div>

                        </div>

                        <!--                    ENTRY FOR Document Id-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                </div>
                                <input type="number"  class="form-control input-lg" name="editClientPhone"  required value="<?= $editClientInfo['phone'] ?>">

                            </div>
                        </div>

                            <!--                    ENTRY FOR Document Id-->

                            <div class="form-group">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marked"></i></span>
                                    </div>
                                    <input type="text" class="form-control input-lg" name="editClientAddress"  required value="<?= $editClientInfo['address'] ?>">
                                </div>

                            </div>





                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="editClient">Save Client</button>
                        </div>

                    </form>


                </div>

            </div>


        </div>

    </div>


<?php
}

include_once "controllers/updateClient.controller.php";

?>





<?php
include "footer.php";
?>


