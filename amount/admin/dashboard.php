<?php

$corepage = explode('/', $_SERVER['PHP_SELF']);
$corepage = end($corepage);
if ($corepage !== 'index.php') {
    if ($corepage == $corepage) {

        $corepage == explode('.', $corepage);
        header('location:index.php?page=' . $corepage[0]);
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="../style/dashboard.css" />

    <style>
        .content-box {
            display: flex;
            padding: 10px;
        }

        .content-card {
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="content-headers">
        <p>Dashboard</p>
        <div class="content-box">
            <div class="content-card">
                <div class="row">
                    <div class="col-md-6">
                        <i class="fa-solid fa-user user"></i>
                    </div>
                    <div class="col-md-6">
                        <div class="total">
                            <span style="font-size: 50px">
                                <?php $stu = mysqli_query($db_con, 'SELECT * FROM `tbl_amount`');
                                $stu = mysqli_num_rows($stu);
                                echo $stu; ?>
                            </span>
                        </div>
                        <span class="span">Total People</span>
                    </div>
                </div>
                <div class="row">
                    <div class="list">
                        <p>List Peoples
                            <a href="all-people.php"><i class="fa-solid fa-arrow-right"></i></a>
                        </p>
                    </div>

                </div>
            </div>
            <div class="content-card">
                <div class="row">
                    <div class="col-md-6">
                        <i class="fa-solid fa-user user"></i>
                    </div>
                    <div class="col-md-6">
                        <div class="total">
                            <span style="font-size: 50px">
                                <?php $stu = mysqli_query($db_con, 'SELECT * FROM `tbl_totals`');
                                $stu = mysqli_num_rows($stu);
                                echo $stu; ?>
                            </span>
                        </div>
                        <span class="span">Total People</span>
                    </div>
                </div>

                <div class="row">
                    <div class="list">
                        <p>List Peoples
                            <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                        </p>
                    </div>

                </div>

            </div>
            <div class="content-card">
                <div class="row">
                    <div class="col-md-6">
                      <i class="fa-solid fa-money-bill" style="font-size: 50px; color:lightgreen"></i>
                    </div>
                    <div class="col-md-6">
                        <div class="total" >
                            <span style="font-size: 16px;">
                                <?php
                                $money = $db_con->query("SELECT sum(price) as totals FROM `tbl_amount`")-> fetch_assoc()['totals'];
                                echo number_format($money);
                                ?>
                            </span>
                        </div>
                        <span class="span">Total Money</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>