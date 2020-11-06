<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trivia | Music Nation </title>
    <link href='./css/trivia_style.css' rel='stylesheet'>
</head>
<body>
    
    <form method='POST' action='./result.php'>
        <?php
            include './server_scripts/db.php';
            $sql =  "select * from trivia";
            $result = $conn->query($sql);
            $nos = 0;
            while($row = $result->fetch_assoc()) {
                echo "
                    <div>
                        <h3>".($nos+1).". ".$row['q']."</h3>
                        <input name='q".$nos."' value='".$row['q']."' style='display:none;'>
                        <input name='a".$nos."'>
                    </div>
                ";
                $nos = $nos + 1;
            }
            echo "<input name='nos' value='".$nos."' style='display:none;'>"
        ?>
        <br><br><br>
        <button class='submit'>SUBMIT</button>
    </form>
    <script src='./scripts/evaluate_script.js'></script>
</body>
</html>