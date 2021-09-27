<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin login</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <style>
        .clearfix {
            clear:both;
        }

        /* Modal Content/Box */
        .modal-content {
            text-align: center;
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 40%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }
        
        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {top: -300px; opacity: 0}
            to {top: 0; opacity: 1}
        }
        @keyframes animatetop {
            from {top: -300px; opacity: 0}
            to {top: 0; opacity: 1}
        }
    </style>
</head>

<body>
    <div id="layout">
        <main>
            <!-- Inputs för login, så användarnamn och lösenord-->
            <div class="modal-content">
                    <form name="loginform" onSubmit="return validateForm();" action="../index1.html" method="post">
                        <label>User name</label>
                        <input type="text" name="usr" placeholder="admin">
                        <br>
                        <br>
                        <label>Password</label>
                        <input type="password" name="pword" placeholder="123">
                        <input type="submit" value="Login"/>
                    </form>
            </div>
            <!--Validering för inloggning-->
            <script>
                function validateForm() {
                    var un = document.loginform.usr.value;
                    var pw = document.loginform.pword.value;
                    var username = "admin";
                    var password = "123";
                    if ((un == username) && (pw == password)) {
                        return true;
                    }
                    else {
                        alert ("Något gick snett, vänligen försök igen");
                        return false;
                    }
                }
            </script>
        </main>
    </div>
</body>
</html>