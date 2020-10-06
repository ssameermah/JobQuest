<html>
<head>
    <title>JobQuest</title>
    <link rel="stylesheet" href="First.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <section id="nav-bar"> 
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="./HOME.html"><img src="./images/Job.png" alt="Logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                          <button onclick="document.getElementById('third').style.display='block'" class="button"></a>Employeer Login</button>
                        </li>
                        <li class="nav-item ">
                          <button onclick="document.getElementById('first').style.display='block'" class="button"></a>Login</button>
                        </li>
                        <li class="nav-item">
                          <button onclick="document.getElementById('second').style.display='block'" class="button"></a>Sign Up</button>
                        </li>
                        
                      </ul>
                    </div>
                  </nav>
   
    </section>



<!-----------EMPLOYEER LOGIN------------->
    <div id="third" class="modal">
      <form id="login-pg" action="EmpValidation.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('third').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="Images/Job.png" alt="Avatar" class="avatar">
        </div>
    
        <div class="container">
          <input type="text" placeholder="Enter Username" name="usname" required>
          <input type="password" placeholder="Enter Password" name="pasw" required>
            
          <button type="submit">Login</button>
          <label>
            <p style="color: white"><input type="checkbox" checked="checked" name="remember" style="padding-top: 5px">Remember me</p> 
          </label>
        </div>
    
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('third').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw"><a href="#">Forgot password?</a></span>
        </div>
      </form>
    </div>

<!-----------LOGIN------------->
    <div id="first" class="modal">
      <form id="login-pg" action="Validation.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('first').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="Images/Job.png" alt="Avatar" class="avatar">
        </div>
    
        <div class="container">
          <input type="text" placeholder="Enter Username" name="uname" required>
          <input type="password" placeholder="Enter Password" name="psw" required>
            
          <button type="submit">Login</button>
          <label>
            <p style="color: white"><input type="checkbox" checked="checked" name="remember" style="padding-top: 5px">Remember me</p> 
          </label>
        </div>
    
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('first').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw"><a href="#">Forgot password?</a></span>
        </div>
      </form>
    </div>
<!-----------REGISTRATION------------->    
    <div id="second" class="modal">
      <form id="login-pg" action="Registration.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('second').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="Images/Job.png" alt="Avatar" class="avatar">
        </div>
    
        <div class="container">
          <input type="text" placeholder="Username" name="uname" required>
          <input type="password" placeholder="Password" name="psw" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
          <input type="email" placeholder="Email Id" name="EmailId" required>
          
            
          <button type="submit">Register</button>
          <label>
          </label>
        </div>
    
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('second').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw"><p class="Message" style="color: #198A94">Already Registered? <a href="#" style="color: #198A94">Login</a></p></span>
          
        </div>
      </form>
    </div>
<!-----------BannerSection----------->
<section id="banner">
<div class="container">
<div class="row">
<div class="col-md-6 text-centre">
<p class="promo-title"> Find Your Perfect Job</p>
<h4>JobQuest works when talented, passionate people come together.</h4>
<p>Come help JobQuest work. We are looking to grow our teams with people who share our energy and enthusiasm for creating the best experience for job seekers.</p>
<h2>We help people get job</h2>
</div>
<div class="col-md-6 text centre">
<img src="./images/Office6.png" alt="OfficeImage6" class="img-fluid">
</div>
</div>
</div>
</section>

<!-----------------Service-1------------------>
<section id="Service-1">
  <div class="container">
    <div class="row text centre"> 
      <div class="col-md-4 service-1">
        <img src="https://www.careerbuilder.com/cdn/assets/us/icons/icon-Salary-2b5df140f6266c7b3496105f957eef1cd675dda5bbbd26a4e97bd1ab493ac9c0.svg" alt="Icon quickapply" class="service1-img">
        <h4>Salary Tools</h4>
        <p>See how your salary compares to other with the same job title in your area. Not only can you comparre your salary, but you can also see what skills you are missing to earn more money </p> 
      </div>
      <div class="col-md-4 service-1">
        <img src="https://www.careerbuilder.com/cdn/assets/us/icons/icon-QuickApply-80b5c549407cea9fea130511b2ef66732971efc6cb5dbcb6d5eefeeaff003c6a.svg" alt="Icon quickapply" class="service1-img">
        <h4>Quick Apply</h4>
        <p>Easily apply to multiple jobs with one click! Quick Apply shows you recommended jobs based off your most recent search and allows you to apply to 25+ jobs in a matter of seconds!</p> 
      </div>
      <div class="col-md-4 service-1">
        <img src="https://www.careerbuilder.com/cdn/assets/us/icons/icon-JobAlertEmails-43d3b2768dd1480ea2f58272b57071d400517f4df50d1af19b4213ef9477ccb9.svg" alt="Icon quickapply" class="service1-img">
        <h4>Job Alert Emails</h4>
        <p>Keep track of positions that you're interested in by signing up for job alert emails. You'll be notifed via email when new jobs are posted in that search. </p> 
      </div>
    </div>
  </div>
</section>

<!--------------Service-2---------------->
<section id="Service-2">
    <div id="row">
      <div id="column">
            <a class="blog" href="https://www.careerbuilder.com/advice/1875" target="blank_"><img class="Image1" src="https://hiring-assets.careerbuilder.com/media/attachments/careerbuilder-medium-4115.jpg?1556222580" alt="Careerbuilder medium 4115" class="service2-img"></a>
              <div class="blog-content center"></div>
              <div class="top-sub-title">Job Trends</div>
              <h5 class="service2-link1">3 things to know about the August 2019 jobs report</h5>
              <div class="link-cta">Read Article</div>
              <br>
      </div>
      <div id="column">
            <a class="blog" href="https://www.careerbuilder.com/advice/1334" target="blank_"><img class="Image1" style="padding-top: 5px" src="https://hiring-assets.careerbuilder.com/media/attachments/careerbuilder-medium-4124.jpg?1560273237" alt="Careerbuilder medium 4124"></a>
              <div class="blog-content center"></div>
              <div class="top-sub-title">Who's Hiring</div>
              <h5 class="service2-link2">Companies hiring this week</h5>
              <div class="link-cta">Read Article</div>
              <br>
      </div>
      <div id="column">
            <a class="blog" href="https://www.careerbuilder.com/advice/1819" target="blank_"><img class="Image1" src="https://hiring-assets.careerbuilder.com/media/attachments/careerbuilder-medium-4134.jpg?1568311785" alt="Careerbuilder medium 4134"></a>
              <div class="blog-content center"></div>
              <div class="top-sub-title">How to Search</div>
              <h5  class="service2-link3">One easy app for your entire job search</h5>
              <div class="link-cta">Read Article</div>
              <br>

      </div>
    </div>
  </div>
</section>

<!------------Copyrigft-Section-------------->
<section id="Copyright">
  <div class="container text-centre">
      <h4 class="title">@copyright</h4>
      
    <div class="row text-centre">
      <div class="col-md-4">   
        <p class="Site">Jobquest.co.in</p>
        <p>Main office:110/03, New Atlanta Centre,
                       Goregaon(E) , Mumbai-400 043.</p>
        <p>Contact No.:- 022 3456 3467 / 022 3456 3476
        </p>
      </div>
    </div>
  </div>
</section>

    

</body>
</html>