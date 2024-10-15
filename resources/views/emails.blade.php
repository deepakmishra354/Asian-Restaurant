<!-- resources/views/emails/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Application!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333333;
            font-size: 24px;
            margin-bottom: 10px;
        }
        h2 {
            color: #333333;
            font-size: 20px;
            margin-top: 20px;
        }
        p {
            color: #555555;
            line-height: 1.5;
            font-size: 16px;
            margin: 0 0 15px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777777;
            text-align: center;
        }
        @media (max-width: 600px) {
            .container {
                padding: 15px;
            }
            h1 {
                font-size: 22px;
            }
            h2 {
                font-size: 18px;
            }
            p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome, {{ $user->name }}!</h1>
        <p>Thank you for registering. We're glad to have you!</p>
        
        <h2>Getting Started</h2>
        <p>To get started, please log in to your account using the link below:</p>
        <p><a href="{{ url('/login') }}">Log in to your account</a></p>
        <p>Once logged in, you can explore our features, including:</p>
        <ul>
            <li>Customizing your profile</li>
            <li>Accessing exclusive content</li>
            <li>Joining community discussions</li>
        </ul>

        <h2>Need Help?</h2>
        <p>If you have any questions or need assistance, feel free to reach out to our support team:</p>
        <p>Email: <a href="mailto:support@coffestore.com">support@coffeestore.com</a></p>
        <p>We're here to help you!</p>

        <h2>Stay Connected</h2>
        <p>Follow us on social media to stay updated:</p>
        <p>
            <a href="https://facebook.com/yourapplication">Facebook</a> |
            <a href="https://twitter.com/yourapplication">Twitter</a> |
            <a href="https://instagram.com/yourapplication">Instagram</a>
        </p>

        <div class="footer">
            <p>&copy; {{ date('Y') }} Your Application Name. All rights reserved.</p>
        </div>
    </div>

</body>
</html>
