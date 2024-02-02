<html>
    <head>
        <title>display</title>
</head>
<body>
    <table border="2">
        <tr>
        <th>Name</th>
        <th>Tel</th>
        <th>Email</th>
</tr>



<?php 
include("db_connect.php");

$query = "SELECT * FROM users";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


//echo "$total";

if($total!==0){
   
    while($result=mysqli_fetch_assoc($data))
      { echo"
     <tr>
      <th>". $result['name']."</th>
      <th>". $result['tel']."</th>
      <th>". $result['email']."</th>
     </tr>
    ";
   }
}
else{
    echo " No records found";
}
?>
</table>
</body>
</html>