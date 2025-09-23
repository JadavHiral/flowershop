<?php
ob_start();
?>


<style>
    body {
        background-image: url("images/wp1.jpg");
        background-size: cover;
        /* Makes image fill the screen */
        background-repeat: no-repeat;
        /* Prevents tiling */
        background-position: center center;


    }

    .feedback-container {
        max-width: 600px;
        height: 650px;
        margin: 40px auto;
        background: #f8f9fa;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        border: 2px solid #f66797;
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

    .error {
        color: red;
        font-size: 14px;
        margin-top: 5px;
        margin-bottom: 0;
        text-align: center;
    }
</style>
</head>

<body>
    <!--feedback form-->
    <div class="feedback-container">
        <h2 class="feedback-title"><b><u>Feedback Form</u></b></h2><br>
        <form id="feedbackForm">
            <div class="mb-3">
                <label for="name1" class="form-label"> Your Name:</label>
                <input type="text" class="form-control" id="name1" placeholder="Enter Name" name="fname" data-validation="required">
                <div class="error text-danger" id="fnameError"></div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" data-validation="required email">
                <div class="error" id="emailError"></div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5"  placeholder="Give your massage"></textarea>
            </div>
            <br>
            <button type="submit" class="btn w-100">Submit Feedback</button>

        </form>
        <div id="feedbackMsg"></div>
    </div>
</body>

<?php
$content1 = ob_get_clean();
include_once("layout.php");
?>