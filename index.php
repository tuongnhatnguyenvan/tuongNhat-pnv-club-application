<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TNhat-pnv-club-applicaton</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-size: large;
        }

        form {
            padding: 20px;
            border: 2px dashed orange;
            border-radius: 5px;
            display: grid;
            grid-gap: 10px;
        }

        input {
            font-size: large;
        }

        select {
            font-size: large;
        }

        .input-wrapper {
            display: grid;
            grid-template-columns: 1fr 2fr;
            align-items: center;
        }

        .input-wrapper label {
            grid-column: 1;
            text-align: end;
            padding-right: 30px;
        }

        .input-wrapper input {
            grid-column: 2;
        }

        .input-wrapper .inputRadio {
            grid-column: 2;
        }

        .inputCheckbox {
            display: flex;
        }

        .send {
            display: block;
            margin: 0 auto;
            width: 100%;
            border: solid 1px orange;
            height: 30px;
            border-radius: 10px;
        }

        input[type="checkbox"]:checked,
        input[type="radio"]:checked {
            background-color: orange;
        }
    </style>


</head>

<body>

    <form method="post" action="result.php">
        <div class="input-wrapper">
            <label for="userName">Name:</label>
            <input type="text" id="userName" name="userName">
        </div>
        <div class="input-wrapper">
            <label for="clubName">Club you want to apply:</label>
            <select id="clubName" name="clubName">
                <option value="club1">Club 1</option>
                <option value="club2">Club 2</option>
                <option value="club3">Club 3</option>
            </select>
        </div>
        <div class="input-wrapper">
            <label>Be time for you:</label>
            <div class="inputRadio">
                <input type="radio" id="timeSaturdayMorning" name="timeOfDay" value="Saturday morning">
                <label for="timeSaturdayMorning">Saturday mornings</label>
                <input type="radio" id="timeSaturdayAfter" name="timeOfDay" value="Saturday afternoon">
                <label for="timeSaturdayAfter">Saturday afternoon</label><br>
                <input type="radio" id="timeSunAfter" name="timeOfDay" value="Sunday afternoon">
                <label for="timeSunAfter">Sunday afternoon</label>
            </div>
        </div>
        <div class="input-wrapper">
            <label>Your skills:</label>
            <div class="inputCheckbox">
                <div>
                    <input type="checkbox" id="skill1" name="skills[]" value="The best coder">
                    <label for="skill1">The best coder</label><br>
                    <input type="checkbox" id="skill2" name="skills[]" value="Good in arts">
                    <label for="skill2">Good in arts</label><br>
                    <input type="checkbox" id="skill3" name="skills[]" value="A super star">
                    <label for="skill3">A super star</label><br>
                    <input type="checkbox" id="skill4" name="skills[]" value="A crazy dancer">
                    <label for="skill4">A crazy dancer</label><br>
                </div>
                <div>
                    <input type="checkbox" id="skill5" name="skills[]" value="Singer">
                    <label for="skill5">Singer</label><br>
                    <input type="checkbox" id="skill6" name="skills[]" value="Good in design">
                    <label for="skill6">Good in design</label><br>
                    <input type="checkbox" id="skill7" name="skills[]" value="The best eater">
                    <label for="skill7">The best eater</label><br>
                    <input type="checkbox" id="skill8" name="skills[]" value="Good in speeches">
                    <label for="skill8">Good in speeches</label><br>
                </div>
            </div>
        </div>
        <input class="send" type="submit" value="SUBMIT">
    </form>
</body>

</html>