<title>CSEFEST 2k23</title>
<style>
.bgImage {
    background-image: url(images/cs03.jpg);
    background-size: cover;
    background-position: center center;
    height: 650px;
    margin-bottom: 25px;
}

    #scale-up-center {
    animation: scale-up-center 0.7s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
}
@keyframes scale-up-center {
  0% {
    transform: scale(0.5);
  }
  100% {
    transform: scale(1);
  }
}

.navbar{
    width: 100%s;
}

#shake-horizontal {
    animation: shake-horizontal 1s cubic-bezier(0.455, 0.030, 0.515, 0.955) 2 both;
}

@keyframes shake-horizontal {
  0%,
  100% {
    transform: translateX(0);
  }
  10%,
  30%,
  50%,
  70% {
    transform: translateX(-10px);
  }
  20%,
  40%,
  60% {
    transform: translateX(10px);
  }
  80% {
    transform: translateX(8px);
  }
  90% {
    transform: translateX(-8px);
  }
}
 .navbar {
  font-size:18px;
}


</style>
<header id="kenburns-top" class="bgImage" > 
    <nav class="navbar" >
        <div class="container">
        <div class="navbar-header">
               
                <a id="shake-horizontal" class = "navbar-brand">
                   <h2>CSEFEST 2k23</h2>
                </a>
        </div>
       
            <ul class="nav navbar-nav navbar-right">
                    <li><a href = "index.php"><strong>Home</strong></a></li>
                    <li><a href = "register.php"><strong>Register</strong></a></li>
                    <li><a href = "contact.php"><strong>Contact Us</strong></a></li>
                    <li><a href = "aboutus.php"><strong>About us</strong></a></li>
                    <li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "login_form.php">Login <span class = "glyphicon glyphicon-log-in"></span></a></li>

            
                
                
            </ul>
        </div>
    </nav>
    <div id="scale-up-center" class = "col-md-12">
        <div class = "container">
            <div class = "jumbotron">
                <h1><strong>Explore<br></strong> Your Favourite Event</h1>
                <p style="font-style: bold">"Limitation-It's just your imagination,so just stop thinking about limitation and think about your goal and run towards it to acheive the peak of your goal:)"</p>
                <br>
                <br><div class="browse d-md-flex col-md-14" >
                <div class="row">
                  
            </div>
        </div>
    </div>
</header>