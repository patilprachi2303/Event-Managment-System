<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>CSEFEST 2k22</title>
<?php require 'utils/styles.php'; ?>
</head>
<style>

hr.blueline {
  border: 10px solid #00004d;
  border-radius: 5px;
}

#bj
{
  font-size: 22px;
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

<body style="background-color:#b3e0ff ">

  <?php require 'utils/header.php'; ?>
  <hr class="blueline">
  <div class="col-md-12">
  
<h1>About Us</h1>

<p id="bj"> Padmabhooshan Vasantraodada Patil Institute of Technology, affiliated to Dr.Babasaheb Ambedkar Technical University (DBATU), Lonere, Raigad, approved by All India Council for Technical Education(AICTE) New Delhi, and recognized by the Government of Maharashtra.

This Visionary group is committed to develop PVPIT as a paradigm within a couple of years. The future of PVPIT in Engineering Education is bright as the above professors are heading the departments and extend their service to develop the institution with the support of highly qualified and dedicated teaching and non-teaching staff.</p>

<p id="bj">


PVPIT will provide students with a sense of history, an understanding of the ideals and principles, a commitment to law and morality, an appreciation of human creativity an analytically inquisitive mind. We believe that once the students experience these, they are ready to address the challenges of the rapidly transforming world.</p>

<p id="bj"> CSEFEST is a cultural fest which is held every year, we like everyone to participate cheerfully in every event.</p>

</div>
<hr class="blueline">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
         <a id="heartbeat" href="https://wa.me/+917058397196" class="float" target="_blank">
         <i class="fa fa-whatsapp my-float"></i>
</a>
</body>

 <?php require 'utils/footer.php'; ?>

</html>