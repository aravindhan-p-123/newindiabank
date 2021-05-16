<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Summary</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
     .container{
	padding-top: 20px;
    padding-left: 2px;
    padding-right: 2px;
      text-align: center;
      background: white;
      opacity:0.8;
     }
    .logo-text{
	  font-size:20px;
      color: white;
      padding-top: 15px;

	  
    }
	 .nav-link1{
      color: white;
     	  
    }
    .list-customer{
      padding-left: 1100px;
    }

    .nav-link1:hover{
      color: yellow;
      text-decoration: none;
    }
    h2{
      text-align: center;
      margin-top: 50px;
      font-family: sans-serif;
      color: #03045e;
      font-weight: bold;
    }
    td{
        font-family: Comic Sans MS;
    }
    body {
   
   background-image: url('10.jpg');
   background-repeat: no-repeat;
   background-position: 0px 0px;
   background-size: cover;
 }
    

    </style>
</head>
<body style=>
<header>
  <?php
  include 'navbar.php';
  ?>
</header>
        <div class="container" >
        <h2>Transaction History</h2>

       <br>
      
       <div class="table-responsive-sm">
    <table class=" table table-striped tabletext table-hover table-striped table-condensed " >
        <thead>
            <tr>
                <th>Sender</th>
                <th>Receiver</th>
                <th> Transferred Amount</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'conf.php';
			

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_array($query))
            {
        ?>
            <tr>
            <td><?php echo $rows['sender']; ?></td>
            <td><?php echo $rows['receiver']; ?></td>
            <td><?php echo $rows['credits']; ?> </td>

        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>

</body>
</html>