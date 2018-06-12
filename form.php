<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body style="text-align: center;">
    
    <h1 style="color: #4863A0; font-family: Arial;">FAVORITE APP</h1>
        
    <!-- <form method="get" action="voted.php"> -->
    <form id="form" method="get" action="voted.php">
        <table style="margin: 0px auto;">
            <tr>
                <td colspan="2"><input type=radio name="vote" value="valFacebook" class="radio">Facebook</td>
            </tr>
            <tr>
                <td colspan="2"><input type=radio name="vote" value="valMessenger" class="radio">Messenger</td>
            </tr>
            <tr>
                <td colspan="2"><input type=radio name="vote" value="valInstagram" class="radio">Instagram</td>
            </tr>
            <tr>
                <td colspan="2"><input type=radio name="vote" value="valSnapchat" class="radio">Snapchat</td>
            </tr>
            <tr>
                <td colspan="2"><input type=radio name="vote" value="valOther" class="radio">other</td>
            </tr>
            <tr>
                <td colspan="2"><input type="checkbox" name="check" id="conditions"><i>I agree to the Terms and Conditions.</i></td>
            </tr>
            <tr>
                <td><input type="reset" value="RESET"></td>
                <td><input type="button" value="VOTE" id="btnVote"></td>
            </tr>
        </table>
    </form>
    
    
</body>
</html>