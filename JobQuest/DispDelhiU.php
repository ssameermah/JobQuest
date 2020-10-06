<!DOCTYPE html>
<html>
<head>
    <title>JobQuest</title>
    <link rel="stylesheet" href="Mumbai.css">
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
                        <li class="nav-item ">
                        <a href="logout.php"></a><button onclick="document.getElementById('first').style.display='block'" class="button">Logout</button>
                        </li>
                      </ul>
                    </div>
            </nav>
   
    </section>
    <section id="Accenture">
    <table height="400", width="100%",border="100%", style="padding-left:2%">
    <?php
    
        $db = mysqli_connect("localhost","root","","job_details");
        $sql = "select * from delhi_details";
        $result = mysqli_query($db,$sql);
        while ($row = mysqli_fetch_array($result)) 
        {
            echo "<div id='img_div'>";
            echo "<img src='images/".$row['image']."' >";
            echo "<font color='white'><p>".$row['text']."</p>";
            echo "</div>";
        }
    ?>
	</table>
            
</body>    
