<!DOCTYPE html>
<html>
    <head>

<style>
    form{
    background: #fff;
    display: flex;
    flex-direction: column;
    padding: 2vw 4vw;
    width: 100%;
    max-width: 700px;
    border-radius: 10px;
    margin-left: 600px;
    padding-right: 50px;
    text-align: center;
    
    }
     form button{
        padding: 15px;
        background: #ff5361;
        color: #fff;
        font-size: 18px;
        border: 0;
        outline: none;
        cursor: pointer;
        width: 150px;
        margin: 20px auto 0;
        border-radius: 30px;
    }
     form h3{
        color: #777;
        font-weight: 800;
        margin-bottom: 20px;
    }
    
    form input, form textarea{
        border: 0;
        margin: 10px 0;
        padding: 15px;
        outline: none;
        background: #f5f5f5;
        font-size: 16px;
    }
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

.my-float{
    margin-top:16px;
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
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CSEFEST 2k22</title>
        <?php require 'utils/styles.php'; ?>
        <head>
    <body>
        <?php require 'utils/header.php'; ?>
           <div class="forms">
            <form style="text-align: center;" action="https://formsubmit.co/rmane13803@gmail.com" method="POST" />
                <h3>Get In Touch</h3>
                <input type="text" id="name" placeholder="Your Name" required>
                <input type="email" id="email" placeholder="Email id" required>
                <input type="text" id="phone" placeholder="Phone No" required>
                <textarea id="message" rows="4" placeholder="How Can We Help You ?"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
            
        </div>
        <?php require 'utils/footer.php'; ?>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
         <a id="heartbeat" href="https://wa.me/+919175548177" class="float" target="_blank">
         <i class="fa fa-whatsapp my-float"></i>
</a>
    </body>
</html>
