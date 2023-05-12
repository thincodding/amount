
<?php

    require_once 'db_con.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap4.min.js"></script>
    <script src="../js/script.js"></script>

</head>

<body>


    <div class="section">
    <p class="bg-danger p-2 ">p</p>
        <div class="wrapper" style="margin-top: -60px;">
            
            <div class="navbar">
                
                <div class="profile_wrap">
                    <div class="profile_img">
                     
                    </div>
                    <div class="profile_info">
                        <h2 class="name">Garreth Riley</h2>
                        <p class="role">Administrator</p>
                    </div>
                </div>

                <ul>
                    <li>
                        <a href="index.php?page=dashboard">
                            <span class="icon"><i class="fa fa-tachometer-alt"></i></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?page=all-people">
                            <span class="icon"><i class="fa fa-star"></i></span>
                            <span class="title">All Peoples</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?page=add_student">
                            <span class="icon"><i class="far fa-file-alt"></i></span>
                            <span class="title">Add New</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="far fa-credit-card"></i></span>
                            <span class="title">Payments</span>
                        </a>
                    </li>


                </ul>
            </div>

        </div>
    </div>
    <div class="header-container">

        <div class="content">
            <?php


            if (isset($_GET['page'])) {
                $page = $_GET['page'] . '.php';
            } else {
                $page = 'dashboard.php';
            }

            if (file_exists($page)) {
                
                require_once $page;
            }

            ?>
        </div>

    </div>


</body>




</html>