<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        width: 600px;
        margin: 0 auto;
    }

    header {
        background-color: #335f19;
        color: #fff;
        padding: 10px;
        text-align: center;
    }

    main {
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
    }

    footer {
        text-align: center;
        padding: 8px;
        background-color: #335f19;
        color: #fff;
    }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>PT TOCOCO INDONESIA BERKAH</h1>
        </header>

        <main>
            <h4>From:</h4>
            <h3>{{ $mail_data['fromName'] }}</h3>
            <h4>Email:</h4>
            <h3>{{ $mail_data['fromEmail'] }}</h3>
            <h4>Subject:</h4>
            <h3>{{ $mail_data['subject'] }}</h3>
            <h4>Message:</h4>
            <p>{{ $mail_data['body'] }}</p>
        </main>

        <footer>
            <p>&copy; 2023. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
