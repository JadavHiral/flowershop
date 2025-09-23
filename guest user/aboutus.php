<?php
$title_page;
ob_start();
?>


<style>
    body {
        margin: 0;
        padding: 0;
        background: #fae8f4ff;
    }

    .section {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 50px 10%;
        gap: 40px;
        flex-wrap: wrap;
        transition: 0.5s ease-in-out;
    }

    .vision {
        background: linear-gradient(135dge, #ffe6f0, #fff);
    }

    .mission {
        background: linear-gradient(135dge, #fff8e6, #fff);
    }

    .section img:hover {
        transform: scale(1.05);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .section img {
        height: 300px;
        width: auto;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0.3s;
        flex: 1 1 300px;
        transition: transform 0.3s;
    }

    .section .content {
        width: 50%;
        flex: 1 1 400px;
    }

    .section .content h2 {
        font-size: 28px;
        color: #050002ff;
        margin-bottom: 15px;
    }

    .section .content p {
        font-size: 20px;
        color: #171616ff;
        line-height: 1.6;
    }

    /* Alternate layout */
    .section.reverse {
        flex-direction: row-reverse;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .section {
            flex-direction: column;
            text-align: center;
        }

        .section img,
        .section .content {
            width: 400px;
        }
    }
</style>
</head>

<body>

    <!-- Vision Section -->

    <div class="section">
        <div class="content">
            <h2><b><u>About Flower Shop</u></b></h2>
            <p>Welcome to <strong>Unique Flower Shop</strong>! </br>
                We believe flowers bring joy and positivity to life.</br>
                Our mission is to provide fresh and beautiful flowers for every occasion whether it's a birthday, wedding, anniversary,
                or just to make someone smile 🌼.</p>
            <p>
                We also offer custom bouquets, event decorations, and same-day delivery in your city.</p>
        </div>
        <img src="images/wp7.jpg" alt="Vision Image">
    </div>


    <!-- Mission Section -->

    <div class="section reverse">
        <div class="content">
            <h2>Our Mission</h2>
            <p>Our mission is to deliver fresh, high-quality flowers at affordable prices.</br>
                Whether it’s a birthday, wedding, anniversary, or just a “thank you” moment,
                we are here to make it memorable with our special floral arrangements. 💐</p>
        </div>
        <img src="images/whitepinkrosse.jpg" alt="Mission Image">
    </div>

</body>

<?php
$content1 = ob_get_clean();
include_once("layout.php");
?>