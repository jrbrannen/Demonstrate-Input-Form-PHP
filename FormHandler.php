<?php
    // checks to see if program information checkbox is checked, if it is it will echo out the value
    function displayProgInfo(){     
        if (isset($_POST["program_info"]) == 1){
            echo "<li>" . $_POST["program_info"] . "</li>";
        }
    }// end displayProgInfo()

    // checks to see if advisor information checkbox is checked, if it is it will echo out the value
    function displayAdvisor(){
        if (isset($_POST["advisor"]) == 1){
            echo "<li>" . $_POST["advisor"] . "</li>";
        }
    }// end displayAdvisor()

    // checks to see if user selected a major or not and formats the response accordingly
    function checkMajor(){
        if ($_POST["student_major"] == ""){
            echo "You have not selected a major.</br>";
        }
        else{
            echo "You have declared " . $_POST['student_major'] . " as your major.<br>";
        }
    }// end checkMajor()
?>

<!DOCTYPE html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WDV341 Basic Form Handler Example</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <!-- WDV341 Intro PHP
        Unit 5 form processing 
        Jeremy Brannen -->
        
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
        body{
            font-family: 'Open Sans', sans-serif;
        }
        a:hover{
          color: purple;
          text-decoration: none;
        }

    </style>

    </head>


    <body class="container-fluid">

        <h1 class="text-center">WDV341 Server Side Forms</h1>

        <h2 class="text-center">UNIT 5 - Lesson 2 Server Side Forms</h2>

        <p class="text-center">This is an example php form response ouput that demonstrates how a form connects to a server side process.</p>
        
        <div class= "jumbotron col-md-4 mx-auto border border-dark rounded-lg m-4 p-4" style="background-color:lightblue">
            
            <p>
                Dear <?php echo $_POST["first_name"] , ","; ?>
            </p>

            <p>
                Thank you for your interest at DMACC.</br>
                We have you listed as a <?php echo $_POST["academic"]; ?> starting this fall.</br>
                <?php checkMajor() ?> 
                Based upon your responses we will provide the following information in our confirmation email to you at <?php echo $_POST["email_address"]; ?>.</br>       
                <ol>
                    <?php displayProgInfo(); ?>
                <?php displayAdvisor(); ?>
                </ol>
                You have shared the following comments which we will review:</br>
                <?php echo $_POST["comments"]; ?>
            </p>

        </div>

        <footer class="text-center m-4">

            <p>
                <a target="_blank"href="https://github.com/jrbrannen/Demonstrate-Input-Form-PHP.git">GitHub Repo Link</a>
            </p>

            <p>
                <a href="../wdv341.php">PHP Homework Page</a>
            </p>

        </footer>

    </body>

</html>