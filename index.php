<?php
    include 'db_conn.php';
    if (isset($_POST['submit'])) {
        $conn = DBConnection::getDbConnection();
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $month = $_POST['month'];
        $day = $_POST['day'];
        $year = $_POST['year'];
        $sex = $_POST['sex'];


        if (!preg_match('~[0-9]+~', $firstName) && !preg_match('~[0-9]+~', $lastName) &&
            !is_null($month) && !is_null($day) && !is_null($year) && !is_null($sex)) {

                $query = "INSERT INTO form_data (firstName, lastName, pass, email, month, day, year, sex ) 
                            VALUES ('$firstName','$lastName', '$pass', '$email', '$month', '$day', '$year', '$sex')";
                mysqli_query($conn, $query);
        }
        else echo '<script>alert("Wrong data entered")</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Facebook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
    <div class="MainBlock">
        <div class="header">
            <h2>Sign Up</h2>
            <p>It's quick and easy.</p>
            <hr>
        </div>
        <div class="section1">
            <div class="names">
                <input type="text" name="firstName" required placeholder='First name'>
                <input type="text" name="lastName" required placeholder="Last name">
            </div>
            <div class="credentials">
                <input id="f3" type="email" name="email" required placeholder="Email">
                <input id="f4" type="password" name="pass" required
                       pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
                       placeholder="New password"
                       title="Must contain at least 1 number, 1 uppercase and 1 lowercase letter, 1 special symbol and at least 8 or more characters">
            </div>
        </div>
        <fieldset class="date">
            <legend>Birthday</legend>
            <select name='month' value="month" required>
                <option value="">Month</option>
                <option value='1'>January</option>
                <option value='2'>February</option>
                <option value='3'>March</option>
                <option value='4'>April</option>
                <option value='5'>May</option>
                <option value='6'>June</option>
                <option value='7'>July</option>
                <option value='8'>August</option>
                <option value='9'>September</option>
                <option value='10'>October</option>
                <option value='11'>November</option>
                <option value='12'>December</option>
            </select>

            <select name='day' value="day" required>
                <option value="">Day</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
                <option value='10'>10</option>
                <option value='11'>11</option>
                <option value='12'>12</option>
                <option value='13'>13</option>
                <option value='14'>14</option>
                <option value='15'>15</option>
                <option value='16'>16</option>
                <option value='17'>17</option>
                <option value='18'>18</option>
                <option value='19'>19</option>
                <option value='20'>20</option>
                <option value='21'>21</option>
                <option value='22'>22</option>
                <option value='23'>23</option>
                <option value='24'>24</option>
                <option value='25'>25</option>
                <option value='26'>26</option>
                <option value='27'>27</option>
                <option value='28'>28</option>
                <option value='29'>29</option>
                <option value='30'>30</option>
                <option value='31'>31</option>
            </select>

            <select name='year' value="year" required>
                <option value="">Year</option>
                <option value='2023'>2023</option>
                <option value='2022'>2022</option>
                <option value='2021'>2021</option>
                <option value='2020'>2020</option>
                <option value='2019'>2019</option>
                <option value='2018'>2018</option>
                <option value='2017'>2017</option>
                <option value='2016'>2016</option>
                <option value='2015'>2015</option>
                <option value='2014'>2014</option>
                <option value='2013'>2013</option>
                <option value='2012'>2012</option>
                <option value='2011'>2011</option>
                <option value='2010'>2010</option>
                <option value='2009'>2009</option>
                <option value='2008'>2008</option>
                <option value='2007'>2007</option>
                <option value='2006'>2006</option>
                <option value='2005'>2005</option>
                <option value='2004'>2004</option>
                <option value='2003'>2003</option>
                <option value='2002'>2002</option>
                <option value='2001'>2001</option>
                <option value='2000'>2000</option>
            </select>
        </fieldset>
        <fieldset class="sex">
            <legend>Gender</legend>
            <div class="radio">
                <input class="radio" type="radio" name='sex' value='female' required>
                <p>Female</p>
            </div>
            <div class="radio">
                <input class="radio" type="radio" name='sex' value='male' required>
                <p>Male</p>
            </div>
            <div class="radio">
                <input class="radio" type="radio" name='sex' value='nd' required>
                <p>Custom</p>
            </div>
        </fieldset>
        <div class="footer">
            By clicking Sign Up, you agree to our <span>Terms</span>. Learn how we collect, use and share your data in
            our <span>Data Policy</span> and how we use cookies and similar technology in our
            <span>Cookies Policy</span> . You may receive SMS Notifications from us and can opt out any time.
        </div>

        <input class="submitButton" type="submit" name="submit" value="Sign Up">

    </div>
</form>
</body>
</html>

