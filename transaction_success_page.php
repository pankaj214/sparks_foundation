
<!DOCTYPE html>
<html>
    <head>
    <script src="./js/jquery-3.5.1.js"></script>
    <link rel="shortcut icon" href="./images/logo.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title>Banking System</title>
        <style>

        </style>
        
    </head>
    <body style="background-image: linear-gradient(to left,green,white);">
    <?php 
error_reporting(0);
$receiver=$_GET['receiver'];
$amount=$_GET['amount'];
$sender=$_GET['sender'];
echo "<div class='alert alert-success m-5' role='alert'>".$sender." have successfully paid ".$amount." rupees to the ".$receiver."'s account</div>";
?>
<div class="m-5"><a href="./transaction_view_frontend.php" class="btn btn-success" role="button">View Transactions</a>
<a href="./index.php" class="btn btn-info" role="button">Go To Home Page</a>
</div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>