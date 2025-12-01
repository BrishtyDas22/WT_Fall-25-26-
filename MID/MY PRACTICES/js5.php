<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Analyzer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f0f2f5;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        textarea {
            width: 100%;
            height: 150px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            resize: none;
            font-size: 16px;
        }

        button {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #0077cc;
            color: white;
        }

        button:hover {
            background-color: #005fa3;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .result p {
            margin: 10px 0;
        }
    </style>
</head>
<body>

<h2>Text Analyzer Tool</h2>

<textarea id="inputText" placeholder="Paste your text here..."></textarea>
<br>
<button id="analyzeBtn">Analyze Text</button>

<div class="result" id="resultDiv" style="display:none;">
    <p id="charCount"></p>
    <p id="wordCount"></p>
    <p id="reversedText"></p>
</div>

<script>
    const analyzeBtn = document.getElementById("analyzeBtn");
    const inputText = document.getElementById("inputText");
    const resultDiv = document.getElementById("resultDiv");
    const charCount = document.getElementById("charCount");
    const wordCount = document.getElementById("wordCount");
    const reversedText = document.getElementById("reversedText");

    analyzeBtn.addEventListener("click", function() {
        const text = inputText.value.trim();

        if (text === "") {
            alert("Please enter some text to analyze!");
            resultDiv.style.display = "none";
            return;
        }

        // Character count
        const totalChars = text.length;

        // Word count (handle multiple spaces)
        const wordsArray = text.split(/\s+/); // split by one or more spaces
        const totalWords = wordsArray.length;

        // Reverse text
        const reversed = text.split("").reverse().join("");

        // Display results
        charCount.innerText = `Total Characters: ${totalChars}`;
        wordCount.innerText = `Total Words: ${totalWords}`;
        reversedText.innerText = `Reversed Text: ${reversed}`;

        resultDiv.style.display = "block";
    });
</script>

</body>
</html>
