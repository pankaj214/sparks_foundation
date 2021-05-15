<!DOCTYPE html>
<html>
    <head>
    <title>Banking System</title>

    <script src="./js/jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="shortcut icon" href="./images/logo.jpg" />
<style>
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;

  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

 
   

</style>
<script>
   function loadtable(){
        $.ajax({
            url:"./transaction_view.php",
            type:"POST",
            success:function(data){
                $('#table').html(data);
            }
        });
        }
        loadtable()
</script>
    </head>
    <body>
        <br/>
        <h1 class="typography text-center"><u>TRANSACTIONS</u></h1>
        <br/>
        <a href="./view_customers.php" class="btn btn-success" style="margin-left:45%;" role="button">View All Customers</a>
   <br/> <br/><table class="table" id="table" >
 
</brtable>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
     </body>
</html>