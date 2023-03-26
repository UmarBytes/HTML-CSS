<?php

$name=$_REQUEST['name'];
$fname=$_REQUEST['fname'];
$gender=$_REQUEST['gender'];
$email=$_REQUEST['email'];
$pin=$_REQUEST['pincode'];
$cardnumber=$_REQUEST['cardNumber'];
$cvv=$_REQUEST['cvv'];

echo "<table border=1>
<tr>
    <th>Name</th>
    <th>Father Name</th>
    <th>Gemder</th>
    <th>Email</th> 
    <th>Pincode</th> 
    <th>Card Number</th>
    <th>CVV</th>

</tr>
<tr>
    <td>".$name."</td>
    <td>".$fname."</td>
    <td>".$gender."</td>
    <td>".$email."</td>
    <td>".$pin."</td>
    <td>".$cardnumber."</td>
    <td>".$cvv."</td>
</tr>
    </table>";

?>