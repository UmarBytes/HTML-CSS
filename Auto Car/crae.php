<?php

$name=$_REQUEST['name'];
$lname=$_REQUEST['lname'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$date=$_REQUEST['dofb'];
$pas=$_REQUEST['pas'];

echo "<table border=1>
<tr>
    <th>Name</th>
    <th>Last Name</th>
    <th>Gemder</th>
    <th>Email</th> 
    <th>Date Of Birth</th> 
    <th>Card Number</th>

</tr>
<tr>
    <td>".$name."</td>
    <td>".$name."</td>
    <td>".$phone."</td>
    <td>".$email."</td>
    <td>".$date."</td>
    <td>".$pas."</td>
</tr>
    </table>";

?>