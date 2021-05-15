
<!DOCTYPE html>
<html>
    <head>
    <title>Banking System</title>

    <script src="./js/jquery-3.5.1.js"></script>
    <link rel="shortcut icon" href="./images/logo.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
            * {
  box-sizing: border-box;
}
input[type=text],input[type=number],select{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}



.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
        </style>
        <script>
        $(document).ready(function(){
          $('#submit').on('click',function(){
            var receiver=$('#receiver').val()
          var account=$('#account').val()
          var ifsc=$('#ifsc').val()
          var sender=$('#sender').val()
          var amount=$('#amount').val()
          
          if(receiver=="" || account=="" || ifsc=="" || sender=="" || amount==""){
$('.status').html('<div class="alert alert-warning" role="alert">Please fill all the details !!</div>')
setTimeout(()=>{$('.status').html('')},2000)
          }
          else{


            $.ajax({
              method:'POST',
              url:'./receiver_details_backend.php',
              data:{receiver:receiver,sender:sender,amount:amount},
              success:function(data)
              {
                if(data=='1'){
                  window.location.href='./transaction_success_page.php?receiver='+receiver+'&amount='+amount+'&sender='+sender;
                $('#sender').val('')
                $('#amount').val('')
              }
              else{
                $('#sender').val('')
                $('#amount').val('')
                $('.alert').show()
                $('.span').html(amount)
                setTimeout(()=>{$('.alert').hide()},5000)
                
              }
            }
            })
          }
        })
      })
        </script>
    </head>
    <body>
        <br/>
    <h1 class="typography text-center"><u>RECEIVER DETAILS</u></h1>



    <?php 
error_reporting(0);
$con=mysqli_connect('localhost','root','','grip');
$id=$_GET['id'];
$result=mysqli_query($con,"SELECT * FROM `customers` WHERE `id`= '$id' ") or die("Sql query Failed");
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){?>

        <div class="row">
        <div class="column">
          <img src="./images/payment.jpg" style="width:100%">
          <div class="status m-5"></div>
          <div class="alert alert-danger" style="display:none;" role="alert">You can't pay <span class="span"></span> rupees because amount is greater than your current_balance</div>
        </div>
        <div class="column">
    <h4 class="typography text-center">Transfer Money</h4>
          <form action="" id="form" method="POST">
          <label for="receiver">Receiver's Name:</label>
          <input type="text" id="receiver" name="receiver" readonly value="<?php echo $row['name'];?>"/>
           
            <label for="account">Receiver Account number:</label>
            <input type="text" id="account" name="account" readonly value="<?php echo $row['account_number'];?>"/>
           
            <label for="ifsc">Receiver IFSC_code:</label>
            <input type="text" id="ifsc" name="ifsc" readonly value="<?php echo $row['ifsc_code'];?>"/>
            <label for="sender">Sender's Name:</label>
          <?php 
    }}
          $result1=mysqli_query($con,"SELECT * FROM `customers` WHERE `id` NOT IN ('$id') ") or die("Sql query Failed");
if(mysqli_num_rows($result1)>0){
      echo "<select id='sender' name='sender'>
      <option value=''></option>";
      while($rows=mysqli_fetch_assoc($result1)){

    echo "<option value='".$rows['name']."'>".$rows['name']."</option>";
    
  }
  echo "</select>";
}
          ?>



            <label for="amount">Amount:</label>
            <input type="number" min="100" id="amount" name="amount" required placeholder="Enter amount"/>
            <input type="button" class="btn btn-success" id="submit" name="submit" value="Proceed"/>
          </form>
        </div>
      </div>
  



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>