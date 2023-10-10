<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="style.css">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;1,100&display=swap');

  #welcome{
  color: #6495ED;
  
    /* background-color: aqua; */
    /* width: 50%; */
    

    /* text-align:justify; */
    text-align:start;
    font-size: xx-large;
    font-weight: bold;
    padding-bottom: 10px;
    margin-left: 50px;
}


#welcomep{
    /* background-color: aqua; */
    /* width: 50%; */
    

    /* text-align:justify; */
    text-align:start;
    font-size: large;
    margin-left: 50px;
    /* padding: 50px; */
}
.welcomep{
    /* background-color: aqua; */
    /* width: 50%; */
    

    /* text-align:justify; */
    text-align:start;
    font-size: large;
    margin-left: 50px;
    /* padding: 50px; */
}
.welcome{
    color: #6495ED;
  
  /* background-color: aqua; */
  /* width: 50%; */
  

  /* text-align:justify; */
  text-align:start;
  font-size: x-large;
  font-weight: bold;
  padding-bottom: 10px;
  margin-left: 50px;
}
#getstarted{
  margin-left: 80px;
  /* margin-top: 100px; */
  
}

</style>


<body>
    
<?php
include "navber.php";
?>
<hr>

<section class="my-5">
<div class="container-fluid">
    <div class="row">
    
        <div class="col-lg-6 col-md-6 col-12">
        <h2 id="welcome">
        Expand your job hunting footprint
        </h2>  
        <h5 class="welcome">Grab attention. Land your dream job!
</h5>
        <p id="welcomep">At Talentprise, we simplified the job search process and made it exciting for job seekers. Build an outstanding career you deserve. Expand your search globally. Tell employers about your value add and direct recruiters’ attention. Discover hidden job vacancies with local, regional, and global 500 employers. Secure the best job.
        </p>
        <br>
        <p class="welcomep" >
        Joining the global Talentprise pool is worth all the resumes and cover letters in the world!
        </p>

        <a href="register.php" class="btn btn-success" id="getstarted">Sign Up</a>        
    
    </div>
    <div class="col-lg-6 col-md-6 col-12">
            <img src="./image/about1.JPG" alt="" height="450px" width="700px">
            </div>
    
</div>
        </div>

</section>
<hr>
<section class="my-5">
<div class="container-fluid">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
            <img src="./image/about2.JPG" alt="" height="300px" width="600px">
        </div>

    <div class="col-lg-6 col-md-6 col-12">
        <h2 id="welcome">
          Put Your skills On Display
        </h2>  
        <p id="welcomep">Endless Job Vacancies Await.
Unlock your potential with our AI-driven solution, effectively showcasing your skills to top-tier employers and uncovering hidden job vacancies.Endless Job Vacancies Await. Unlock your potential with our AI-driven solution, effectively showcasing your skills to top-tier employers and uncovering hidden job vacancies.

SIGN UP
        </p>

        
        </div>

        </div>
        </div>

</section>

<hr>

<section class="my-5">
<div class="container-fluid">
    <div class="row">

    <div class="col-lg-6 col-md-6 col-12">
    <h2 id="welcome">
    Convert Job Search
        </h2>  
        <h5 class="welcome">Challenges to best opportunities

</h5>
   <p id="welcomep">With an ocean of candidates applying for job vacancies, it is quite challenging to demonstrate competitive advantages in two pages resume. Finding a Job is more tedious than ever
        </p>
        <p>

        </p>

        
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <img src="./image/about3.JPG" alt="" height="300px" width="600px">
        </div>

        </div>
        </div>

</section>




<?php
include "footer.php";
?>


</body>
</html>