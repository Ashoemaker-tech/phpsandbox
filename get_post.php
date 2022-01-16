<?php 
    /*
    # 3 ways to submit data
    if(isset($_GET['name'])) {
        # GET sends data through the url to avoid this we use POST instead.
        print_r($_GET);
        $name = htmlentities($_GET['name']); // secures forms from having script loaded in.
        echo $name;
    }

    if(isset($_POST['name'])) {
        $name = htmlentities($_POST['name']);
        echo $name;
    }
    
    # Works regardless if form value is POST or GET stick with GET or POST
    if(isset($_REQUEST['name'])) {
        // print_r($_REQUEST);
        $name = htmlentities($_REQUEST['name']);
        echo $name;
    }
    

    echo $_SERVER['QUERY_STRING'];
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <form method="GET" action="get_post.php">
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>