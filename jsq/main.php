<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Operations</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>jQuery Operations</h1>

    <label for="num1">Number 1:</label>
    <input type="number" id="num1"><br><br>

    <label for="num2">Number 2:</label>
    <input type="number" id="num2"><br><br>

    <button id="calculateButton">Calculate</button>

    <div id="result"></div>

    <script>
        $(document).ready(function() {
            $('#calculateButton').click(function() {
                // Get the values from input fields
                var num1 = $('#num1').val();
                var num2 = $('#num2').val();

                // Convert values to numbers (if needed)
                num1 = parseFloat(num1);
                num2 = parseFloat(num2);

                // Perform some operations with the values
                var sum = num1 + num2;
                var difference = num1 - num2;
                var product = num1 * num2;
                var quotient = num1 / num2;

                // Display the results
                $('#result').html('<p>Sum: ' + sum + '</p>' +
                                  '<p>Difference: ' + difference + '</p>' +
                                  '<p>Product: ' + product + '</p>' +
                                  '<p>Quotient: ' + quotient + '</p>');
            });
        });
    </script>
</body>
</html>

========================================================================================================================


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Feedback Form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Feedback Form</h2>
    <form id="feedbackForm">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" placeholder="Enter your last name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Enter your feedback" required></textarea>

        <input type="submit" value="Submit">
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="script.js"></script>
</body>
</html>

========================================================================================================================
script.js

$(document).ready(function() {
    $('#feedbackForm').submit(function(event) {
        // Prevent the form from submitting normally
        event.preventDefault();

        // Gather information from input fields
        var firstName = $('#firstName').val();
        var lastName = $('#lastName').val();
        var email = $('#email').val();
        var message = $('#message').val();

        // Join first name and last name
        var fullName = firstName + ' ' + lastName;

        // Display the gathered information with joined name
        alert('Name: ' + fullName + '\nEmail: ' + email + '\nFeedback: ' + message);
    });
});

================================================================================================================================
style.css
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 100%;
    max-width: 400px;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

input[type="text"],[type="email"],
textarea {
    width: calc(100% - 22px);
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

textarea {
    height: 100px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 0;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    margin-top: 10px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}
