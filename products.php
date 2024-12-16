<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Section</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .background {
            width: 100%;
            height: 300px;
            background-image: url('background-image.jpg'); /* Replace with your background image */
            background-size: cover;
            background-position: center;
        }

        .products-section {
            text-align: center;
            padding: 40px 20px;
            background-color: #ffffff;
        }

        .products-section h2 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .products-section p {
            max-width: 800px;
            margin: 0 auto 30px;
            color: #555;
        }

        .logo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            max-width: 900px;
            margin: 0 auto;
        }

        .logo-box {
            background: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo-box img {
            max-width: 100px;
            margin-bottom: 10px;
        }

        .logo-box span {
            display: block;
            margin-top: 10px;
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="background"></div>

    <section class="products-section">
        <h2>Products</h2>
        <p>Depending on the application, the instrument in the field is needed to measure and control various automation processes. That’s why our partners’ field instruments use different measurement principles for reliable and accurate work in every situation. We offer a wide spectrum of process instrumentation for measurement and control, system components, and data management for visualization, data recording, and seamless integration into automation systems.</p>
        
        <div class="logo-grid">
            <div class="logo-box">
                <img src="eh-logo.png" alt="Endress+Hauser Logo"> <!-- Replace with your logo -->
                <span>Endress+Hauser</span>
            </div>
            <div class="logo-box">
                <img src="abb-logo.png" alt="ABB Logo"> <!-- Replace with your logo -->
                <span>ABB motion</span>
            </div>
            <div class="logo-box">
                <img src="valmet-logo.png" alt="Valmet Logo"> <!-- Replace with your logo -->
                <span>Valmet</span>
            </div>
            <div class="logo-box">
                <img src="spirax-logo.png" alt="Spirax Sarco Logo"> <!-- Replace with your logo -->
                <span>Spirax Sarco</span>
            </div>
            <div class="logo-box">
                <img src="flexim-logo.png" alt="Flexim Logo"> <!-- Replace with your logo -->
                <span>FLEXIM</span>
            </div>
        </div>
    </section>
</body>
</html>
