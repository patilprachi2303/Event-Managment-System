
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CSEFEST 2k22</title>
        <?php require 'utils/styles.php'; ?>
        
    </head>
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

.my-float{
    margin-top:16px;
}
    </style>
    <body>
    <?php require 'utils/header.php'; ?>
    <div class ="content">
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
    <form method="POST">

   
        <label>Student USN:</label><br>
        <input type="text" name="usn" class="form-control" required><br><br>

        <label>Student Name:</label><br>
        <input type="text" name="name" class="form-control" required><br><br>
        
        <label>Branch:</label><br>
        
        <select name="branch" class="form-control"><br><br>
<option value="choose">--Choose--</option><br>
<option value="Mechatronics Engineering">Mechatronics Engineering</option>
<option value="Computer Science Engineering">Computer Science Engineering</option>
<option value="Mechanical Engineering">Mechanical Engineering</option>
<option value="Electronics Engineering">Electronics Engineering</option>
<option value="Civil Engineering">Civil Engineering</option>
<option value="Aerospace Engineering">Aerospace Engineering</option>
<option value="Automobile Engineering">Automobile Engineering</option>
<option value="Biotechnology Engineering">Biotechnology Engineering</option>
<option value="Software Engineering">Software Engineering</option>
<option value="Chemical Engineering">Chemical Engineering</option>
<option value="Electrical Engineering">Electrical Engineering</option>
<option value="Petroleum Engineering">Petroleum Engineering</option>
<option value="Artificial and Data Scirnce Engineering">Artificial and Data Scirnce Engineering</option><br><br>
</select><br>

        <label>Semester:</label><br>
        <input type="number" name="sem" class="form-control" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" class="form-control" required ><br><br>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" required><br>



        <label>College:</label><br>
        
        <select name="college" id="state" class="form-control"><br><br>
<option value="Andhra Pradesh">--Choose--</option><br><br>
<option value="Padmabhooshan Vasantraodada Patil Institute of Technology Sangli">Padmabhooshan Vasantraodada Patil Institute of Technology Sangli</option>
<option value="Rajarambapu Institute Of Technology">Rajarambapu Institute Of Technology</option>
<option value="WALCHAND COLLEGE OF ENGINEERING - [WCE], SANGLI">WALCHAND COLLEGE OF ENGINEERING - [WCE], SANGLI</option>
<option value="NANASAHEB MAHADIK COLLEGE OF ENGINEERING - [NMCE], SANGLI">NANASAHEB MAHADIK COLLEGE OF ENGINEERING - [NMCE], SANGLI</option>
<option value="ADARSH INSTITUTE OF TECHNOLOGY AND RESEARCH CENTRE - [AITRC], SANGLI">ADARSH INSTITUTE OF TECHNOLOGY AND RESEARCH CENTRE - [AITRC], SANGLI</option>
<option value="ANNASAHEB DANGE COLLEGE OF ENGINEERING & TECHNOLOGY - [ADCET], SANGLI">ANNASAHEB DANGE COLLEGE OF ENGINEERING & TECHNOLOGY - [ADCET], SANGLI</option>
<option value="VISHVESHWARYA TECHNICAL CAMPUS - [VTC], SANGLI">VISHVESHWARYA TECHNICAL CAMPUS - [VTC], SANGLI</option>
<option value="JAYWANT COLLEGE OF ENGINEERING AND MANAGEMENT - [JCEM], SANGLI">JAYWANT COLLEGE OF ENGINEERING AND MANAGEMENT - [JCEM], SANGLI</option>
<option value="SANJAY BHOKARE GROUP OF INSTITUTES - [SBGI], SANGLI">SANJAY BHOKARE GROUP OF INSTITUTES - [SBGI], SANGLI</option>
<option value="MIRAJ MAHAVIDYALAYA, SANGLI">MIRAJ MAHAVIDYALAYA, SANGLI</option>
<option value="GOVERNMENT POLYTECHNIC MIRAJ, SANGLI">GOVERNMENT POLYTECHNIC MIRAJ, SANGLI</option>
<option value="DKTE SOCIETY'S TEXTILE AND ENGINEERING INSTITUTE - [DKTE], KOLHAPUR">DKTE SOCIETY'S TEXTILE AND ENGINEERING INSTITUTE - [DKTE], KOLHAPUR</option>
<option value="BHARATI VIDYAPEETH COLLEGE OF ENGINEERING - [BVCOE], KOLHAPUR">BHARATI VIDYAPEETH COLLEGE OF ENGINEERING - [BVCOE], KOLHAPUR</option>
<option value="DY PATIL COLLEGE OF ENGINEERING AND TECHNOLOGY - [DYPCET], KOLHAPUR">DY PATIL COLLEGE OF ENGINEERING AND TECHNOLOGY - [DYPCET], KOLHAPUR</option>
<option value="SHARAD INSTITUTE OF TECHNOLOGY COLLEGE OF ENGINEERING, KOLHAPUR">SHARAD INSTITUTE OF TECHNOLOGY COLLEGE OF ENGINEERING, KOLHAPUR</option>
<option value="KIT'S COLLEGE OF ENGINEERING, KOLHAPUR">KIT'S COLLEGE OF ENGINEERING, KOLHAPUR</option>
<option value="SANJEEVAN ENGINEERING AND TECHNOLOGY INSTITUTE - [SETI] PANHALA, KOLHAPUR">SANJEEVAN ENGINEERING AND TECHNOLOGY INSTITUTE - [SETI] PANHALA, KOLHAPUR</option>
<option value="TATYASAHEB KORE INSTITUTE OF ENGINEERING AND TECHNOLOGY - [TKIET], KOLHAPUR">TATYASAHEB KORE INSTITUTE OF ENGINEERING AND TECHNOLOGY - [TKIET], KOLHAPUR</option>
<option value="DR. D.Y. PATIL PRATISHTHAN'S COLLEGE OF ENGINEERING, KOLHAPUR">DR. D.Y. PATIL PRATISHTHAN'S COLLEGE OF ENGINEERING, KOLHAPUR</option>
<option value="SANJAY GHODAWAT UNIVERSITY - [SGU], KOLHAPUR">SANJAY GHODAWAT UNIVERSITY - [SGU], KOLHAPUR</option>
<option value="DR. J.J. MAGDUM COLLEGE OF ENGINEERING - [JJMCOE], KOLHAPUR">DR. J.J. MAGDUM COLLEGE OF ENGINEERING - [JJMCOE], KOLHAPUR</option>
<option value="SHRI BALASAHEB MANE SHIKSHAN PRASARAK MANDAL - [SBMSPM], KOLHAPUR">SHRI BALASAHEB MANE SHIKSHAN PRASARAK MANDAL - [SBMSPM], KOLHAPUR</option>
<option value="SHIVAJI UNIVERSITY - [SUK], KOLHAPU">SHIVAJI UNIVERSITY - [SUK], KOLHAPUR</option>
<option value="SHARAD INSTITUTE OF TECHNOLOGY, POLYTECHNIC, KOLHAPUR">SHARAD INSTITUTE OF TECHNOLOGY, POLYTECHNIC, KOLHAPUR</option><br>

</select><br>

        <button type="submit" name="update" required>Submit</button><br><br>
        <a href="usn.php" ><u>Already registered ?</u></a>

    </div>
    </div>
    </div>
    </form>
    

    <?php require 'utils/footer.php'; ?>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
         <a href="https://wa.me/+917058397196" class="float" target="_blank">
         <i class="fa fa-whatsapp my-float"></i>
</a>
    </body>
</html>

<?php

    if (isset($_POST["update"]))
    {
        $usn=$_POST["usn"];
        $name=$_POST["name"];
        $branch=$_POST["branch"];
        $sem=$_POST["sem"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $college=$_POST["college"];
        



        if( !empty($usn) || !empty($name) || !empty($branch) || !empty($sem) || !empty($email) || !empty($phone) || !empty($college) )
        {
        
            include 'classes/db1.php';     
                $INSERT="INSERT INTO participent (usn,name,branch,sem,email,phone,college) VALUES('$usn','$name','$branch',
                    '$sem','$email','$phone','$college')";

          
                if($conn->query($INSERT)===True){
                    echo "<script>
                    alert('Registered Successfully!');
                    window.location.href='usn.php';
                    </script>";
                }
                else
                {
                    echo"<script>
                    alert(' Already registered this usn');
                    window.location.href='usn.php';
                    </script>";
                }
               
                $conn->close();
            
        }
        else
        {
            echo"<script>
            alert('All fields are required');
            window.location.href='register.php';
                    </script>";
        }
    }
    
?>

