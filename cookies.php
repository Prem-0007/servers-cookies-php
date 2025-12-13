<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'], $_POST['user'])) {

    if ($_POST['action'] === 'accept') {
        setcookie("name", $_POST['user'], time() + (86400 * 365), "/");
    }

    if ($_POST['action'] === 'deny') {
        setcookie("name", "", time() - 3600, "/");
    }

    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🍪coookkieees🍪</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #aaaaaaff;
        }

        #container {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: none;
            border-radius: 50px;
            padding: 40px;
            background-color: rgb(206, 204, 204);
            box-shadow: 6px 6px 12px #bababa, -6px -6px 12px #ffffff;

        }

        #container:hover {
            box-shadow: inset 4px 4px 12px #bababa, inset -4px -4px 12px #ffffff;
        }

        #display {
            font-size: 3rem;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            text-shadow: 3px 3px 3px black;
            padding: 10px;
            border-radius: 15px;
            color: rgb(49, 48, 48);
            margin-bottom: 25px;
            box-shadow: 6px 6px 12px #bababa, -6px -6px 12px #ffffff;
        }

        #display:hover {
            box-shadow: inset 4px 4px 12px #bababa, inset -4px -4px 12px #ffffff;
        }

        input {
            border: none;
            height: 40px;
            width: 200px;
            border-radius: 5px;
            box-shadow: 6px 6px 12px #bababa, -6px -6px 12px #ffffff;
            border: 1px solid #bababa;
            font-size: 28px;
            font-weight: bold;
            text-align: center;
        }

        input:focus {
            box-shadow: inset 4px 4px 12px #bababa, inset -4px -4px 12px #ffffff;
            outline: none;
        }



        button {
            font-size: 1.6rem;
            font-weight: bold;
            padding: 10px 20px;
            margin: 10px;
            margin-top: 35px;
            min-width: 135px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            color: white;
            text-shadow: 0px 0px 10px white;
        }


        #acceptBtn {

            background: linear-gradient(145deg, #04b304, #04d504);
            box-shadow: 14px 14px 25px #026f02,
                -7px -7px 30px #06ff06;

        }

        #acceptBtn:hover {
            box-shadow: inset 14px 14px 40px #026f02,
                inset -7px -7px 50px #06ff06;

            color: black;
            text-shadow: 0 0 10px black;
        }

        #denyBtn {

            background: linear-gradient(145deg, #bc0505, #e00505);
            box-shadow: 14px 14px 30px #750303,
                -7px -7px 20px #fc1717;
        }

        #denyBtn:hover {

            background: #d10505;
            box-shadow: inset 13px 13px 26px #750303,
                inset -13px -13px 26px #ff0707;
            color: black;
            text-shadow: 0 0 10px black;
        }
    </style>
</head>

<body>
    <div id="container">
        <div id="display">
            <form method="POST" action="cookies.php">
                <label for="name">Enter Your Name:</label>
                <input type="text" name="user" id="name" required>
                <button type="submit" name="action" id="acceptBtn" value="accept">Accept all Cookies 🍪</button>
                <button type="submit" name="action" id="denyBtn" value="deny">Deny Cookies</button>

            </form>
        </div>
    </div>
</body>

</html>