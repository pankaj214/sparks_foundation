<?php
error_reporting(0);
$con=mysqli_connect('localhost','root','','grip');
$result=mysqli_query($con,"SELECT * FROM `customers`") or die("Sql query Failed");
$output="";
if(mysqli_num_rows($result)>0)
{
$output='
<tr><th>S.no</th>
<th>Name</th>
<th>Email</th>
    <th>Contact_number</th>
    <th>IFSC_code</th>
    <th>Current balance</th>
    <th>Action</th>
</tr>';
$count=1;
while($row=mysqli_fetch_assoc($result))
{
    $output .="<tr> 
    <td>".$count."</td>
    <td>".$row['name']."</td>
    <td>".$row['email']."</td>
    <td>".$row['contact_number']."</td>
    <td>".$row['ifsc_code']."</td>
    <td>".$row['current_balance']."</td>
    <td><a class='btn btn-success' href='./receiver_details.php?id=".$row['id']."' id='proceed'>View More...</a></td>
    </tr>";
$count++;}
echo $output;
}
else{
    echo "<h2>No record found</h2>";
}
?>