<?php

$corepage = explode('/', $_SERVER['PHP_SELF']);
$corepage = end($corepage);
if ($corepage !== 'index.php') {
    if ($corepage == $corepage) {
        $corepage == explode('.', $corepage);
        header('location:index.php?page=' . $corepage[0]);
    }
}


$id = base64_decode($_GET['id']);

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];


	$query = "UPDATE `tbl_amount` SET `firstname`='$firstname',`lastname`='$lastname',`phone`='$phone',`Email`='$email' WHERE `id`=$id";
  	if (mysqli_query($db_con,$query)) {
		echo"edit succesfull";
  	}

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="../style/add_stu.css"/>
    


<body>

<?php


    if(isset($id)){

        $query = "SELECT `id`, `firstname`, `lastname`, `phone`, `Email` FROM `tbl_amount` WHERE `id`= $id";
        $result = mysqli_query($db_con, $query);
        $row = mysqli_fetch_array($result);
    }


?>

    
    <div class="container-fluid">
        <h6>Edit Student</h6>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form" method="post">
                       <div class="row p-5" style="line-height: 50px;" >
                       <div class="col-md-6">
                            <label for="firstname" class="label">FirstName</label>
                            <input type="text"  name="firstname"  placeholder="First Name" class="inputfirstname" 
                            value="<?php echo $row['firstname']?>">
                        </div>
                        <div class="col-md-6">
                            <label for="lastname" class="label">LastName</label>
                            <input type="text"  name="lastname"  placeholder="Last Name" class="inputlastname" 
                            value="<?php echo $row['lastname']?>">                 
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="label">Phone Number</label>
                            <input type="text" name="phone" maxlength="10"  placeholder="Phone Number" class="inputphone"
                            value="<?php echo $row['phone']?>">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="label">E-mail</label>
                            <input type="email" name="email"  placeholder="Email" class="inputemail"
                            value="<?php echo $row['Email']?>">
                        </div>
                        <div class="col-md-6">
          
                            <button type="submit" name="submit" class="btn btn-primary">Edit Student</button>
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

