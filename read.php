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
   <div class="crud">
    <div id="col1">
      <form action="" method="post"><br><br>
        <label for="search1">enter medicine name</label>
        <input type="text" name="medicine" id="search1"><br><br>
        <label for="search2">enter type of illness</label>
        <input type="text" name="illness" id="search2"> <br><br>
        <input type="submit" value="submit">
        </form>
    </div>
  <div id="col2">
    <p class="ops"><a href="createapp.php">create</a></p>
    <p class="ops"><a href="#">read</a></p>
    <p class="ops"><a href="updateapp.php">update</a></p>
    <p class="ops"><a href="delete.php">delete</a></p>
  </div>
    
  </div>
  <?php
  include'connecting.php';
   $r1=$_POST['medicine'];
   $r2=$_POST['illness'];
   $resql="select * from pharmacist where drug_name='$r1' or drug_ailment='$r2'";
  $result= mysqli_query($conn,$resql);
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
  ?>
</body>
</html>