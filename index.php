<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Support Form</title>
    
</head>
<body>
<div class="logo">
        <img src="hackers-poulette-logo.png" alt="Hackers Poulette Logo">
    </div>
    <h1>Contact Support</h1>
    <form action="process.php" method="post">
        <div>
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" required>
            <div id="first_name_error" class="error"></div>
        </div>

        <div>
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" required>
            <div id="last_name_error" class="error"></div>
        </div>

        <div>
            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
            <div id="email_error" class="error"></div>
        </div>

        <div>
            <label for="country">Country</label>
            <input type="text" id="country" name="country" required>
            <div id="country_error" class="error"></div>
        </div>

        <div>
            <label for="subject">Subject</label>
            <select id="subject" name="subject">
                <option value="other">Other</option>
                <option value="technical">Technical Issue</option>
                <option value="billing">Billing Inquiry</option>
            </select>
        </div>

        <div>
            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>
        </div>

        <div style="display: none;">
            <label for="honeypot">Leave this field empty</label>
            <input type="text" id="honeypot" name="honeypot">
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    <script>
        function validateFirstName() {
            const firstName = document.getElementById("first_name").value;
            const firstNameRegex = /^[A-Za-z-]+$/;
            if (!firstNameRegex.test(firstName)) {
                document.getElementById("first_name_error").textContent = "Please enter a valid First Name.";
            } else {
                document.getElementById("first_name_error").textContent = "";
            }
        }

        function validateLastName() {
            const lastName = document.getElementById("last_name").value;
            const lastNameRegex = /^[A-Za-z-]+$/;
            if (!lastNameRegex.test(lastName)) {
                document.getElementById("last_name_error").textContent = "Please enter a valid Last Name.";
            } else {
                document.getElementById("last_name_error").textContent = "";
            }
        }

        function validateEmail() {
            const email = document.getElementById("email").value;
            const emailRegex = /^[A-Za-z0-9._-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
            if (!emailRegex.test(email)) {
                document.getElementById("email_error").textContent = "Please enter a valid email address.";
            } else {
                document.getElementById("email_error").textContent = "";
            }
        }

        function validateCountry() {
            const country = document.getElementById("country").value;
            const countryRegex = /^[A-Za-z\s-]+$/;
            if (!countryRegex.test(country)) {
                document.getElementById("country_error").textContent = "Please enter a valid Country.";
            } else {
                document.getElementById("country_error").textContent = "";
            }
        }

        document.getElementById("first_name").addEventListener("blur", validateFirstName);
        document.getElementById("last_name").addEventListener("blur", validateLastName);
        document.getElementById("email").addEventListener("blur", validateEmail);
        document.getElementById("country").addEventListener("blur", validateCountry);
    </script>
</body>
</html>
