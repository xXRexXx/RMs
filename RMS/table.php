<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Test</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


</head>

<body>
    
    <div id= "sidebar">
     <div class="toggle-btn" onclick= "toggleSidebar()">
        <span></span>
        <span></span>
        <span></span>
     </div>  
        <ul>   
            <li><a href="main.php">Home</a></li>
            <li><a href="order.php">Menu</a></li>
            <li><a href="table.php">Table</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>

    <div class= "container outer">
        <img src= "image/layout.jpg" alt= "layout" usemap= "#layout"/>
            <map name= "layout">
                <area class= "a" shape= "rect" coords= "19,6,85,85" alt= "a1" 
                    onclick="return confirm('Take Order?')" href="order.php" />
                <area class= "a" shape= "rect" coords= "19,105,85,180" alt= "a2"
                    onclick="return confirm('Take Order?')" href="order.php" />
                <area class= "a" shape= "rect" coords= "19,200,85,265" alt= "a3"
                    onclick="return confirm('Take Order?')" href="order.php" />

                <area class= "a" shape= "rect" coords= "130,6,200,85" alt= "a4" 
                    onclick="return confirm('Take Order?')" href="order.php" />
                <area class= "a" shape= "rect" coords= "130,105,200,180" alt= "a5" 
                    onclick="return confirm('Take Order?')" href="order.php" />
                <area class= "a" shape= "rect" coords= "130,200,200,265" alt= "a6"
                    onclick="return confirm('Take Order?')" href="order.php" />

                <area class= "a" shape= "rect" coords= "250,6,315,85" alt= "a7" 
                    onclick="return confirm('Take Order?')" href="order.php" />
                <area class= "a" shape= "rect" coords= "250,105,315,180" alt= "a8"
                    onclick="return confirm('Take Order?')" href="order.php" />
                <area class= "a" shape= "rect" coords= "250,200,315,265" alt= "a9"
                    onclick="return confirm('Take Order?')" href="order.php" />
            </map>
    </div>

    <script type="text/javascript">
        function con() {
            return confirm('Take Order?');
        }
    </script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="js/sb.js"></script>

</body>

</html>