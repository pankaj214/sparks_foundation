<?php
error_reporting(0);
$con=mysqli_connect('localhost','root','','grip');
$result=mysqli_query($con,"SELECT * FROM `transfers`") or die("Sql query Failed");
$output="";
if(mysqli_num_rows($result)>0)
{
$output='
<tr><th>S.no</th>
<th>Sender\'s name</th>
<th>Sender\'s Current balance</th>
<th>Transfer money</th>
<th>Receiver\'s name</th>
    <th>Receiver\'s current balance</th>
    <th>Transaction date and time</th>
</tr>';
$count=1;
while($row=mysqli_fetch_assoc($result))
{
    $output .="<tr> 
    <td>".$count."</td>
    <td>".$row['transfer_money_username']."</td>
    <td>".$row['transfer_current_balance']."</td>
    <td>".$row['transfer_money']."</td>
    <td>".$row['receiver_money_username']."</td>
    <td>".$row['receiver_current_balance']."</td>
    <td>".$row['date_and_time']."</td>
    </tr>";
$count++;}
echo $output;
}
else{
    echo "<h2>No record found</h2>";
}
?>