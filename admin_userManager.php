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
        <title>U S E R - M A N A G E R</title>
        <link rel="stylesheet" type="text/css" href="admin_userManager.css">
        <link rel="shortcut icon" href="img/unauthorized-person.png">
        <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>

    <!--- Navigation bar start --> 
    <?php
    include './admin_header.php';
    ?>
    <!-- Navigation bar end -->  


    <!-- ###################################################################################################################### -->

    <!-- update/edit section started -->

<!--     Edit pop-up form
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Users Information</h5>
                    <button type="button" class="close" data-dismiss="modal" style="color: black;" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                form start
                <form action="admin_userManager_update.php" method="POST">

                    <div class="modal-body" style="color: black;">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
                            <label style="color: black;">ID</label>
                            <input type="text" name="idusers" id="idusers" class="form-control"  placeholder="ID">                                
                        </div>
                        <div class="form-group">
                            <label style="color: black;">First Name</label>
                            <input type="text" name="fname" id="fname" class="form-control"  placeholder="First Name">                                
                        </div>
                        <div class="form-group">
                            <label style="color: black;">Last Name</label>
                            <input type="text" name="lname" id="lname" class="form-control"  placeholder="Last Name">                                
                        </div>
                        <div class="form-group">
                            <label style="color: black;">Email</label>
                            <input type="email" name="email" id="email" class="form-control"  placeholder="email">                                
                        </div>
                        <div class="form-group">
                            <label style="color: black;">Country</label>
                            <input type="text" name="country" id="country" class="form-control"  placeholder="Enter name of your Country here">                                
                        </div>
                        <div class="form-group">
                            <label style="color: black;">Phone Number</label>
                            <input type="text" name="number" id="number" class="form-control"  placeholder="Phone Number">                                
                        </div>
                        <div class="form-group">
                            <label style="color: black;">Address</label>
                            <input type="text" name="address" id="address" class="form-control"  placeholder="Address">                                
                        </div>
                        <div class="form-group">
                            <label style="color: black;">City</label>
                            <input type="text" name="city" id="city" class="form-control"  placeholder="City">                                
                        </div>
                        <div class="form-group">
                            <label style="color: black;">Zip code</label>
                            <input type="text" name="zip" id="zip" class="form-control"  placeholder="Zip code">                                
                        </div>
                        <div class="form-group">
                            <label style="color: black;">User Name</label>
                            <input type="text" name="username" id="username" class="form-control"  placeholder="User Name">                                
                        </div>
                        <div class="form-group">
                            <label style="color: black;">Password</label>
                            <input type="password" name="password" id="password" class="form-control"  placeholder="Password">                                
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
                form end
            </div>
        </div>
    </div>
    
     update/edit section started -->


    <!-- ##################################################################################################################################  -->
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

                <form action="" method="POST">

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
                <h4>Users Information</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    <!--button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal">
                        Add Data
                    </button-->
                    <h6 style="color: #999999;">All of your users information</h6>
                </div>
            </div>

            <!--Table start-->
            <div class="card">
                <div class="card-body" style="color: black;">
                    <?php
                    $query = "SELECT * FROM `users`";
                    $query_run = mysqli_query($connection, $query);
                    ?>

                    <table class="table table-dark table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email ID</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Address</th>
                                <th scope="col">City</th>
                                <th scope="col">Zip</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Password</th>
<!--                                <th scope="col">Edit</th>-->
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>

                        <?php
                        if ($query_run) {
                            foreach ($query_run as $row) {
                                ?>

                                <tbody>
                                    <tr>
                                        <td> <?php echo $row["idusers"]; ?> </td>
                                        <td> <?php echo $row["fname"]; ?> </td>
                                        <td> <?php echo $row["lname"]; ?> </td>
                                        <td> <?php echo $row["email"]; ?> </td>
                                        <td> <?php echo $row["number"]; ?> </td>
                                        <td> <?php echo $row["address"]; ?> </td>
                                        <td> <?php echo $row["city"]; ?> </td>
                                        <td> <?php echo $row["zip"]; ?> </td>
                                        <td> <?php echo $row["username"]; ?> </td>
                                        <td> <?php echo $row["password"]; ?> </td>
<!--                                        <td> 
                                            <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                        </td>-->
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

    <!-- footer start -->
    <?php
    include './footer.php';
    ?>
    <!-- footer end -->


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
        $('nav ul li.colour span').click(function () {
            $('nav ul div.items').toggleClass("show");
            $('nav ul li.colour span').toggleClass("show");
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






    <!--script>

        $(document).ready(function () {
            $('.editbtn').on('click', function () {
                $('#editmodal').modal('show');

                                    $tr = $(this).closest('tr');
                
                                    var data = $tr.children("td").map(function () {
                                        return $(this).text();
                                    }).get();
                
                                    console.log(data);
                
                                    $('#idusers').val(data[0]);
                                    $('#fname').val(data[1]);
                                    $('#lname').val(data[2]);
                                    $('#email').val(data[3]);
                                    $('#country').val(data[4]);
                                    $('#number').val(data[5]);
                                    $('#address').val(data[6]);
                            $('#city').val(data[7]);
                            $('#zip').val(data[8]);
                            $('#username').val(data[9]);
                            $('#password').val(data[10]);
            });
        });

    </script-->


</html>
