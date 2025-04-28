<!DOCTYPE html>
<html>
<head>
    <title>Exam Paper Checking System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        h1 {
            text-align: center;
            margin-top: 50px;
        }
        h2 {
            margin-top: 30px;
            text-align: center;
            color: #007bff;
        }
        form {
            margin-top: 30px;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Exam Paper Checking System</h1>
        <h2>Teacher Login</h2>
        <form action="teacher_dashboard.php" method="POST">
            <div class="form-group">
                <label for="teacher_username">Username:</label>
                <input type="text" id="teacher_username" name="teacher_username">
            </div>
            <div class="form-group">
                <label for="teacher_password">Password:</label>
                <input type="password" id="teacher_password" name="teacher_password">
            </div>
            <input type="submit" value="Login">
        </form>

        <h2>Student Login</h2>
        <form action="student_dashboard.php" method="POST">
            <div class="form-group">
                <label for="student_roll_number">Roll Number:</label>
                <input type="text" id="student_roll_number" name="student_roll_number">
            </div>
            <div class="form-group">
                <label for="student_name">Name:</label>
                <input type="text" id="student_name" name="student_name">
            </div>
            <div class="form-group">
                <label for="student_subject_code">Subject Code:</label>
                <input type="text" id="student_subject_code" name="student_subject_code">
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>