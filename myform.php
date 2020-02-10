<?php

$error=array();
$dataID="";
if(isset($_GET['event']))
{
    $event=$_GET['event'];
}


$team_leader = $email = $roll =$uname =$course = $course_yr =$member2 =$member3 =$member4 =$member5 =$member6 = $phone_no =$member7 =$member8 = $member9 =$member10 =$member11 = $member12= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // && isset($_POST["no_of_members"])!=''
	if(isset($_POST["team_leader"])!='' && isset($_POST["email"])!='' && isset($_POST["roll_no"])!='' && isset($_POST["phone_no"])!=''  && isset($_POST["uname"])!='' && isset($_POST["course"])!='' && isset($_POST["course_yr"])!='')
	{
        
        $team_leader=$_POST["team_leader"];
        $phone_no=$_POST["phone_no"];
        $roll_no=$_POST["roll_no"];
        $email=$_POST["email"];
        $uname=$_POST["uname"];
        $course=$_POST["course"];
        $course_yr=$_POST["course_yr"];
        
        if($event=='athletics')
        {
            $event="";
            if(isset($_POST["event"]))
            {
                $event=$_POST["event"];
            }
            $member2=$_POST["member2"];
            $member3=$_POST["member3"];
            $member4=$_POST["member4"];



                    if(count($error)==0)
                    {

                        include 'connect.php';
                        $sql = "select * from register where email ='$email'";
                        $result=mysqli_query($conn, $sql);
                        $resultCheck=mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            array_push($error,'Email Id Already Registered');
                            }

                            else{
                                        $sql = "INSERT INTO `register` (`team_leader`, `email`, `uname`, `roll_no`, `course`,`course_yr`,`phone_no`,`event`,`member2`,`member3`,`member4`) VALUES ('$team_leader', '$email','$uname', '$roll_no','$course','$course_yr','$phone_no','$event','$member2','$member3','$member4')";
                                        $result=mysqli_query($conn, $sql);
                                        if(!$result)
                                        {
                                        array_push($error,"Something Went Wrong try again after sometime");
                                        }
                                        $sql1 = "select registration_id from register where email ='$email'";
                                       
                                        $result1=mysqli_query($conn, $sql1);
                                        $myrow = mysqli_fetch_array($result1);
                                                    
                                                        // output data of each row
                                                        
                                        $dataID=$myrow['registration_id'];
                                                           
                            // alert('hello');

                            }
                    }
                        
            // array_push($error,"Athletics".$event); 
        }
        else if($event=='badminton')
        {
            $member2=$_POST["member2"];
            $member3=$_POST["member3"];
            $member4=$_POST["member4"];



                    if(count($error)==0)
                    {

                        include 'connect.php';
                        $sql = "select * from register where email ='$email'";
                        $result=mysqli_query($conn, $sql);
                        $resultCheck=mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            array_push($error,'Email Id Already Registered');
                        }

                        else{
                            $sql = "INSERT INTO `register` (`team_leader`, `email`, `uname`, `roll_no`, `course`,`course_yr`,`phone_no`,`event`,`member2`,`member3`,`member4`) VALUES ('$team_leader', '$email','$uname', '$roll_no','$course','$course_yr','$phone_no','$event','$member2','$member3','$member4')";
                            $result=mysqli_query($conn, $sql);
                            if(!$result)
                            {
                               array_push($error,"Something Went Wrong try again after sometime");
                            }
                            $sql1 = "select registration_id from register where email ='$email'";
                                       
                            $result1=mysqli_query($conn, $sql1);
                            $myrow = mysqli_fetch_array($result1);
                                        
                                            // output data of each row
                                            
                                                $dataID=$myrow['registration_id'];
                                               
                                            
                            
                            }
           // array_push($error,"badminton"); 

                    }

        }
        else if($event=='tennis')
        {
            if(count($error)==0){   
                        include 'connect.php';
                        $sql = "select * from register where email ='$email'";
                        $result=mysqli_query($conn, $sql);
                        $resultCheck=mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            array_push($error,'Email Id Already Registered');
                             }

                        else
                        {
                            $sql = "INSERT INTO `register` (`team_leader`, `email`, `uname`, `roll_no`, `course`,`course_yr`,`phone_no`,`event`,`member2`,`member3`,`member4`,`member5`,`member6`,`member7`,`member8`,`member9`,`member10`,`member11`,`member12`) VALUES ('$team_leader', '$email','$uname', '$roll_no','$course','$course_yr','$phone_no','$event','$member2','$member3','$member4','$member5','$member6','$member7','$member8','$member9','$member10','$member11','$member12')";
                            $result=mysqli_query($conn, $sql);
                            if(!$result)
                            {
                               array_push($error,"Something Went Wrong try again after sometime");
                            }
                            $sql1 = "select registration_id from register where email ='$email'";
                                       
                            $result1=mysqli_query($conn, $sql1);
                            $myrow = mysqli_fetch_array($result1);
                                        
                                            // output data of each row
                                            
                                                $dataID=$myrow['registration_id'];
                                               
                        }

                    
        }
    }
        else if($event=='volley'|| $event=='basketball')
        {
            $member2=$_POST["member2"];
            $member3=$_POST["member3"];
            $member4=$_POST["member4"];
            $member5=$_POST["member5"];
            $member6=$_POST["member6"];
            $member7=$_POST["member7"];
            $member8=$_POST["member8"];
            $member9=$_POST["member9"];
            $member10=$_POST["member10"];
            $member11=$_POST["member11"];
            $member12=$_POST["member12"];
            // array_push($error,"volley"); 
                    if(count($error)==0)
                    {

                        include 'connect.php';
                        $sql = "select * from register where email ='$email'";
                        $result=mysqli_query($conn, $sql);
                        $resultCheck=mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            array_push($error,'Email Id Already Registered');
                        }

                        else
                        {
                            $sql = "INSERT INTO `register` (`team_leader`, `email`, `uname`, `roll_no`, `course`,`course_yr`,`phone_no`,`event`,`member2`,`member3`,`member4`,`member5`,`member6`,`member7`,`member8`,`member9`,`member10`,`member11`,`member12`) VALUES ('$team_leader', '$email','$uname', '$roll_no','$course','$course_yr','$phone_no','$event','$member2','$member3','$member4','$member5','$member6','$member7','$member8','$member9','$member10','$member11','$member12')";
                            $result=mysqli_query($conn, $sql);
                            if(!$result)
                            {
                               array_push($error,"Something Went Wrong try again after sometime");
                            }
                            $sql1 = "select registration_id from register where email ='$email'";
                                       
                            $result1=mysqli_query($conn, $sql1);
                            $myrow = mysqli_fetch_array($result1);
                                        
                                            // output data of each row
                                            
                                                $dataID=$myrow['registration_id'];
                                               
                        }

                    }
        }
    }
    else{
        array_push($error,"All Fields are mandatory");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Rancho&effect=3d" rel="stylesheet">
    <script>
        $(document).ready(function(){
            $(".close").click(function(){
                $("#myAlert").alert("close");
            });
        });
    </script>
    <style>
        header {
        
        padding:10px;
       
        font-size:6em;
        letter-spacing: 3px;
        font-family: 'Rancho';
        text-align: center;
        font-weight: bold;
        
        }
        .font-effect-3d{
             /*color:#d42e2f;*/
             color:#d8b135;
        }
        body{
            background-image: url('bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            /*background-position: fixed;*/
            background-attachment: fixed;
            color:white;
            height: 100vh;
            overflow:;
            /*overflow:hidden;*/
            /* background-color:#DBF5F0; */
        }

        .myformContainer{
            display:flex;
            justify-content: center;
            align-items: center;
            border-radius:10px;
        }
        form{
            margin:20px;
            border-radius:10px;
            background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
            /*background-color:#728bd4;*/
            box-shadow: 0 4px 8px 0 #175873;
            padding:30px 20px;
            width:50%;
           /* height:500px;*/
            /*overflow-y: scroll;        */
            }
        label{
            font-size:18px;
        }
        .form-control{
            height:40px;
        }
        .radio{
            margin-left:10px;
        }
        .radio label
        {
            font-size:15px;
        }
        input[type=submit]
        {
            display:block;
            text-transform:uppercase;
            padding:5px 20px;
            margin:auto;
        }
        #athleteEvent option{
            /* margin:5px;
            padding:10px;
            width:50px;
           color:Blue; */
        
        }
        .compulsory{
            color: red;
            font-size:30px;
        }
        .myalert{
            margin-top:10px;
        }
        @media screen and (max-width: 750px) {
            form{
            width:100%;
            }
        }
        .alert{
            animation: shake 0.5s;
            animation-iteration-count: 1;
        }
        @keyframes shake {
            0% { transform: translate(1px, 1px) rotate(0deg); }
            10% { transform: translate(-1px, -2px) rotate(-1deg); }
            20% { transform: translate(-3px, 0px) rotate(1deg); }
            30% { transform: translate(3px, 2px) rotate(0deg); }
            40% { transform: translate(1px, -1px) rotate(1deg); }
            50% { transform: translate(-1px, 2px) rotate(-1deg); }
            60% { transform: translate(-3px, 1px) rotate(0deg); }
            70% { transform: translate(3px, 1px) rotate(-1deg); }
            80% { transform: translate(-1px, -1px) rotate(1deg); }
            90% { transform: translate(1px, 2px) rotate(0deg); }
            100% { transform: translate(1px, -2px) rotate(-1deg); }
        }
    </style>
    <title>synergy</title>
    
</head>
<body>
    <header class="container-fluid font-effect-3d">
    <h1>REGISTRATION</h1>
    </header>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<div class="myalert">';
        if(count($error)>0)
        {
                foreach($error as $err)
                {
                    echo '<div class="container">
                            <div class="alert alert-danger alert-dismissible" id="myAlert">
                                <a href="#" class="close">&times;</a>
                                <strong>error! </strong>'.$err.'
                            </div>
                        </div>';
                }
        }
        else{
            echo '<div class="container">
                    <div class="alert alert-success alert-dismissible" id="myAlert">
                        <a href="#" class="close">&times;</a>
                        <strong>success! </strong>Registered Successfully!! 
                        <br>
                        <h3 class=" alert-danger"> Note: Take the Screenshot of Registration Id.</h3>
                        <br>
                        <b>REGISTRATION ID IS : </b> 2019100'.$dataID.'
                    </div>
                </div>';
        } 
        echo '</div>';  
    }    
    ?>

    
 
    <div class="container">
        <div class="myformContainer">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?event=".$event;?>" method="POST">
        
        <label id="" for="">Enter Following Details:</label>
        <br>
        <div class="form-group">
            <label id="team_leader" for="team_leader">Team Leader/Participant Name</label>
            <input type="text" name="team_leader" required pattern="[A-Za-z ]*" class="form-control"  placeholder="Enter Team Leader name">
        </div>  

        <div class="form-group">
            <label id="email" for="email">Email of Team Leader</label>
            <input type="email" name="email" required class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label id="uname" for="uname">University/College Name</label>
            <input type="text" name="uname"  required class="form-control" pattern="[A-Za-z ]*"  placeholder="Enter Full University/College Name">
        </div>  

        <div class="form-group">
            <label id="roll_no" for="roll_no">University Roll Number</label>
            <input type="text" name="roll_no"  required class="form-control"  placeholder="Enter Leader's Roll Number">
        </div> 
        <div class="form-group">
            <label id="course" for="course">Course</label>
            <input type="text" name="course"  required class="form-control"  placeholder="Enter Course Name">
        </div> 
        <div class="form-group">
            <label id="course_yr" for="course_yr">Semester</label>
            <input type="number" name="course_yr"  required class="form-control" min="1" max="6" maxlength="1" placeholder="Enter Year in Number only">
        </div> 
        
        <div class="form-group">
            <label id="phone_no" for="phone_no">Phone Number</label>
            <input type="text" name="phone_no"  required maxlength="10" class="form-control"  placeholder="Enter Leader's phone number">
        </div> 
        <!--||'100m'||'200m'||'400m'||'800m'||'1500m'||'relay'||'long_jump'||'shot_put'  -->
<?php 

 if($event=='athletics')
 {
     echo '<div class="form-group">
                <label for="event" id="event">Select Athletics Event</label>
                <select class="form-control" name="event" id="event">
                <option value="100m">100m</option>
                <option value="200m">200m</option>
                <option value="400m">400m</option>
                <option value="800m">800m</option>
                <option value="1500m">1500m</option>
                <option value="relay">4 x 100m Relay</option>
                <option value="long_jump">Long Jump</option>
                <option value="shot_put">Shot Put</option>
                </select>
            </div>';
    echo '<br><label for="" id="">Enter Members Name only For Relay Event</label>
    <br>
    <div class="form-group">
            <label id="member2" for="member2">Member 2</label>
            <input type="text" name="member2"  class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
</div>
<div class="form-group">
    <label id="member3" for="member3">Member 3</label>
    <input type="text" name="member3"  class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
</div>
<div class="form-group">
    <label id="member4" for="member4">Member 4</label>
    <input type="text" name="member4" class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
</div>';
 }
 elseif($event=='basketball'){
     echo '<br>
     <label id="" for="">Enter Team Members Name:</label> 
     <br>

     <div class="form-group">
         <label id="member2" for="member2">Member 2</label>
         <input type="text" name="member2" required class="form-control" pattern="[A-Za-z ]*"  placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member3" for="member3">Member 3</label>
         <input type="text" name="member3" required class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member4" for="member4">Member 4</label>
         <input type="text" name="member4" required class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member5" for="member5">Member 5</label>
         <input type="text" name="member5" required class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member6" for="member6">Member 6</label>
         <input type="text" name="member6" required class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member7" for="member7">Member 7</label>
         <input type="text" name="member7" required class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member8" for="member8">Member 8</label>
         <input type="text" name="member8" required class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member9" for="member9">Member 9</label>
         <input type="text" name="member9" required class="form-control" pattern="[A-Za-z ]*"  placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member10" for="member10">Member 10</label>
         <input type="text" name="member10" required class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member11" for="member11">Member 11</label>
         <input type="text" name="member11" required class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member12" for="member12">Member 12</label>
         <input type="text" name="member12" required class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
     </div>';
 }
 elseif($event=='volley'){
     echo '<br>
     <label id="" for="">Enter Team Members Name:</label> 
     <br>

     <div class="form-group">
         <label id="member2" for="member2">Member 2</label>
         <input type="text" name="member2" required class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member3" for="member3">Member 3</label>
         <input type="text" name="member3" required class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member4" for="member4">Member 4</label>
         <input type="text" name="member4" required class="form-control" pattern="[A-Za-z ]*"  placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member5" for="member5">Member 5</label>
         <input type="text" name="member5" required class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member6" for="member6">Member 6</label>
         <input type="text" name="member6" required class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member7" for="member7">Member 7</label>
         <input type="text" name="member7" required class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member8" for="member8">Member 8</label>
         <input type="text" name="member8" required class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member9" for="member9">Member 9</label>
         <input type="text" name="member9" required class="form-control" pattern="[A-Za-z ]*"  placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member10" for="member10">Member 10</label>
         <input type="text" name="member10" required class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member11" for="member11">Member 11</label>
         <input type="text" name="member11" required class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
     </div>
     <div class="form-group">
         <label id="member12" for="member12">Member 12</label>
         <input type="text" name="member12" required class="form-control" pattern="[A-Za-z ]*"  placeholder="Enter Name of Team Member">
     </div>
     ';
 }
 elseif($event=='badminton'){
    echo '<br>
    <label id="" for="">Enter Team Members Name (Minimum 2 and Maximum 4)</label> 
    <br>
    <div class="form-group">
    <label id="member2" for="member2">Member 2 <span class="compulsory">*</span></label>
    <input type="text" name="member2"  class="form-control" pattern="[A-Za-z ]*"  placeholder="Enter Name of Team Member">
</div>
<div class="form-group">
    <label id="member3" for="member3">Member 3 (optional)</label>
    <input type="text" name="member3"  class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
</div>
<div class="form-group">
    <label id="member4" for="member4">Member 4 (optional)</label>
    <input type="text" name="member4"  class="form-control" pattern="[A-Za-z ]*" placeholder="Enter Name of Team Member">
</div>';
 }
 
?>
       
        <input type="submit" name="Submit" class="btn btn-default" value="submit">
        
    </form>
        </div> 
    </div>
</body>
</html>

