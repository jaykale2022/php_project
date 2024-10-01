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
  <h1>Enter medicine name to be deleted</h1><br><br>
  <label for="del1">enter medicine name</label>
  <input type="text" name="name1" id="del1"><br><br>
  <label for="del2">enter illness or disease</label>
  <input type="text" name="name2" id="del2"><br><br>
  <input type="submit" value="submit">
  </form>

 </div>
<div id="col2">
    <p class="ops"><a href="./createapp.php">create</a></p>
    <p class="ops"><a href="./read.php">read</a></p>
    <p class="ops"><a href="./updateapp.php">update</a></p>
    <p class="ops"><a href="#">delete</a></p>
  </div>
    
  </div>
  <?php
  
  include'connecting.php';

  
  $s1=$_POST['name1'];
 
  $s3=$_POST['name2'];
  $desql="delete from pharmacist where drug_name='$s1' ";
  $result=mysqli_query($conn,$desql);
  if($result)
  {
     echo"data submitted";
   
  }
  else
  {
    echo"query failed!";
  }
  $desql1="select * from pharmacist";
  $result=mysqli_query($conn,$desql1);
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
