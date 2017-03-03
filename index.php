<!doctype html>
<html>
<head>
    <title>PHP Syntax</title>
    <style>
        .phpcoding{
            width: auto;
            margin:0 auto;
            background: #dddddd;
        }
        .headeroption, .footeroption{
            background: #444;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .maincontent{
            /*min-height: 400px;*/
            padding-left: 60px;
        }
        .senddata{
            padding: 20px;
        }
        .light{
            background: #c0c0c0
        }
        .dark{
            background: #7f7f7f;
        }
        .headeroption h2, .footeroption h2{
            margin: 0;
        }
    </style>
</head>
<body>

<div class="phpcoding">
    <section class="headeroption">
        <a href="/">
            <h2>PHP Fundamental Training</h2>
        </a>

    </section>
    <section class="maincontent light">
        <h1>Sample Form</h1>
<!--        Form contents-->
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            Username<sup style="color: #8b0000">*</sup>: <input title="Username" type="text" name="username">
            Password<sup style="color: #8b0000">*</sup>: <input title="Password" type="password" name="password">
            <input type="submit" value="Submit">
        </form>

<!--        Form condition-->
    <section class="dark">
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            if(empty($name)) {
                echo "<div style='color: #8b0000'> Username is a required field.</div>";
            }
            if(empty($password)) {
                echo "<div style='color: #8b0000'> Password is a required field.</div>";
            }
            else{
                echo '<br>Welcome '.$name.' !';
                }
        }
        ?>
    </section>
<!--        Get data with GET method and pass variable with URL parameter.-->
        <section class="senddata light"><a href="text.php?msg=Good&txt=Boy">Send Data</a></section>
    </section>

    <section class="dark maincontent">
        <form method="post" name="contact-us" action="<?php echo $_SERVER['PHP_SELF']?>">
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input title = "Name" type="text" name = "name">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input title="Email" type="email" name="email">
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>
                    <input title="Phone" type="tel" name="telephone">
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input title="Female" type="radio" name="gender" value="Female">Female
                    <input title="Male" type="radio" name="gender" value="Male">Male
                </td>
                <td
            </tr>
            <tr>
                <td>
                    Date of Birth
                </td>
                <td>
                    <input title="DOB" type="date" name="DOB" value="DOB">
                </td>
            </tr>
            <tr>
                <td>Comment</td>
                <td>
                    <textarea title="comment" name="comment" rows="5" cols="50"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input title="submit" type="submit" name="Submit">
                </td>
            </tr>

        </table>
        </form>
    </section>

    <section class="footeroption">
        <h2>www.php.net</h2>
    </section>
</div>
</body>
</html>
