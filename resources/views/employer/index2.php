<?php 
session_start();
if(isset($_SESSION["username"])){
    include("../config/connection.php");
    //print_r($_SESSION);
    $query = "SELECT EmployerId,CompanyName, ContactPerson, Address, City, Email, Mobile, Area_Work,UserName FROM employer_reg WHERE UserName='{$_SESSION['username']}' AND Password='{$_SESSION['password']}';";
    $res = mysqli_query($conn, $query);
    if($res){
        $result_set = mysqli_fetch_array($res, 1);
        $_SESSION["EId"]= $result_set["EmployerId"];
        $_SESSION["user"] = $result_set ;
        //print_r($_SESSION["user"] );
    }
    else{
        echo "ERROR: Coud not feach data";
    }

}else{
    header("Location: ../app/login.php");
}

/* $username=$_SESSION["username"];
$password=$_SESSION["password"];
//echo "<script> alert('usenn= $username ,pass=  $password.');</script>";

if(empty($username) || empty($password)){
    if(!empty($_SESSION)){
        session_destroy();
    }
    //die("<script> alert('usenn= $username ,pass=  $password.');</script>");
    header("Location: ../app/index.php");
} */



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css.css">
    <style>
        .menu{
            padding: 10px 0px;
            display: flex;
            flex-flow: row wrap;
            justify-content: space-between;
            list-style: none;
            width: 100%;
            background-color: white;

        }
        .l{
            /* width: 25%; */
            width:200px;
            height: 100px;
            margin-right:5px;
            margin-bottom: 20px;  
            height: 100px;
            background-color: white;
        }
        .btn{
            position: relative;
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 8px;
            padding: 15px;

            display: flex;
            flex-flow:row nowrap;
            justify-content: space-between;
            text-align: left;
        }
        .menu li .btn img{
            width: 64px;
            height: 64px;
            padding: 15px;
            background-color: #6650a41a;
            border: none;
            border-radius: 8px;
        }
        .count{
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: last baseline;
        
        }
        .count h1{
            font-size: 20pt;
            color: #6750A4;
        }

    </style>


    

</head>
<body>
    <!-- header -->
    <?php include("..//layout//header.php") ?>
    <!-- side -->
    <?php include("side.php") ?>
    <div >
                <!-- titel -->
        <span class="titel">
            <i class="icon"><img class="title_ico" src="Resorce//home.png" alt="noimg"></img></i>
            <h3>Dashbboard</h3>    
        </span>
    </div>

    <!-- center -->
    <div class="center">
        
        <!-- countent1 -->
        <div>
             <!-- countent2 -->
            <div class="container">
                    <ul class="menu">
                        <li class="l"><a href="ManageJob.php"><button id="tab_3" class="btn" href=""><i class="icon"><img src="Resorce//job.png" alt="noimg"></img></i><span class="count"><h1>200</h1>Jops</span></button></a></li>
                        <li class="l"><a href="ManageWalkin.php"><button id="tab_4" class="btn" href=""><i class="icon"><img src="Resorce//job.png" alt="noimg"></img></i><span class="count"><h1>20</h1>Walkins</span></button></a></li>
                        <li class="l"><a href="Applications.php"><button id="tab_5" class="btn" href=""><i class="icon"><img src="Resorce//application.png" alt="noimg"></img></i><span class="count"><h1>1000</h1>Applications</span></button></a></li>
                    </ul>
            </div>

        </div>    
    </div><!-- End center -->
    
</body>
</html>