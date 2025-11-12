<html>
<head>
    <title>Student Details Form</title>
</head>
<body>
    <h2>Student Registration Form</h2>

    <form method="post" action="">
        <label>Full Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Email ID:</label>
        <input type="email" name="email" required><br><br>

        <label>Mobile Number:</label>
        <input type="text" name="mobile" pattern="[0-9]{10}" title="Enter 10 digit mobile number" required><br><br>

        <label>Address:</label><br>
        <textarea name="address" rows="3" cols="30" required></textarea><br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required>Male
        <input type="radio" name="gender" value="Female">Female<br><br>

        <label>Date of Birth:</label>
        <input type="date" name="dob" required><br><br>

        <label>Course:</label>
        <select name="course" required>
            <option value="">--Select--</option>
            <option value="MCA">MCA</option>
            <option value="M.Tech">M.Tech</option>
            <option value="MBA">MBA</option>
            <option value="B.Sc">B.Sc</option>
        </select><br><br>

        <label>Qualification:</label>
        <input type="text" name="qualification" placeholder="e.g., B.Sc, BCA" required><br><br>

        <label>Hobbies:</label><br>
        <input type="checkbox" name="hobbies[]" value="Reading">Reading
        <input type="checkbox" name="hobbies[]" value="Sports">Sports
        <input type="checkbox" name="hobbies[]" value="Music">Music
        <input type="checkbox" name="hobbies[]" value="Traveling">Traveling
        <input type="checkbox" name="hobbies[]" value="Others">Others<br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>

    <hr>

    <?php
    if (isset($_REQUEST['name'])) {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $mobile = $_REQUEST['mobile'];
        $address = $_REQUEST['address'];
        $gender = $_REQUEST['gender'];
        $dob = $_REQUEST['dob'];
        $course = $_REQUEST['course'];
        $qualification = $_REQUEST['qualification'];
        $hobbies = isset($_REQUEST['hobbies']) ? implode(", ", $_REQUEST['hobbies']) : "None";

        echo "<h2>Student Details:</h2>";
        echo "Name: <b>$name</b><br>";
        echo "Email ID: <b>$email</b><br>";
        echo "Mobile Number: <b>$mobile</b><br>";
        echo "Address: <b>$address</b><br>";
        echo "Gender: <b>$gender</b><br>";
        echo "Date of Birth: <b>$dob</b><br>";
        echo "Course: <b>$course</b><br>";
        echo "Qualification: <b>$qualification</b><br>";
        echo "Hobbies: <b>$hobbies</b><br>";
    }
    ?>
</body>
</html>

