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
                    <h2>Manage Categoires</h2>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i>Homepage</a></li>
                        <li class="breadcrumb-item active">Manage Categories</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>





    <!-- Main content -->
    <section class="content">

        <div class="card">
            <div class="card-header">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAddCategory">
                    Add User
                </button>
            </div>


            <div class="card-body">

                <div class="box">

                    <table class="table table-bordered table-striped table-responsive-sm mydatatable">      <!-- dt resposinve is from datatable-->

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Categories</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        <?php

                        include "connection.php";

                        $query = "SELECT * FROM category";
                        $result = mysqli_query($conn, $query);

                        $count = 0;


                        while ($row = mysqli_fetch_assoc($result)){
                            $count++;
                        ?>

                        <tr>
                            <td><?= $count ?></td>
                            <td><?= $row['category'] ?></td>
                            <td>

                                <div class="btn-group">

                                    <button class="btn btn-warning" data-toggle="modal" data-target="#editCategoryModal-<?= $row['id'] ?>"><i class="fa fa-pen"></i></button>

<!--                                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>-->
                                    <a href="controllers/categoryDelete.controller.php?category_delete=<?= base64_encode($row['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete')"><i class="fa fa-times"></i></a>


                                </div>

                            </td>
                        </tr>


                            <?php
                        }

                            ?>

                        <?php
                        include_once "controllers/addCategory.controller.php";
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
<div id="modalAddCategory" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">


            <!--====================================================================================================-->
            <!--                                        Modal Header            -->
            <!--==================================================================================================== -->

            <div class="modal-header" style="background: #3c8dbc; color: white;">

                <h4 class="modal-title">Add Category</h4>

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
                            <input type="text" class="form-control input-lg" name="newCategory" placeholder="Add Category" required>
                        </div>

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="saveCategory">Save Category</button>
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


