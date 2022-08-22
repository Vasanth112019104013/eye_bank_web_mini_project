<?php
require "config.php";
echo "click <a href=authourize.php> here </a> to go back";
$query="select * from donar";
$result_qry=$conn->query($query);
?>


<html>
<body>
<table align="center" border="1px" style="width:1200px;line-height:30px;">
<tr>
<t>
<th>Name</th>
    <th>Gender</th>
    <th>Age</th>
    <th>Bloodgroup</th>
    <th>Email</th>
<th>Phonenumber</th>
<th>Doornumber</th>
<th>Street</th>
<th>Town</th>
    <th>Pincode</th>
    <th>State</th>
</t>
<?php
    if($result_qry->rowCount()>0)
    {
        $result=$result_qry->fetchAll();
      foreach($result as $res_arr)
      {
    
?>
<tr>
<td><?php echo $res_arr['Name']; ?></td>
    <td><?php echo $res_arr['Gender']; ?></td>
    <td><?php echo $res_arr['Age']; ?></td>
    <td><?php echo $res_arr['Bloodgroup']; ?></td>
    <td><?php echo $res_arr['Email']; ?></td>
<td><?php echo $res_arr['Phonenumber']; ?></td>
<td><?php echo $res_arr['Doornumber']; ?></td>
<td><?php echo $res_arr['Street']; ?></td>
<td><?php echo $res_arr['Town']; ?></td>
    <td><?php echo $res_arr['Pincode']; ?></td>
    <td><?php echo $res_arr['State']; ?></td>
</tr>
<?php
      }
}
?>
</table>
</body>
</html>
