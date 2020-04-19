<?php
    require "header.php";
?>

<html>
    <head>
    <link rel="stylesheet" href="search_goal.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
<div class="loginbox">
<?php
    if( !isset( $_SESSION['username']) ){
        echo "You are not authorized to view this page. Go back <a href= '/'>home</a>";
        exit();
    }
?>

<div>
<div><h1>Search goals</h1></div>
</div>
<form action = 'search_goal_result.php' method = 'POST'>
    <label>You can search goals of other users through keywords.</label><br><br>
    <label>Keyword: <br></label>
    <div class="search_box">
        <input class = "input_box" type="text" name="goal_keyword">
        <button class = "btn" type = 'submit' value = 'submit' name= 'search_goal'>
            <i class="fa fa-search"></i>
        </button>
    </div>
    
</form>
</div>
</body>
</html>