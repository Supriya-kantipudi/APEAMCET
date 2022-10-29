<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" >
	<link rel="stylesheet" href="CSS/report31.css">

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
    <div class="container">
     <div class="row row-content">
         <div class="col-12 d-flex mt-5 justify-content-center" >   
            <div class="card" style="width:40rem; height:20rem;">
                <div class="card-header">
                    <h5 class="card-title">Rank Statistics</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Min-max Ranks based on branch and Category</h6>
                </div>
                <div class="card-body">
                <form action = "validation3.php" method = "post" style="min-height: 400px;">
                <div class="form-row justify-content-center">
                <div class="col-sm-8">
                <label for="college" class="form-label" style="padding-top:20px;">COLLEGE:</label>
                <select class="form-control" name = "college">
                    <option value="VISW">VISW</option>
                    <option value="VITB">VITB</option>
                    <option value="SRKR">SRKR</option>
                </select>
                </div>
                </div>
            <br>
            <div class="form-row justify-content-center">
            <div class="col-sm-8">
            <button type = "submit" class="btn btn-primary btn-block">submit</button>
            </div>
            </div>
            </form>

            </div>
        </div>
    </div>
</div>

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