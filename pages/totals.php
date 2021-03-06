<?php set_include_path($_SERVER["DOCUMENT_ROOT"]."/shalomshanti/"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <title>Vidya and Micah's Wedding Invitee Totals</title>
    <style type='text/css'>
        * {
            box-sizing:border-box;
        }
        body {
            margin:0;
            padding:0;
        }
        main {
            margin:auto;
            text-align:center;
        }
        h1 {
            margin:0px;
            margin-top:10px;
            margin-bottom:5px;
        }
        h1, h2 {
            text-align:center;
        }
        h3:nth-of-type(2) {
            margin-top:30px;
        }
        h3 {
            margin-bottom:5px;
        }
        h4 {
            margin:0;
            padding:0;
        }
        section {
            display:inline-block;
            width:300px;
            vertical-align:top;
            padding:20px;
            text-align:left;
            margin:0 40px;
        }
        input {
            display:none;
        }
        label {
            background:white;
            display:inline-block;
            padding:5px;
        }
        label:hover {
            background:#DDDDDD;
            cursor:pointer;
        }
        label:first-of-type {
            border-top-left-radius:5px;
            border-bottom-left-radius:5px;
            border:1px solid black;
        }
        label:not(:first-of-type):not(:last-of-type) {
            border-top:1px solid black;
            border-bottom:1px solid black;
        }
        label:last-of-type {
            border-top-right-radius:5px;
            border-bottom-right-radius:5px;
            border-top:1px solid black;
            border-right:1px solid black;
            border-bottom:1px solid black;
            border-left:1px solid black;
        }
        input:checked + label {
            background:#CCCCCC;
        }
        #invited:checked ~ #invitedguests {
            display:block;
        }
        #invited:not(:checked) ~ #invitedguests {
            display:none;
        }
        #expected:checked ~ #expectedguests {
            display:block;
        }
        #expected:not(:checked) ~ #expectedguests {
            display:none;
        }
        hr {
            margin-top:20px;
        }
    </style>
</head>
<body><main>
<h1>Wedding Guests</h1>
<input id='invited' name='nametype' type='radio' /><label for="invited">Invited</label><input id='expected' name='nametype' type='radio' checked /><label for="expected">Expected</label><input id='attending' name='nametype' type='radio' /><label for="attending">Attending</label><br />
<?php
require_once "db_access.php";
echo "<div id='invitedguests'>";
include "templates/invited.php";
echo "</div>";
echo "<div id='expectedguests'>";
include "templates/expected.php";
echo "</div>";
echo "<div id='attendingguests'>";
include "templates/attending.php";
echo "</div>";
?>
</main>
</body>
</html>