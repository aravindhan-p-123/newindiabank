<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Customers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <style type="text/css">
    .container{
	padding-top: 40px;
    padding-left: 2px;
    padding-right: 2px;
      text-align: center;
      background: white;
      opacity:0.8;
    }
    .button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 16px;
  padding: 5px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 4px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 20px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
	.row{
		color:#4e0541;
		font-size:16px;
	}
    
    body {
   
    background-image: url('10.jpg');
    background-repeat: no-repeat;
    background-position: 0px 0px;
    background-size: cover;
  }
  }
    }
;
}
   
  h2{
font-family: sans-serif;
color: #41050f;
font-weight: bold;
}
th{
    color: #4d1347;
}
td{
    color: #070949;
    font-family: Comic Sans MS;

}
    </style>



</head>
<body >
<div class=bg-image>





<?php
    require 'conf.php';
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn,$query);
?>
<header>
  <?php
  include 'navbar.php';
  ?></header>

    <div class="container divStyle">
    

        <h2>User Details</h2>
        <br>

        <div class="row">
            <div class="col">
                    <div class="table-responsive-sm">
                    <table border="0" class="table table-striped tabletext table-hover table-striped table-condensed">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email Id</th>
                            <th scope="col">Balance</th>
                            <th scope="col">Transaction</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php
                    while($rows=mysqli_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['credits']?></td>
                        <td><a href="selectedUserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="button"><span>Transfer</span></button></a></td>
                    </tr>
                <?php
                    }
                 ?>

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            </div>

</div>




</body>
</html>