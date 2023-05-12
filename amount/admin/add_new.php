
<?php 
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddNew</title>
    <link rel="stylesheet" href="../style/add_new.css"/>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<?php


if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $price = $_POST['price'];


    $qurey = "INSERT INTO `tbl_amount`(`firstname`, `lastname`,`phone`, `email`,`price`) VALUE ('$firstname', '$lastname', '$phone', '$email','$price');";

    if(mysqli_query($db_con, $qurey)){
        echo "
        
        
        <script>
            
        swal({
            title: 'Stystem Management',
            text: 'You inserted student!',
            icon: 'success',
            button: 'Okay',
          });
        
        
        </script>
           
        ";
    }


}



?>



<div class="container-fluid">
        <h6>Add New</h6>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form" method="post">
                       <div class="row p-5" style="line-height: 50px;" >
                       <div class="col-md-6">
                            <label for="firstname" class="label">FirstName</label>
                            <input type="text"  name="firstname" required="" placeholder="First Name" class="inputfirstname">
                        </div>
                        <div class="col-md-6">
                            <label for="lastname" class="label">LastName</label>
                            <input type="text"  name="lastname" required="" placeholder="Last Name" class="inputlastname">                 
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="label">Phone Number</label>
                            <input type="text" name="phone" maxlength="10" required="" placeholder="Phone Number" class="inputphone">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="label">E-mail</label>
                            <input type="email" name="email" required="" placeholder="Email" class="inputemail">
                        </div>
                        <div class="col-md-12">
                            <label for="price" class="label">Price</label>
                            <input type="number" name="price" required="" placeholder="Price" class="inputemail">
                        </div>
                        <div class="col-md-6">
                            <!-- <button type="button" name="insert" class="btn btn-primary">Insert Student</button> -->
                            <!-- <input type="submit" name="submit" value="Submit"> -->
                            <button type="submit" name="submit" class="btn btn-primary">Add New</button>
                        </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
</html>