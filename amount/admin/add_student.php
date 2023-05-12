<?php

$corepage = explode('/', $_SERVER['PHP_SELF']);
$corepage = end($corepage);
if ($corepage !== 'index.php') {
    if ($corepage == $corepage) {

        $corepage == explode('.', $corepage);
        header('location:index.php?page=' . $corepage[0]);
    }
}



$conn = mysqli_connect("localhost","root", "","amount");

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];



    $error = array();


    $f = "SELECT firstname FROM tbl_amount WHERE firstname='$firstname'";
    $fn= mysqli_query($conn, $f);


    $l = "SELECT lastname FROM tbl_amount WHERE lastname='$lastname'";
    $ln=mysqli_query($conn, $l);


    $p = "SELECT phone FROM tbl_amount WHERE phone='$phone'";
    $pn = mysqli_query($conn, $p);


    $e = "SELECT email FROM tbl_amount WHERE email ='$email'";
    $em= mysqli_query($conn,$e);



    
    

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body>
    <?php
    

    if(empty($firstname)){
        $error['f'] = "Firstname Require";
    }

    if(empty($lastname)){
        $error['l'] = "Lastname Require";
    }

    if(empty($phone)){

        $error['p'] = "Phone Require";
    }else if(mysqli_num_rows($pn) > 0){

        $error["phn"] = "PhoneNumber already exist";
    }

    if(empty($email)){

        $error['e'] = "Email Require";
    }else if(mysqli_num_rows($em)){
        $error['eml'] = "Email already exist";
    }

    if(count($error) == 0){



        $qurey = "INSERT INTO `tbl_amount`(`firstname`, `lastname`,`phone`, `email`) VALUE ('$firstname', '$lastname', '$phone', '$email');";
        $reult = mysqli_query($conn, $qurey);


        if($reult){
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
        }else{
            echo "failed";
        }
       
    }
    
    
    
    ?>
    <div class="container-fluid">
        <h6>Form Register</h6>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form" method="post">
                       <div class="row p-5" style="line-height: 50px;" >
                       <div class="col-md-6">
                            <label for="firstname" class="label">FirstName</label>
                            <input type="text"  name="firstname"  placeholder="First Name" class="inputfirstname">
                            <p class="text-warning"   style="margin-left: 9rem; margin-top:-35px" ><?php if(isset($error['l'])) echo $error['l'];?></p>
                        </div>
                        <div class="col-md-6" >
                            <label for="lastname" class="label">LastName</label>
                            <input type="text" name="lastname"  placeholder="Last Name" class="inputlastname">   
                            <p class="text-warning"   style="margin-left: 7rem; margin-top:-35px" ><?php if(isset($error['l'])) echo $error['l'];?></p> 
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="label">Phone Number</label>
                            <input type="text" name="phone" maxlength="10"  placeholder="Phone Number" class="inputphone">
                            <p class="text-warning" style="margin-left: 9rem; margin-top:-35px"><?php if(isset($error['p'])) echo $error['p'];?></p>  
                            <p class="text-danger" style="margin-left: 9rem; margin-top:-50px"><?php if(isset($error['phn'])) echo $error['phn'];?></p>  
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="label">E-mail</label>
                            <input type="email" name="email"  placeholder="Email" class="inputemail">
                            <p class="text-warning"   style="margin-left: 7rem; margin-top:-35px" ><?php if(isset($error['e'])) echo $error['e'];?></p> 
                            <p class="text-danger"   style="margin-left: 7rem; margin-top:-35px" ><?php if(isset($error['eml'])) echo $error['eml'];?></p> 
                        </div>
                        <div class="col-md-6">
                            <!-- <button type="button" name="insert" class="btn btn-primary">Insert Student</button> -->
                            <!-- <input type="submit" name="submit" value="Submit"> -->
                            <button type="submit" name="submit" class="btn btn-primary">Add Student</button>
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

