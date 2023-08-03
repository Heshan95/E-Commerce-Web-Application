<?php
include './showErros.php';
include './dbConnection.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>P R O D U C T - M A N A G E R</title>
        <link rel="stylesheet" type="text/css" href="admin_productManager.css">
        <link rel="shortcut icon" href="img/unauthorized-person.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
       

    </head>
    <body>
        <!--Navigation bar start -->
        <?php
        include './admin_header.php';
        ?>
        <!--Navigation bar end -->

        <!-- ADD -->
        <!-- Form Modal start-->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Add New Products</h5>
                        <button type="button" class="close" data-dismiss="modal" style="color: black;" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!--form start-->
                    <form action="admin_productManager_insert.php" method="POST">

                        <div class="modal-body" style="color: black;">
                            <div class="form-group">
                                <label style="color: black;">ID</label>
                                <input type="number" name="idproducts" class="form-control" id="idproducts" placeholder="ID">                                
                            </div>
                            <div class="form-group">
                                <label style="color: black;">Product Name</label>
                                <input type="text" name="productName" class="form-control" id="productName" placeholder="Product Name">                                
                            </div>
                            <div class="form-group">
                                <label style="color: black;">Product Description</label>
                                <input type="text" name="productDescription" class="form-control" id="productDescription" placeholder="Description">                                
                            </div>
                            <div class="form-group">
                                <label style="color: black;">Product Category</label>
                                <input type="text" name="productCategory" class="form-control" id="productCategory" placeholder="Category">                                
                            </div>
                            <div class="form-group">
                                <label style="color: black;">Sell Price</label>
                                <input type="number" name="sellPrice" class="form-control" id="sellPrice" placeholder="Selling Amount">                                
                            </div>
                            <div class="form-group">
                                <label style="color: black;">Buy Price</label>
                                <input type="number" name="buyPrice" class="form-control" id="buyPrice" placeholder="Buying Amount">                                
                            </div>
                            <div class="form-group">
                                <label style="color: black;">Image</label>
                                <input type="file" name="image_url" class="form-control" id="image_url" placeholder="jpg, png, etc..">                                
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="inserdata" class="btn btn-primary">Save Data</button>
                        </div>
                    </form>
                    <!--form end-->
                </div>
            </div>
        </div>
        <!-- add form end -->


        <!-- ###########################################################################################################################-->

        <!-- update/edit section started -->

        <!-- Edit pop-up form-->
        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Edit Products</h5>
                        <button type="button" class="close" data-dismiss="modal" style="color: black;" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!--form start-->
                    <form action="admin_productManager_update.php" method="POST">

                        <div class="modal-body" style="color: black;">

                            <input type="hidden" name="update_id" id="update_id">
                            <div class="form-group">
                                <label style="color: black;">ID</label>
                                <input type="text" name="idproduct" id="idproduct" class="form-control"  placeholder="ID">                                
                            </div>
                            <div class="form-group">
                                <label style="color: black;">Product Name</label>
                                <input type="text" name="productNam" id="productNam" class="form-control"  placeholder="Product Name">                                
                            </div>
                            <div class="form-group">
                                <label style="color: black;">Product Description</label>
                                <input type="text" name="productDescriptio" id="productDescriptio" class="form-control"  placeholder="Description">                                
                            </div>
                            <div class="form-group">
                                <label style="color: black;">Product Category</label>
                                <input type="text" name="productCategor" id="productCategor" class="form-control"  placeholder="Category">                                
                            </div>
                            <div class="form-group">
                                <label style="color: black;">Sell Price</label>
                                <input type="text" name="sellPric" id="sellPric" class="form-control"  placeholder="Selling Amount">                                
                            </div>
                            <div class="form-group">
                                <label style="color: black;">Buy Price</label>
                                <input type="text" name="buyPric" id="buyPric" class="form-control"  placeholder="Buying Amount">                                
                            </div>
                            <div class="form-group">
                                <label style="color: black;">Image</label>
                                <input type="text" name="image_ur" id="image_ur" class="form-control"  placeholder="jpg, png, etc..">                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                        </div>
                    </form>
                    <!--form end-->
                </div>
            </div>
        </div>

        <!-- update/edit section ended -->

        <!-- delete page start-->
        <!-- DELETE POP UP FORM -->

        <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: black;"> Delete Data </h5>
                        <button type="button" class="close" data-dismiss="modal" style="color: black;" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="admin_productManager_delete.php" method="POST">

                        <div class="modal-body">

                            <input type="hidden" name="delete_id" id="delete_id">

                            <h4 style="color: black;"> Do you want to Delete this Data ??</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">  NO </button>
                            <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- delete part end-->

        <!-- main container-->
        <div class="container">
            <div class="jumbotron">
                <div class="card" style="color: black;">
                    <h2>Product Manager</h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">
                            Add Data
                        </button>
                    </div>
                </div>

                <!--Table start-->
                <div class="card">
                    <div class="card-body" style="color: black;">
                        <?php
                        $query = "SELECT * FROM `products`";
                        $query_run = mysqli_query($connection, $query);
                        ?>

                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Description</th>
                                    <th scope="col">Product Category</th>
                                    <th scope="col">Sell Price</th>
                                    <th scope="col">Buy Price</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>

                            <?php
                            if ($query_run) {
                                foreach ($query_run as $row) {
                                    ?>

                                    <tbody>
                                        <tr>
                                            <td> <?php echo $row["idproducts"]; ?> </td>
                                            <td> <?php echo $row["productName"]; ?> </td>
                                            <td> <?php echo $row["productDescription"]; ?> </td>
                                            <td> <?php echo $row["productCategory"]; ?> </td>
                                            <td> <?php echo $row["sellPrice"]; ?> </td>
                                            <td> <?php echo $row["buyPrice"]; ?> </td>
                                            <td> <?php echo $row["image_url"]; ?> </td>
                                            <td> 
                                                <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger deletebtn"> DELETE</button>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <?php
                                }
                            } else {
                                echo "No Recode found !";
                            }
                            ?>
                        </table>
                    </div>
                </div>

            </div>

        </div>








        <!--footer start -->
        <?php
        include './footer.php';
        ?>
        <!--footer end -->


        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

        <script defer src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
        <script defer src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

        <!--icondefer , other animation-->
        <script defer src="https://kit.fontawesome.com/a076d05399.js"></script>
        <!--script src="https://code.jquery.com/jquery-3.4.1.js"></script-->
        <!--menu drop-->
 <script>
            $('nav ul li.btn span').click(function () {
                $('nav ul div.items').toggleClass("show");
                $('nav ul li.btn span').toggleClass("show");
            });
        </script>


        <script>

            $(document).ready(function () {

                $('.deletebtn').on('click', function () {

                    $('#deletemodal').modal('show');
                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function () {
                        return $(this).text();
                    }).get();
                    console.log(data);
                    $('#idproduct').val(data[0]);
                });
            });
        </script>






        <script>

            $(document).ready(function () {
                $('.editbtn').on('click', function () {
                    $('#editmodal').modal('show');

                    $tr = $(this).closest('tr');

                    var data = $tr.children("td").map(function () {
                        return $(this).text();
                    }).get();

                    console.log(data);


                    $('#update_id').val(data[0]);
                    $('#idproduct').val(data[0]);
                    $('#productNam').val(data[1]);
                    $('#productDescriptio').val(data[2]);
                    $('#productCategor').val(data[3]);
                    $('#sellPric').val(data[4]);
                    $('#buyPric').val(data[5]);
                    $('#image_ur').val(data[6]);
                });
            });

        </script>




    </body>
</html>
