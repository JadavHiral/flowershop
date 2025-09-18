<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .feedback-container {
            max-width: 500px;
            margin: 40px auto;
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .feedback-title {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        .feedback-success {
            color: green;
            text-align: center;
        }

        .feedback-error {
            color: red;
            text-align: center;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="feedback-container">
        <h2 class="feedback-title">🌻Feedback Form🌻</h2>
        <form id="feedbackForm">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit Feedback</button>

        </form>
        <div id="feedbackMsg"></div>
    </div>
</body>

</html>

<?php
$content1 = ob_get_clean();
include_once "layout.php";
include("footer.php");
?>