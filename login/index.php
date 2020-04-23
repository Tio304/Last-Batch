<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background-image :url("https://wallpaperaccess.com/full/911481.jpg");
            background-repeat: no-repeat;
        }

        #card {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
            height: 410px;
            margin: 6rem auto 8.1rem auto;
            width: 329px;
        }

        #card-content {
            padding: 12px 44px;
        }

        #card-title {
            font-family: "Raleway Thin", sans-serif;
            letter-spacing: 4px;
            padding-bottom: 23px;
            padding-top: 13px;
            text-align: center;
        }

        .underline-title {
            background: -webkit-linear-gradient(right, #2c003e, #00bcd4);
            height: 2px;
            margin: -1.1rem auto 0 auto;
            width: 89px;
        }

        a {
            text-decoration: none;
        }

        label {
            font-family: "Raleway", sans-serif;
            font-size: 11pt;
        }

        #forgot-pass {
            color: #2dbd6e;
            font-family: "Raleway", sans-serif;
            font-size: 10pt;
            margin-top: 3px;
            text-align: right;
        }

        .form {
            align-items: left;
            display: flex;
            flex-direction: column;
        }

        .form-border {
            background: -webkit-linear-gradient(right, #00bcd4, #0c57e2);
            height: 1px;
            width: 100%;
        }

        .form-content {
            background: #ffffff;
            border: none;
            outline: none;
            padding-top: 14px;
        }

        #signup {
            color: #00bcd4;
            font-family: "Raleway", sans-serif;
            font-size: 10pt;
            margin-top: 16px;
            text-align: center;
        }

        #submit-btn {
            background: -webkit-linear-gradient(right, #00bcd4, #092f97);
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #230674;
            cursor: pointer;
            color: white;
            font-family: "Raleway SemiBold", sans-serif;
            height: 42.3px;
            margin: 0 auto;
            margin-top: 50px;
            transition: 0.25s;
            width: 153px;
        }

        #submit-btn:hover {
            box-shadow: 0px 1px 18px #230674;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login MOKLET Website</title>
</head>

<body>
    <div id="card">
        <div id="card-title">
            <h2>LOGIN</h2>
            <div class="underline-title"></div>
        </div>
        <form action="proses-login.php" method="post">
            <table>
                <tr>
                    <td><label for="">Username</label></td>
                    <br>
                    <td> <input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <td><label for="">Password</label></td>
                    <br>
                    <td> <input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                    <input id="submit-btn" type="submit" name="btnlogin" value="Login" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>