<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CSEFEST 2k23</title>
        
        <?php require 'utils/styles.php';?>
    <style>
          .float{
    position:fixed;
    width:60px;
    height:60px;
    bottom:40px;
    right:40px;
    background-color:#25d366;
    color:#FFF;
    border-radius:50px;
    text-align:center;
  font-size:30px;
    box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.tracking-in-expand{
    padding-top: 10%;
}
.my-float{
    margin-top:16px;
}
    
#vibrate-1 {
    animation: vibrate-1 0.6s linear infinite both;
}
@keyframes vibrate-1 {
  0% {
    transform: translate(0);
  }
  20% {
    transform: translate(-2px, 2px);
  }
  40% {
    transform: translate(-2px, -2px);
  }
  60% {
    transform: translate(2px, 2px);
  }
  80% {
    transform: translate(2px, -2px);
  }
  100% {
    transform: translate(0);
  }
}

.tracking-in-expand {
    animation: tracking-in-expand 2s cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
}
@keyframes tracking-in-expand {
  0% {
    letter-spacing: -0.5em;
    opacity: 0;
  }
  40% {
    opacity: 0.6;
  }
  100% {
    opacity: 1;
  }
}

#heartbeat {
    animation: heartbeat 1.5s ease-in-out infinite both;
}

@keyframes heartbeat {
  from {
    transform: scale(1);
    transform-origin: center center;
    animation-timing-function: ease-out;
  }
  10% {
    transform: scale(0.91);
    animation-timing-function: ease-in;
  }
  17% {
    transform: scale(0.98);
    animation-timing-function: ease-out;
  }
  33% {
    transform: scale(0.87);
    animation-timing-function: ease-in;
  }
  45% {
    transform: scale(1);
    animation-timing-function: ease-out;
  }
}

    </style>  
        
    
            </head>
    <body>
        <?php require 'utils/header.php'; ?>
        <div class = "content">
            <div class = "container">
                <div class = "col-md-12">
                    <h1 class="tracking-in-expand" style="color:#000080 ; font-size:42px ; font-style:bold "><strong>  Register your Favourite events:</strong></h1>

            </div>
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/technical.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                        
                            <h1 style="color:#003300 ; font-size:38px ;" ><u><strong>Technical Events</strong></u></h1>
                            <p>
                                EMBRACE YOUR TECHNICAL SKILLS BY PARTICIPATING IN OUR DIFFERENT TECHNICAL EVENTS!
                            </p>
                            <br><br>
                        <?php 
                        $id=1;
                        echo
                             '<a id="vibrate-1" class="btn btn-default"  href="viewEvent.php?id='.$id.'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View Technical Events</a>'
                        ?>
                             </div>
                    </div>
                </section>
            </div>
            
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/gaming.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                            <h1 style="color:#003300 ; font-size:38px ;"><strong><u>Gaming Events</u></strong></h1>
                            <p>
                                EMBRACE YOUR GAMING SKILLS BY PARTICIPATING IN OUR DIFFERENT GAMING EVENTS!
                            </p>
                            
                            <br><br>
                            <?php 
                            $id=2;
                            echo
                             '<a id="vibrate-1" class="btn btn-default" href="viewEvent.php?id='.$id .'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View Gaming Events</a>'
                        ?>
                        </div>
                    </div>
                </section>
            </div>
            
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/onstage.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                            <h1 style="color:#003300 ; font-size:38px ;"><strong><u>On-Stage Events</strong></u></h1>
                            <p>
                                EMBRACE YOUR CONFIDENCE BY PARTICIPATING IN OUR DIFFERENT ON-STAGE EVENTS!
                            </p>
                            
                            <br><br>
                            <?php 
                            $id=3;
                            echo
                             '<a id="vibrate-1" class="btn btn-default" href="viewEvent.php?id='.$id .'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View On-Stage Events</a>'
                        ?>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                            <img src="images/offstage.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">
                            <h1 style="color:#003300 ; font-size:38px ;"><strong><u>Off-Stage Events</u></strong></h1>
                            <p>
                                 EMBRACE YOUR TALENT BY PARTICIPATING IN OUR DIFFERENT OFF-STAGE EVENTS!
                            </p>  <br><br><br>
                            <?php 
                            $id=4;
                            echo
                             '<a id="vibrate-1" class="btn btn-default" href="viewEvent.php?id='.$id .'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View Off-Stage Events</a>'
                        ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
  
        <?php require 'utils/footer.php'; ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
         <a id="heartbeat" href="https://wa.me/+919175548177" class="float" target="_blank">
         <i  class="fa fa-whatsapp my-float"></i>
</a>
    </body>
</html>