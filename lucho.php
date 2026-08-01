<?php 
 if (isset($_GET["submit"])) {
    $fullname= $_GET["fullname"];
    $address= $_GET["address"];
    $course= $_GET["course"];
    $year= $_GET["year"];
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assigment</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
 <form action="" method="get">
    <img src="logo.png" alt="maelezo">
    <label for="fullname">FULLNAME: </label>
    <input type="text" name="fullname" placeholder="fullname" required><br><br>
    <label for="fullname">ADDRESS: </label>
    <input type="text" name="address" placeholder="fullname" required><br><br>
    <label for="fullname">COURSE: </label>
    <input type="text" name="course" placeholder="fullname" required><br><br>
    <label for="fullname">YEAR: </label>
    <input type="number" name="year" placeholder="fullname" required><br><br>
    <button type="submit" name="submit">SAVE</button>
 </form>
  

<table>
    <tr>
        <th>FULLNAME</th>
        <th>ADDRESS</th>
        <th>COURSE</th>
        <th>YEAR</th>
    </tr>
    <tr>
        <td><?php if (isset($fullname)) {
            echo $fullname; }
            ?></td>
        <td><?php if (isset($address)) {
            echo $address; }
            ?></td>
        <td><?php if (isset($course)) {
            echo $course; }
            ?></td>
        <td><?php if (isset($year)) {
            echo $year; }
            ?></td>
    </tr>
</table>
    
</body>
</html>