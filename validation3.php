<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
	</head>
	<body>
   <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-dark">
        <div class="container">
            <a href = "./report21.php" class = 'navbar-brand'>
                <span class = 'h3'>APEAMCET</span>
            </a>
            <button class="navbar-toggler"
             type = 'button' 
             data-bs-toggle = 'collapse' 
             data-bs-target = "#navmenu">
             <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id = 'navmenu'>
                <ul class="navbar-nav ms-auto">
					
                    <li class="nav-item">
                        <a href="report21.php" class="nav-link ">REPORT1</a>
                    </li>
					<li class="nav-item">
                        <a href="report31.php" class="nav-link active">REPORT2</a>
                    </li>
					<li class="nav-item">
                        <a href="report41.php" class="nav-link">REPORT3</a>
                    </li>
					<li class="nav-item">
                        <a href="logout.php" class="nav-link">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
		 <?php
       include_once 'dbconfig.php';
       echo "Validation";
       
	$college = $_POST["college"];
    $Branch = array("AID","INF","CSE","AIM");
    $length = count($Branch);
    $category = array("OC" => array("OC_GIRLS_AU","OC_GEN_UR","OC_GEN_AU","OC_GIRLS_UR"),"EWS"=>array("EWS_GEN_AU","EWS_GIRLS_AU"),"BC_A" =>array("BC_A_GIRLS_AU","BC_A_GIRLS_UR",
    "BC_A_GEN_AU","BC_A_GEN_UR"),"BC_B"=>array("BC_B_GIRLS_AU","BC_B_GIRLS_UR","BC_B_GEN_AU","BC_B_GEN_UR"),"BC_C"=> array("BC_C_GIRLS_AU","BC_C_GIRLS_UR","BC_C_GEN_AU","BC_C_GEN_UR"),
    "BC_D"=> array("BC_D_GIRLS_AU","BC_D_GIRLS_UR","BC_D_GEN_AU","BC_D_GEN_UR"),"BC_E"=> array("BC_E_GIRLS_AU","BC_E_GIRLS_UR","BC_E_GEN_AU","BC_E_GEN_UR"),"SC"=>array("SC_GEN_UR","SC_GIRLS_UR","SC_GEN_AU","SC_GIRLS_AU"),
    "ST"=>array("ST_GEN_UR","ST_GIRLS_UR","ST_GEN_AU","ST_GIRLS_AU")
);

    ?>
    <div class="container" style="padding-top:50px;">
   <table class ="table table-striped table-bordered table-hover"  >
    <thead class="bg-primary" style="color:white">
        <tr>
            <th rowspan="2"></th>
            <th colspan="2">AI&DS</th>
            <th colspan="2">IT</th>
            <th colspan="2">CSE</th>
            <th colspan="2">AI&ML</th>
</tr>
<tr>
    <th>Min Rank</th>
    <th>Max Rank</th>
    <th>Min Rank</th>
    <th>Max Rank</th>
    <th>Min Rank</th>
    <th>Max Rank</th>
    <th>Min Rank</th>
    <th>Max Rank</th>
</tr> 

</thead>
<tbody>  
  
     <?php
     foreach($category as $key => $value)
     {
      $res = "'".implode("','",$value)."'";
      ?>
      <tr>
         <td><?php echo $key; ?></td>
         <?php
     for($x=0;$x < $length;$x++){


	$sql = "SELECT max(Ranking),min(Ranking) FROM students WHERE College = '$college' and Branch='$Branch[$x]' and Category in ($res)";
	$result = mysqli_query( $conn,$sql);
   if(!$result ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
   // echo "Query executed successfully<br>";
   ?>
   <?php
  if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
?>
         <td><?php echo $row['min(Ranking)']; ?></td>
         <td><?php echo $row['max(Ranking)']; ?></td>
            <?php
              
      }
      
   }

   else{
      ?>
      <tr colspan = "7">No records found </tr>
      <?php
   }
}
   ?>

   </tr>
   <?php
     }
     ?>
   </div>
</tbody>
</body>
	</html>
