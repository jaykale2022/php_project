<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <link rel="stylesheet" href="design.css">
    <header>
    <marquee  direction="right"> <h1>crud app</h1>
    </marquee>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <a href=""><span class="nav">HOME</span></a>
    <a href=""><span class="nav">ABOUT US</span> </a>
    <a href=""><span class="nav">PRACTICE AREAS</span> </a>
    <a href=""><span class="nav">CLIENT REGISTRATION</span></a> 
  </header>
  <div id="crud">
  <div id="col1">
<form action=""method="post">
  <h1>enter new medicine,price,illness</h1><br><br>
<label for="change1">enter new medicine name</label>
<input type="text" name="medicine" id="change1"><br><br>
<label for="change2">enter new price</label>
<input type="text" name="price" id="change2"><br><br>
<label for="change3">enter new illness name</label>
<input type="text" name="illness" id="change3"><br><br>
<input type="submit" value="submit">
</form>


  </div>
<div id="col2">
    <p class="ops"><a href="./createapp.php">create</a></p>
    <p class="ops"><a href="./read.php">read</a></p>
    <p class="ops"><a href="#">update</a></p>
    <p class="ops"><a href="./delete.php">delete</a></p>
  </div>
    
  </div>
  <?php
  include'connecting.php';

  
  $s1=$_POST['medicine'];
  $s2=$_POST['price'];
  $s3=$_POST['illness'];
  $dsql="update pharmacist set drug_price='$s2' where drug_name='$s1' "; 
  // drug_name='$s3'
  $result=mysqli_query($conn,$dsql);
  if($result)
  {
     echo"data submitted";
 
  }
  else
  {
    echo"query failed!";
  }
  $upsql="select * from pharmacist";
  $result=mysqli_query($conn,$upsql);
  if($result)
  {
    $i=0;
     while($i<mysqli_num_rows($result)){
      $row=mysqli_fetch_assoc($result);
      echo $row['drug_name'].$row['drug_price'].$row['drug_ailment' ];
      echo"<br>";
      $i++;
     }
  }
  else
  {
    echo"query failed!";
  }
  ?>
</body>
</html>