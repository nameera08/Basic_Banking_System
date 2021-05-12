<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    

    <title>Basic Banking System</title>
    <style type="text/css">
        button{
            position: relative;
            display: inline-block;
            padding: 12px 36px;
            margin: 10px 0;
            color: white;
            text-transform: uppercase;
            font-size: 17px;
            letter-spacing: 3px;
            border-radius: 10px;
            background-color: #2C66C3;
    
        }
		
		img {
			max-height: 200px;
		}
    </style>

</head>


<body>
    <?php
  include 'navbar.php';
  ?>

    <div class="container-fluid">
        
        <div class="intro py-1">
            <div >
                <div >
                   <center> <h1 style="color:#2C66C3"><i>The Sparks Foundation Bank</i></h1></center>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
            </div>
        </div>
       
        <div class="row activity text-center">
		
		    <div class="col-md act">
                <br><br>
				<br><br>
				<img src="images/createuser.png" class="img-fluid">
				
                <a href="createuser.php"><button >Create Users</button></a>
            </div>

            <div class="col-md act">
                <br><br>
				<br><br>
                <img src="images/viewusers.png" class="img-fluid">
                
                <a href="viewusers.php"><button>View all Users</button></a>
            </div>
			
            <div class="col-md act">
                <br><br>
				<br><br>
                <img src="images/transfer_money.png" class="img-fluid">
                
                <a href="money_transfer.php"><button>Transfer Money</button></a>
            </div>
			
            <div class="col-md act">
			    <br><br>
				<br><br>
                <img src="images/history.png" class="img-fluid">
                
                <a href="transaction_history.php"><button >View History</button></a>
            </div>
			
			
        </div>
    </div>
    
    <div class="absolute">        
	<footer class="text-center mt-5 py-2" style="margin-top:20%;"> 
        <p style="color: #2C66C3">&copy 2021 Made by <b>Nameera Shaikh</b></p>
    </footer>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>