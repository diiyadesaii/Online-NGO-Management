
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Screen</title>
    <style>
        .form-box {
            border: 2px solid #ccc;
            border-radius: 10px;
            padding: 15px;
            max-width: 400px; /* Increased width */
            margin: 0 auto;
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }
        .form-box h1 {
            font-family: "Arial Black", sans-serif;
            color: #333;
            font-size: 20px;
            margin-bottom: 15px;
        }
        .form-box h3 {
            margin-bottom: 10px;
            font-size: 14px;
        }
        .form-box input[type="text"],
        .form-box input[type="password"],
        .form-box input[type="tel"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .form-box input[type="submit"],
        .form-box input[type="button"] {
            background-color: #4CAF50;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            margin-right: 5px;
        }
        .form-box input[type="submit"]:hover,
        .form-box input[type="button"]:hover {
            background-color: #45a049;
        }
    </style>
    <script>
        function validate() {
            var letter = /[a-zA-Z]/;
            var number = /[0-9]/;
            var specialChar = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/; // Regular expression for special characters
            var uname = document.registration_form.email.value;
            var pass = document.registration_form.pass.value;
            var phone = document.registration_form.phone.value;
            var errorMessage = "";
        
            // Email validation regex
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        
            if (uname == "") {
                errorMessage += "Email ID cannot be Empty!!\n";
            } else if (!emailRegex.test(uname)) {
                errorMessage += "Invalid Email ID format!!\n";
            }
        
            if (pass == "") {
                errorMessage += "Password must be filled\n";
            }
            if (pass.length < 8) {
                errorMessage += "Password Should be longer than 8 characters.\n";
            }
            if (!letter.test(pass)) {
                errorMessage += "Password should include UpperCase and LowerCase character\n";
            }
            if (!number.test(pass)) {
                errorMessage += "Password should Include Digit\n";
            }
            if (!specialChar.test(pass)) {
                errorMessage += "Password should Include Special Character\n";
            }
        
            if (phone == "") {
                errorMessage += "Mobile Number must be filled\n";
            }
            if (!/^\d{10}$/.test(phone)) {
                errorMessage += "Mobile Number should be 10 digits\n";
            }
        
            if (errorMessage !== "") {
                alert(errorMessage);
                return false;
            }
            return true;
        }
        
        function skip() {
            window.location.href = "index.html"; // Redirect to homepage
        }
    </script>
</head>
<body background="ngos-map-background-1.jpg">
    <center>
        <div class="form-box">
            <h1>Enter Your Details</h1>
            <form name="registration_form" action="9.2.php" method="post" onsubmit="return validate()">
                <h3>Email ID : <input type="text" name="email" placeholder="Enter Email" required></h3>
                <h3>Mobile Number : <input type="tel" name="phone" placeholder="Enter Mobile Number" required></h3>
                <h3>Password : <input type="password" name="pass" placeholder="Enter Password" required></h3>
                <input type="submit" value="Submit">
                <input type="button" value="Skip" onclick="skip()">
            </form>
        </div>
    </center>
</body>
</html>
