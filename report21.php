<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
	<link rel="stylesheet" href = "CSS/report21.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
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
                        <a href="report41.php" class="nav-link">REPORT3</a>
                    </li>
					<li class="nav-item">
                        <a href="logout.php" class="nav-link">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row row-content">
         <div class="col-12 d-flex mt-5 justify-content-center" >   
            <div class="card" style="width:40rem;">
                <div class="card-header">
                    <h5 class="card-title">Allotment List</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Data of Svecw According to Branch</h6>
                </div>
                <div class="card-body">
                <div class="container" style="margin-top:30px;">
		<form id = "frm" action="validation2.php" method="post" >
		<div class="form-row justify-content-center">
			
			<div class="col-sm-8">
			<label for = "year" class="form-label">YEAR:</label>
			<select name = "year" class="form-control">
			<option value = "2021">2021</option>
			</select>
		
		</div>
		</div>
		<br>
		<div class="form-row justify-content-center">
		<div class="col-sm-8">
		<label for= "group" class="form-label">Group:</label>
		<select name = "group" class="form-control">
		<option value = "ALL">ALL</option>
		<option value = "AID">AID</option>
		<option value = "INF">INF</option>
		<option value = "CSE">CSE</option>
		<option value = "AIM">AIM </option>
	</select><br>
</div>
</div>
<div class="row justify-content-center">
	
	<div class="col-12 col-sm-4 order-sm-last">
	<button type = "submit" id = "s1" class = "btn btn-primary btn-block" onclick="change1()">Submit</button><br>
</div>

<div class="col-12 col-sm-4 order-sm-first">
	<button type = "button" id = "excel" class = "btn btn-success btn-block" onclick="change()">GET EXCEL</button>
</div>
</div>
</form>

</div>
	
                
            </div>
        </div>
    </div>
</div>
<script>
	function change()
	{
		
			document.getElementById("frm").setAttribute("action","excel.php");
			document.getElementById("excel").setAttribute("type","submit");
			
			
	}
	function change1(){
		document.getElementById("frm").setAttribute("action","validation2.php")
		
	}
	
	</script>
    <div class="row row-content" >
      <footer style="background:black">
      <div class="row justify-content-between">
         <div class="col-12 col-sm-3">
       <p><span style="color:white">Email to :</span> <a href="mailto:20b01a5419@svecw.edu.in">20b05419@svecw.edu.in</a></p>
      </div>
      <div class="col-12 col-sm-2">
        <p><span style="color:white">Contact :</span> <a href="tel:9949994513">9949994513</a></p>
       </div>
      </div>
      <div class="row" >

    
      <p style="color:white" class="text-center">© Copyright   Artificial Intelligence and Data Science</p>
      
             
             
    </div>             
  </footer>
</div>
</div>

</body>

</html>