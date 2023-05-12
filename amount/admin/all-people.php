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
    <title>All People</title>
    <link rel="stylesheet" href="../style/all-people.css"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      div.dataTables_wrapper div.dataTables_length select{
        box-shadow: none;
        padding: 0 22px;
      }
    </style>


</head>
<body>
<p class="h2">List People</p>


  <a href="add_new.php">

      <button style="background-color: green;padding:8px 15px; margin:10px 0 10px 0; border:none; color:white; font-size:15px;">Add People<i class="fa-solid fa-plus" style="margin-left: 5px;"></i></button>

  </a>

  <?php if(isset($_GET['delete'])){?>
  <div aria-live="polite" aria-atomic="true">
  <div class="toast-container position-absolute top-0 end-0 p-3" >
    <div class="toast " role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" > 
      <div class="toast-header bg-danger ">
        <strong class="me-auto fw-normal text-white"><i class="fa-solid fa-circle-info" style="margin-right: 5px; color:white"></i>Your ware deleted!</strong>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>
</div>
<?php }?>



<div class="table-wrapper">
  <!-- id=data is show for total and search in table -->
    <table class="fl-table" id="data">
        <thead>
        <tr>
            <th width="5%">ID</th>
            <th width="20%">FirstName</th>
            <th width="20%">LastName</th>
            <th width="20%">Phone</th>
            <th width="20%">Email</th>
            <th width="20%">Price</th>
            <th width="20%">Action</th>
        </tr>
        </thead>
        <tbody>

        <?php
            $query = mysqli_query($db_con, "SELECT * FROM `tbl_amount` ORDER BY `tbl_amount` .`id` DESC;");
            $i= 1;
            while ($result = mysqli_fetch_array($query)){ ?>
           <tr>
        
           <?php

            echo '
            <td>'.$i.'</td>
            <td>'.ucwords($result['firstname']).'</td>
            <td>'.ucwords($result['lastname']).'</td>
            <td>'.ucwords($result['phone']).'</td>
            <td>'.ucwords($result['Email']).'</td>
            <td>'.ucwords($result['price']).'</td>
            

            <td>
            
              <a href="index.php?page=edit&id='.base64_encode($result['id']).'"><i class="fa fa-edit"></i></a>
              <a onclick="javascript:cfr($(this));return false;" href="index.php?page=delete&id='.base64_encode($result['id']).'"><i class="fa-solid fa-delete-left"></i></a>
              

            </td>';?>
      
          </tr>

            <?php $i++;}?>

        <tbody>
    </table>
</div>
</body>
<script>
  function cfr(anchor){
    var dl = confirm("You wanna delete?");

    if(dl){
      window.location=anchor.attr("href");
    }
  }
</script>
<script>
  jQuery('.toast').toast('show');
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script>


  // swal({
  //                 title: 'Good job!',
  //                 text: 'You clicked the button!',
  //                 icon: 'success',
  //                 button: 'Aww yiss',
  //               });
              


</script>

</html>
