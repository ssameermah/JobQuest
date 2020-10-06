<!DOCTYPE html>
<html>
<head>
    <title>JobQuest</title>
    <link rel="stylesheet" href="EmpMumbai.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
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
                        <li class="nav-item ">
                        <a href="logout.php"></a><button onclick="document.getElementById('first').style.display='block'" class="button">Logout</button>
                        </li>
                      </ul>
                    </div>
            </nav>
    </section>

    <form method="POST" action="details.php" enctype="multipart/form-data">
      <input type="hidden" name="size" value="1000000">
      <div class="industry">
      <div>
        <input type="file" name="image">
      </div>
      <div>
        <textarea id="text" style="background: linear-gradient(0.25turn, #0fd6cc, rgb(20, 153, 170)); color:white;padding-left: 20px;" cols="120" rows="17" name="image_text"  placeholder="Requirements and Skills"></textarea>
      </div>
      <div>
        <button type="submit" class="Pbutton" name="upload">POST</button>
      </div>
      </div>
    </form>
</body>    
</html>