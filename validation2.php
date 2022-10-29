 <html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
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
                        <a href="report21.php" class="nav-link active">REPORT1</a>
                    </li>
					<li class="nav-item">
                        <a href="report31.php" class="nav-link">REPORT2</a>
                    </li>
					<li class="nav-item">
                        <a href="report4.html" class="nav-link">REPORT3</a>
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
		$year = $_POST["year"];
		$branch = $_POST["group"];
		 
   if($branch == 'ALL'){
	$sql = " SELECT Applicantname,Ranking,Branch,College,Caste from students where  College ='VISW' order by Branch";
}
else{
	$sql =  " SELECT Applicantname,Ranking,Branch,College,Caste from students where  College ='VISW' and  Branch ='$branch'  order by Ranking";
}
   $result = mysqli_query( $conn,$sql);
   
   if(! $result ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
   echo "Query executed successfully<br>";
   
   ?>
   <div class="container" style="padding-top:50px;">
   <table class ="table table-striped table-bordered table-hover ">
      <thead class = "bg-primary" style="color:white">
         <th>SNO</th>
         <th>Applicant Name</th>
         <th>Ranking</th>
         <th>Caste</th>
         <th>Branch</th>
         <th>College</th>
</thead>
<tbody>
   <?php
   $sno = 1;
   if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
            
         ?>
         <tr>
            <td><?php echo $sno; ?></td>
            <td><?php echo $row['Applicantname']; ?></td>
            <td><?php echo $row['Ranking']; ?></td>
            <td><?php echo $row['Caste']; ?></td>
            <td><?php echo $row['Branch']; ?></td>
            <td><?php echo $row['College']; ?></td>
      </tr>
               <?php
               $sno = $sno + 1;
      }
      
   }
   else{
      ?>
      <tr colspan = "6">No records found </tr>
      <?php
   }
   ?>
   


</div>

  


</tbody>
</body>
</html>