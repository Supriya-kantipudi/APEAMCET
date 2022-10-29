<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link rel="stylesheet" href = "CSS/index.css">   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

    <title>Document</title>

</head>
<body>


  <nav class="navbar navbar-light bg-primary navbar-expand-sm fixed-top">
    <div class="container">
        <a class="navbar-brand mt-0 p-0" href="index.html"><img class="logo img-rounded " src="img/vishnu.png" alt="logo" ></a>
    </div>
  </nav>
  
  
  
<header class=" mt-3  bg-primary text-white rounded ">
      <div class="container">
        <div class="col-6">
            <div class = "row  align-items-center justify-content-start">
                <div class = "col">
                    <h1  >MOCK COUNSELLING</h1>
                </div>
             </div>
             <div class="row justify-content-start">
                <div class="col-0 col-md-1">

                </div>
                <div class="col-10 col-md-6 d-grid mt-1">
                    <button type="button" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">LOGIN</button>
                </div>
             </div>
        </div>
        </div> 
    </header>
    
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id = "frm" action="loginvalidation.php" method="post">
              <div class="mb-3">
                <label for="user" class="col-form-label">Username:</label>
                <input type="text" class="form-control" id="user" name="user">
              </div>
              <div class="mb-3">
                <label for="password" class="col-form-label">Password:</label>
                <input type = 'password' name = 'password' class = 'form-control' required>
              </div>
              <div class="modal-footer">
              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
            </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row row-content">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/ai.png" class="d-block img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block mt-0">
                            <h2>ARTIFICIAL INTELLIGENCE</h2>
                            <p>Total Intake : 120</p>
                            <p>Minimum Rank:2940</p>
                            <p>Maximum Rank:9981</p>
                        </div>  
                      </div>
                      <div class="carousel-item">
                        <img src="img/cse.png" class="d-block img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block mt-0">
                            <h2>COMPUTER SCIENCE</h2>
                            <p>Total Intake : 180</p>
                            <p>Minimum Rank:1011</p>
                            <p>Maximum Rank:5013</p>
                        </div>  
                      </div>
                      <div class="carousel-item">
                        <img src="img/it.png" class="d-block img-fluid" alt="...">
                        <div class="carousel-caption d-none d-md-block mt-0">
                            <h2>INFORMATION TECHNOLOGY</h2>
                            <p>Total Intake : 180</p>
                            <p>Minimum Rank:6009</p>
                            <p>Maximum Rank:10934</p>
                        </div>  
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </div> 
        
        <div class="row row-content justify-content-center">
            
            <div class="card col-12 col-md-8" >
                    
                <div class="row card-header" style="background-color:rgb(0, 225, 255) ">
                    <h2 style="color: white;">Enter your Rank to see the eligible colleges</h2>
                </div>
                <div class="card-body">
            <form id="frm" action="test1.php" method = 'post' >
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-3"><label for="rank" class="form-label">Enter your rank:</label></div>
                    <div class="col-12 col-sm-6"><input type = 'number' class="form-control" id = 'rank' placeholder = "Enter your rank" name="rank"> </div>
            </div>
                
            <br>	
            <div class="row justify-content-center">
                <div class="col-12 col-sm-3">
                        <label for="gender" class="form-label">Select your gender:</label>
                    </div>

                        <div class="col-sm-6">
                            
                        <div class = 'form-check form-check-inline'>
                            <input type = 'radio' class = 'form-check-input' value = 'GEN' name = 'gender' id="male">
                            <label for = 'male' class = 'form-check-label'>Male</label>
                        </div>
            
                    
                        <div class = 'form-check form-check-inline'>
                            <input type = 'radio' class = 'form-check-input' value = 'GIRLS' name = 'gender' id="female">
                            <label for = 'female' class = 'form-check-label'>Female</label>
                        
                    </div>
                
                </div>
                </div> 
               
                    
                
                <br>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-3">
                        <label for = 'category' class = 'form-label '>Select your category:</label>
                    </div>
                    <div class="col-12 col-sm-6">
                        <select class="form-control" name = "category">
                            <option value = "OC">OC</option>
                            <option value = "EWS">EWS</option>
                            <option value = "BC_A">BC_A</option>
                            <option value = "BC_B">BC_B</option>
                            <option value = "BC_C">BC_C</option>
                            <option value ="BC_D">BC_D</option>
                            <option value = "BC_E">BC_E</option>
                            <option value = "SC">SC</option>
                            <option value = "ST">ST</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-3">
                        <label class="form-label" for = 'courses'>Select courses:</label>
                    </div>
                    <div class="col-12 col-sm-6">
                        <select class = 'form-select' id = 'courses' name="courses">
                            <option value = 'CSE' >CSE</option>
                            <option value = 'AIM'>AIML</option>
                            <option value = 'AID'>AIDS</option>
                            <option value = 'INF'>IT</option>
                        </select>
                       </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-sm-3">

                    </div>
                    <div class="col-sm-6 d-grid">
                        <button  type="submit" class = "btn btn-success btn-block">Submit</button>
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

        
</body>
</html>