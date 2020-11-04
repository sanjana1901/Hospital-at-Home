<?php
$connect = mysqli_connect("localhost:3307", "root", "", "hah");
$output = '';
error_reporting(0);
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM ailments
  WHERE ailment LIKE '%".$search."%'
  OR symptoms LIKE '%".$search."%'
 ";
}
else
{
 //$query = "SELECT * FROM ailments ORDER BY ailmentID";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table cellpadding="10px" cellpadding="20px" style="font-size: 20px; margin-left:250px; background-color:#FFF0F5; width:900px; border: 1px solid black; border-collapse:collapse;">
    <tr>
     <th>Ailments</th>
     <th>Symptoms</th>
     <th>ID</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $aid=$row['AilmentID'];
  $output .= '
   <tr style="border:1px solid black;">
    <td>'.$row["Ailment"].'</td>
    <td>'.$row["Symptoms"].'</td>
    <td>'.$aid.'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo '<p align="center">No ailment found with the following symptoms. Please consult a doctor.</p>';
}
echo $_GET['submit'];
?>