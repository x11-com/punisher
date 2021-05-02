<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
    <title><!--[site_name]--></title>
    <meta name="description" content="<!--[meta_description]-->">
    <meta name="keywords" content="<!--[meta_keywords]-->">
    <style type="text/css">

        html, body {
            margin: 0;
            padding: 0;
            background: #000000;
            font-size: 100%;
            font-family: "trebuchet ms", arial, verdana;
            color: #444;
            text-align: center;
        }

        body {
            background: url('../assets/bg.jpg') center center fixed;
        }

        * {
            transition: 1s;
        }

        input {
            padding: 8px;
        }

        a {
            color: #333;
            text-decoration: none;
            display: inline-block;
            padding: 8px;
            text-decoration: none !important;
        }

        a:hover {
            text-decoration: underline;
            color: #ef0a0a;
        }

        p {
            color: #444;
            line-height: 170%;
            margin: 5px 0;
        }

        p, td, th, ul {
            font-size: 80%;
        }


        #wrapper {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto 0 auto;
            text-align: left;
        }

        #content {
            background: linear-gradient(177deg, #111111, #000000);
            padding: 20px;
        }


        h1 {
            font: 250% "trebuchet ms";
            color: #fff;
            padding: 40px 0 10px 10px;
            margin: 0;
        }

        h1 span {
            color: #6BAD42;
        }

        h1 a {
            color: #FFFFFF;
        }

        h1 a:hover {
            color: #6BAD42;
            text-decoration: none;
        }

        h1 a:hover span {
            color: #FFFFFF;
        }

        h2 {
            font: bold 100% arial, verdana, sans-serif;
            color: #333;
            border-bottom: 1px solid #111;
            padding-bottom: 20px;
            margin: 10px 0 20px 0;
            font-style: italic;
        }

        p + p {
            padding-top: 1em;
        }

        form.form {
            font-size: 80%;
            padding: 10px;
        }

        #options {
            list-style-type: none;
            width: 500px;
            margin: 10px;
            padding: 0;
        }

        #options li {
            float: left;
            width: 240px;
            border-left: 5px solid #ccc;
        }

        #footer {
            margin: 10px 0 0 0;
            font-size: 80%;
            color: #ccc;
        }

        #nav {
            text-align: right;
            list-style-type: none;
            font-size: 80%;
            border-top: 1px solid #111;
            margin: 20px 0 0 0;
            padding: 0;
        }

        #nav li {
            padding: 0 5px 0 5px;
            display: inline;
        }

        .left {
            float: left;
        }


        .first {
            margin-top: 0;
        }

        input.textbox {
            width: 500px;
            font: 120% arial, verdana, sans-serif;
        }

        input.button {
            font-family: arial, verdana, sans-serif;
            font-size: 120%;
            border: none;
            background: #222;
            color: #fff;
            padding: 10px 30px;
        }

        input.button:hover {
            background: #ff0000;
            color: #000;
            cursor: pointer;
        }

        label {
            font-weight: light;
        }

        #error {
            border: 1px solid red;
            border-left: 5px solid red;
            padding: 2px;
            margin: 5px 0 15px 0;
            background: #eee;
        }


        table {
            border-color: #666;
            border-width: 0 0 1px 1px;
            border-style: solid;
            width: 50%;
        }

        th {
            font-size: normal;
            background: #ccc;
            border-width: 2px;
        }

        td, th {
            border-color: #666;
            border-width: 1px 1px 0 0;
            border-style: solid;
            padding: 2px 10px 2px 10px;
        }

        td {
            background-color: #EEEEEE;
        }

        .full-width {
            width: 98%;
        }

        .large-table {
            width: 75%;
            margin-top: 15px;
        }

        .large-table td, .large-table th {
            padding: 5px;
        }

        td.small-note {
            font-size: 60%;
            padding: 2px;
            text-align: right;
        }


        label {
            font-weight: bold;
            line-height: 20px;
            cursor: help;
        }

        #tooltip {
            width: 20em;
            color: #fff;
            font-size: 12px;
            font-weight: normal;
            padding: 5px;
            border: 3px solid #333;
            text-align: left;
            background-color: #555555;
        }

        .blink_me {
            animation: blinker 1s linear infinite;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
    </style>
    <?= injectionJS(); ?>
    <script type="text/javascript">
        window.addDomReadyFunc(function () {
            document.getElementById('options').style.display = 'none';
            document.getElementById('input').focus();
        });
        disableOverride();
    </script>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <h1><a href="index.php"><?php
                # Just a bit of PHP to auto-color a multiple word name
                global $themeReplace;
                if (isset($themeReplace['site_name'])) {
                    $wc = 0;
                    $words = explode(' ', $themeReplace['site_name']);
                    foreach ($words as $word) {
                        $wc++;
                        if ($wc % 2 == 1) {
                            echo $word . ' ';
                        } else {
                            echo '<span>' . $word . '</span> ';
                        }
                    }
                }
                ?></a></h1>
    </div>
    <center><img src="../assets/banner.png"/></center>
    <div id="content">

        <!-- CONTENT START -->

        <!--[error]-->

        <h2>where to begin<span class="blink_me">_</span></h2>

        <!--[index_above_form]-->

        <form action="inc/process.php?action=update" method="post" onsubmit="return updateLocation(this);"
              class="form">
            <input type="text" name="u" id="input" size="40" class="textbox">
            <input type="submit" value="Go" class="button"> &nbsp; [<a style="cursor:pointer;"
                                                                       onclick="document.getElementById('options').style.display=(document.getElementById('options').style.display=='none'?'':'none')">options</a>]
            <ul id="options">
                <?php foreach ($toShow as $option) echo '<li><input type="checkbox" name="' . $option['name'] . '" id="' . $option['name'] . '"' . $option['checked'] . '><label for="' . $option['name'] . '" class="tooltip" onmouseover="tooltip(\'' . $option['escaped_desc'] . '\')" onmouseout="exit();">' . $option['title'] . '</label></li>'; ?>
            </ul>
            <br style="clear: both;">
        </form>

        <!--[index_below_form]-->

        <!-- CONTENT END -->

        <ul id="nav">
            <li class="left"><a href="index.php">Home</a></li>
            <li class="left"><a href="edit-browser.php">Edit Browser</a></li>
            <li class="left"><a href="cookies.php">Manage Cookies</a></li>
            <li><a href="disclaimer.php">Disclaimer</a></li>
        </ul>
    </div>
    <div id="footer">
        <p><a href="http://www.ţ.com/">Punisher</a>&reg;  <!--[version]--> 1985 - 2021</p>
        <p style="font-size:5px;color:#444;">DON FEDERATION 👁 THE DON FEDERATION IS A WORLD LEADER IN PRODUCT
            DEVELOPMENT AND SERIVCES. CONTENT OF THE PAGES OF THIS WEBSITE IS FOR YOUR GENERAL INFORMATION AND USE ONLY.
            IT IS SUBJECT TO CHANGE WITHOUT NOTICE. THIS WEBSITE USES COOKIES TO MONITOR BROWSING PREFERENCES. IF YOU DO
            ALLOW COOKIES TO BE USED, YOUR PERSONAL INFORMATION MAY BE STORED BY US FOR USE BY THIRD PARTIES. NO
            WARRANTY OR GUARANTEE TO THE ACCURACY, OF THE INFORMATION AND MATERIALS FOUND ON THIS WEBSITE. MATERIAL
            WHICH IS OWNED BY OR LICENSED TO US NOT LIMITED TO, THIS WEBSITE, DESIGN, LAYOUT, LOOK, APPEARANCE AND
            GRAPHICS. REPRODUCTION IS PROHIBITED OTHER THAN IN ACCORDANCE WITH THE COPYRIGHT NOTICE, WHICH FORMS PART OF
            THESE TERMS AND CONDITIONS. UNAUTHORISED USE OF THIS WEBSITE MAY GIVE RISE TO A CRIMINAL OFFENCE. YOUR USE
            OF THIS WEBSITE AND ANY DISPUTE ARISING OUT OF SUCH USE OF THE WEBSITE IS SUBJECT TO THE LAWS OF ENGLAND,
            NORTHERN IRELAND, SCOTLAND AND WALES.</p>
    </div>
</div>
</body>
</html>