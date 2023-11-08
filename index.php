<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackers-Poulette Support</title>
    <link rel="stylesheet" href="./scss/style.css" />
</head>
<body>
    <div class="logo">
        <img src="hackers-poulette-logo.png" alt="Hackers Poulette Logo">
    </div>
    <div class="wrapper">
        <h1>Contact Support</h1>
        <form action="process.php" method="post">
            <div>
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" required>
                <div id="first_name_error"></div>
            </div>

            <div>
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" required>
                <div id="last_name_error"></div>
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
                <div id="email_error"></div>
            </div>

            <div>
                <label for="country">Country</label>
                <input type="text" id="country" name="country" required>
                <div id="country_error"></div>
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
                <label for="honeypot"></label>
                <input type="text" id="honeypot" name="honeypot">
            </div>

            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    <script>
        const form = document.querySelector("form");
        const inputFields = form.querySelectorAll("input, textarea");

        function addErrorClass(errorElement) {
            errorElement.classList.add("error");
        }

        function removeErrorClass(errorElement) {
            errorElement.classList.remove("error");
        }

        function validateFirstName() {
            const firstName = document.getElementById("first_name").value;
            const firstNameRegex = /^[A-Za-z-]+$/;
            const errorElement = document.getElementById("first_name_error");

            if (!firstNameRegex.test(firstName)) {
                errorElement.textContent = "Please enter a valid First Name.";
                addErrorClass(errorElement);
            } else {
                errorElement.textContent = "";
                removeErrorClass(errorElement);
            }
        }

        function validateLastName() {
            const lastName = document.getElementById("last_name").value;
            const lastNameRegex = /^[A-Za-z-]+$/;
            const errorElement = document.getElementById("last_name_error");

            if (!lastNameRegex.test(lastName)) {
                errorElement.textContent = "Please enter a valid Last Name.";
                addErrorClass(errorElement);
            } else {
                errorElement.textContent = "";
                removeErrorClass(errorElement);
            }
        }

        function validateEmail() {
            const email = document.getElementById("email").value;
            const emailRegex = /^[A-Za-z0-9._-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
            const errorElement = document.getElementById("email_error");

            if (!emailRegex.test(email)) {
                errorElement.textContent = "Please enter a valid email address.";
                addErrorClass(errorElement);
            } else {
                errorElement.textContent = "";
                removeErrorClass(errorElement);
            }
        }

        function validateCountry() {
            const country = document.getElementById("country").value;
            const countryRegex = /^[A-Za-z\s-]+$/;
            const errorElement = document.getElementById("country_error");

            if (!countryRegex.test(country)) {
                errorElement.textContent = "Please enter a valid Country.";
                addErrorClass(errorElement);
            } else {
                errorElement.textContent = "";
                removeErrorClass(errorElement);
            }
        }

        inputFields.forEach((input) => {
            input.addEventListener("blur", (event) => {
                const inputId = event.target.id;
                if (inputId === "first_name") {
                    validateFirstName();
                } else if (inputId === "last_name") {
                    validateLastName();
                } else if (inputId === "email") {
                    validateEmail();
                } else if (inputId === "country") {
                    validateCountry();
                }
            });
        });
    </script>
</body>
</html>
