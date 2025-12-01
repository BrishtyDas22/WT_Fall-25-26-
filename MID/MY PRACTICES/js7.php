<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Style Control Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f0f2f5;
        }

        #textBlock {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            font-size: 16px;
            text-align: left;
            transition: all 0.3s ease;
            width: 80%;
            margin: 20px auto;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            background-color: #0077cc;
            color: white;
            transition: background-color 0.2s;
        }

        button:hover {
            background-color: #005fa3;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Dynamic Style Control Panel</h2>

<p id="textBlock">
    This is a sample paragraph. Use the buttons below to dynamically change its style, such as background color, font size, or text alignment. You can also reset the styles to default.
</p>

<div class="btn-container">
    <button onclick="changeBackground()">Change Background Color</button>
    <button onclick="increaseFontSize()">Increase Font Size</button>
    <button onclick="centerText()">Center Text</button>
    <button onclick="resetStyles()">Reset Style</button>
</div>

<script>
    const textBlock = document.getElementById("textBlock");

    let currentFontSize = 16; // default font size in px
    const defaultStyles = {
        backgroundColor: "#fff",
        fontSize: "16px",
        textAlign: "left"
    };

    function changeBackground() {
        const colors = ["#ffcccc", "#ccffcc", "#ccccff", "#ffffcc", "#ffccff"];
        const randomColor = colors[Math.floor(Math.random() * colors.length)];
        textBlock.style.backgroundColor = randomColor;
    }

    function increaseFontSize() {
        currentFontSize += 2;
        textBlock.style.fontSize = currentFontSize + "px";
    }

    function centerText() {
        textBlock.style.textAlign = "center";
    }

    function resetStyles() {
        textBlock.style.backgroundColor = defaultStyles.backgroundColor;
        textBlock.style.fontSize = defaultStyles.fontSize;
        textBlock.style.textAlign = defaultStyles.textAlign;
        currentFontSize = 16;
    }
</script>

</body>
</html>
