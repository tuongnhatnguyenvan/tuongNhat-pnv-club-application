<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        body {
            width: 500px;
            height: auto;
            margin: auto;
        }

        .form {
            margin-top: 20px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            border: 2px dashed orange;
            /* Đảm bảo form chiếm toàn bộ chiều cao của màn hình */
        }

        img {
            width: 200px;
            height: auto;
        }
    </style>
</head>

<body>

    <div class="form">
        <img src="https://www.spokencompany.com/wp-content/uploads/2022/06/medal.png" alt="error">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $clubName = isset($_POST['clubName']) ? $_POST['clubName'] : '';
            $name = isset($_POST['userName']) ? $_POST['userName'] : '';
            $timeOfDay = isset($_POST['timeOfDay']) ? $_POST['timeOfDay'] : '';
            $skills = isset($_POST['skills']) ? $_POST['skills'] : array();
        }

        echo "<h1>Thank you " . $name . "</h1>";
        echo "<h3>We received your application for " . $clubName . "</h3>";
        echo "<h3>You will be available on " . $timeOfDay . "</h3>";
        $skillList = "";
        foreach ($skills as $skill) {
            $skillList .= $skill . ", ";
        }
        echo "<h3>You are " . rtrim($skillList, ", ") . "</h3>";
        ?>
    </div>
</body>

</html>