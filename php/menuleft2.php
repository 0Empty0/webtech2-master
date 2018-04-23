 <head>
    <link rel="stylesheet" href="css/buttons.css">
        <script type="text/javascript" src="js/buttons.js"></script>
        <script type="text/javascript" src="js/buttons.js"></script>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<?php
                    
              
				echo  "<a href='timeline.php' class='button button-pill button-flat-caution' >Timeline</a><br><br>";
                echo  "<a href='lesson.php' class='button button-pill button-flat-caution'>Lesson</a><br><br>";
				echo   "<form  action='homework_student.php' method='post'class='button button-pill button-flat-caution' >";
                echo "<button type='submit' name='course' value='".$txt[0]."/".$txt[1]."'>Homework</button></form><br><br>";
				echo  "<a href='Webboard.php' class='button button-pill button-flat-caution'>Q and A</a><br><br>";
				echo   "<form  action='stu_selectseat2.php' method='post' class='button button-pill button-flat-caution'>";       
                echo "<button type='submit' name='course' value='".$txt[0]."/".$txt[1]."'>Join Course</button></form><br><br>";
?>
</body>