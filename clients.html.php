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
                            <th>Birth Date</th>
                            <th>Total Purchase</th>
                            <th>Action </th>
                        </tr>
                        </thead>

                        <tbody>

                        <tr>

                        <td>1</td>
                        <td>Zawad Zamil</td>
                        <td>5644</td>
                        <td>zamil@gmail.com</td>
                        <td>454544</td>
                        <td>Magura</td>
                        <td>1995-5-7</td>
                        <td>35</td>
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

                        <!--                    ENTRY FOR Birth Date-->

                        <div class="form-group">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                </div>
                                <input type="date" class="form-control input-lg" name="newBithDate" placeholder="New Birth Date" required>
                            </div>

                        </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="saveClient">Save Client</button>
                    </div>

                    </form>



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
    $query = "SELECT * FROM category WHERE `id` = '$id'";
    $category_info = mysqli_query($conn, $query);
    $editCategoryInfo = mysqli_fetch_assoc($category_info);
?>

<!-- Modal -->
<div id="editCategoryModal-<?= $row['id'] ?>" class="modal fade" role="dialog">
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
                                    <span class="input-group-text"><i class="fas fa-th"></i></span>
                                </div>
                                <input type="text" class="form-control input-lg" name="newCategoryName"  required value="<?= $editCategoryInfo['category'] ?>">
                                <input type="hidden" class="form-control" name="id"  value="<?= $editCategoryInfo['id'] ?>" required>
                            </div>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="editCategory">Save Category</button>
                        </div>

                    </form>



                </div>

            </div>


        </div>

    </div>
</div>

<?php
}

include_once "controllers/categoryUpdate.controller.php";

?>





<?php
include "footer.php";
?>


