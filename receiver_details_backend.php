<?php 
error_reporting(0);
$con=mysqli_connect('localhost','root','','grip');
$receiver_name=$_POST['receiver'];
$sender_name=$_POST['sender'];
$transfer_money=$_POST['amount'];

$query_receiver=mysqli_query($con,"SELECT * FROM `customers` WHERE `name` = '$receiver_name' ");
$query_sender=mysqli_query($con,"SELECT * FROM `customers` WHERE `name` = '$sender_name' ");
if(mysqli_num_rows($query_receiver)>0 && mysqli_num_rows($query_sender)>0){
    while($row=mysqli_fetch_assoc($query_receiver)){
        while($rows=mysqli_fetch_assoc($query_sender)){
     if($rows['current_balance']>=$transfer_money){
         $current_balance_receiver=$row['current_balance']+$transfer_money;
         $current_balance_sender=$rows['current_balance']-$transfer_money;
     }
     else 
     if($rows['current_balance']<$transfer_money){
         echo '0';
         return 0;
     }

}}
}
          $query=mysqli_query($con,"UPDATE `customers` SET `current_balance`='$current_balance_receiver' WHERE `name`='$receiver_name'");

         $query1=mysqli_query($con,"UPDATE `customers` SET `current_balance`='$current_balance_sender' WHERE `name`='$sender_name'");
         
         date_default_timezone_set('Asia/Kolkata');
         
         $date = date('d-m-y h:i:s');
         
         $query2=mysqli_query($con,"INSERT INTO `transfers`(`transfer_money_username`,`transfer_current_balance`,`transfer_money`,`receiver_money_username`,`receiver_current_balance`,`date_and_time`) VALUES('$sender_name','$current_balance_sender','$transfer_money','$receiver_name','$current_balance_receiver','$date')");
         if($query && $query1 && $query2){
       echo '1';
   }

 
   

?>