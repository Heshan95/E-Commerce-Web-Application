<?php
include './showErros.php';
include './dbConnection.php';

$select = "SELECT * FROM `invoice` i, `products` p,`invoice_items` ii, `users` u "
       ." WHERE ii.`id_product`=p.`idproducts` AND ii.`id_invoice`=i.`id_invoice` AND i.`invoiced_to`=u.`idusers`";

$result=$connection->query($select);


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
        <title>O R D E R - M A N A G E R</title>
        <link rel="stylesheet" type="text/css" href="admin_orderManager.css">
        <link rel="shortcut icon" href="img/unauthorized-person.png">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body>
        <!--Navigation bar start -->
       <?php
       include './admin_header.php';
       
       ?>
        <!--Navigation bar end -->



        



        <!-- main container-->
        <div class="container">
            <div class="jumbotron">
                <div class="card" style="color: black;">
                    <h4>Order Manager</h4>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h6 style="color: #999999;">All of your order information</h6>
                    </div>
                </div>

                <!--Table start-->
                <div class="card">
                    <div class="card-body" style="color: black;">
                        <?php
                        $query = "SELECT * FROM `order_manager`";
                        $query_run = mysqli_query($connection, $query);
                        ?>

                        <table class="table table-dark table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Selling Price</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Activity Status</th>
                                </tr>
                            </thead>

                            <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>

                                    <tbody>
                                        <tr>
                                            <td> <?php echo $row["id_invoice"]; ?> </td>
                                            <td> <?php echo $row["fname"]; ?> </td>
                                            <td> <?php echo $row["lname"]; ?> </td>
                                            <td> <?php echo $row["sellPrice"]; ?> </td>
                                            <td> <?php echo $row["email"]; ?> </td>
                                            <td> <?php echo $row["number"]; ?> </td>
                                            <td> <?php echo $row["address"]; ?> </td>
                                            <!--td> 
                                                <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                            </td-->
                                            <td>
                                                <form method="post" action="admin_orderManager_update.php">
                                <input  type="hidden" name="orderId" value="<?php echo $row['id_invoice'];?>">
                                <select style="color: black;"   name="orderstatus">
                                    <option style="color: black;" <?php if($row['status']== 1){echo "selected";}?> value="1">YES</option>
                                    <option style="color: black;" <?php if($row['status']== 2){echo "selected";}?> value="2">NO</option>
                                </select>
                                <input type="submit" class="btn btn-success editbtn" value="EDIT">
                                </form>
                            </td>
                                        </tr>
                                    </tbody>

                                    <?php
                                }
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


        <!--icon, other animation-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

        <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

        <!--icon, other animation-->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

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
                    $('#idproducts').val(data[0]);
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

                    $('#oredr_id').val(data[0]);
                    $('#first_name').val(data[1]);
                    $('#last_name').val(data[2]);
                    $('#items').val(data[3]);
                    $('#currency').val(data[4]);
                    $('#amount').val(data[5]);
                    $('#email').val(data[6]);
                    $('#phone').val(data[7]);
                    $('#address').val(data[8]);
                    $('#city').val(data[9]);
                    $('#country').val(data[10]);                    
                    $('#payment_status').val(data[11]);
                    $('#delivery_status').val(data[12]);
                });
            });

        </script>


        
        
    </body>
</html>
