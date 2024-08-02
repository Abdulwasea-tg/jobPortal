<?php 
session_start();
include("..//gridview.php");
$error=array(
    "jobTitleErr"=>"",
    "jobVacancyErr"=>"",
    "jobQualificationErr"=>"",
    "jobSalaryErr"=>"",
    "jobDescriptionErr"=>""
);
$jobTitle=$jobVacancy=$jobQualification=$jobSalary=$jobDescription="";
include("controll/ControllerEmData.php");

if(isset($_SESSION["username"])){
    include("../config/connection.php");
    //print_r($_SESSION);
    $query = "SELECT JobId, JobTitle, Vacancy, MinQualification, Description FROM job_master WHERE CompanyName='{$_SESSION["user"]["CompanyName"]}';";

    $res = mysqli_query($conn, $query);
    if($res){
        $result_set = mysqli_fetch_all($res,2);

        //print_r($_SESSION["user"] );
    }
    else{
        echo "ERROR: Coud not feach data";
    }

}else{
    header("Location: ../app/login.php");
}


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="..//gridviewStyle.css">
    <link rel="stylesheet" type="text/css" href="..//css.css">
    <style>
        .error{
            font-size: small;
        }
        .nav{
            position:sticky;
            top: 10%;
        }
    </style>

</head>
<body>
    <!-- header -->
    <?php include("..//layout//header.php") ?>
    <!-- side -->
    <?php include("side.php") ?>

    <!-- center -->
    <div class="center">
        <!-- titel -->
        <span class="titel">
            <i class="icon"><img class="title_ico" src="Resorce//job.png" alt="noimg"></img></i>
            <h3>Job Management</h3>    
        </span>
        
        <!-- countent1 -->
        <!-- <div> -->
        <?php include("layout/message.php");?>
             <!-- countent2 -->
            <div class="container">

            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <table class="table-input">
                    <tr>
                        <td><label for="" class="label-input">Job Title</label>
                            <input type="text" name="jobTitle" placeholder="Enter Job Title*">
                        <span class="error"><?php echo $error["jobTitleErr"]; ?></span></td>

                        <td><label for="" class="label-input">Total Vacancy</label>
                            <input type="number" name="jobVacancy" placeholder="Enter Vacancy*">
                        <span class="error"><?php echo $error["jobVacancyErr"]; ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="" class="label-input">Qualification</label>
                            <input type="text" name="jobQualification" placeholder="Enter Qualification*">
                        <span class="error"><?php echo $error["jobQualificationErr"]; ?></span></td>

                        <td><label for="" class="label-input">Salary</label>
                            <input type="number" name="jobSalary" placeholder="Enter Salary">
                        <span class="error"><?php echo $error["jobSalaryErr"]; ?></span></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label for="" class="label-input" style="display:block">Job Description</label>
                            <div class="job-desc">
                                <textarea name="jobDescription" id="" cols="100" rows="6" >Write job description...</textarea>
                            </div>
                        </td>
                        
                    </tr>
                    <tr>
                    <td><input type="submit" name="addJob" value="Add"></td>
                    </tr>
                </table>
            </form>

            <?php  $tableName = "Job";
                    $colName = array("ID", "Job Title", "Vacancy","Qualivication", "Description", "delete", "edit");
                    $actions=array("Delete", "Edit");
                        //$data_set = array(array("1", "3", "air","single", "No", "Delete"));
                    $grid = new Gridview($tableName, $colName, $actions) ;
                    $grid->creat_table($result_set);
                    $grid->addAndCloseEnd()?>


            

            </div>

        <!-- </div>    --> 
    </div><!-- End center -->
    
</body>
</html>