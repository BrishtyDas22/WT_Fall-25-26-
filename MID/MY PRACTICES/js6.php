<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-Time Digital Clock</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
        }

        #clock {
            font-size: 48px;
            font-weight: bold;
            padding: 20px 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            text-align: center;
        }
    </style>
</head>
<body>

<div id="clock">00:00:00 AM</div>

<script>
    function updateClock() {
        const now = new Date();

        let hours = now.getHours();
        const minutes = now.getMinutes();
        const seconds = now.getSeconds();

        // 12-hour format
        const ampm = hours >= 12 ? "PM" : "AM";
        hours = hours % 12;
        hours = hours ? hours : 12; // hour '0' should be '12'

        // Add leading zeros
        const displayHours = hours < 10 ? "0" + hours : hours;
        const displayMinutes = minutes < 10 ? "0" + minutes : minutes;
        const displaySeconds = seconds < 10 ? "0" + seconds : seconds;

        const timeString = `${displayHours}:${displayMinutes}:${displaySeconds} ${ampm}`;

        document.getElementById("clock").innerText = timeString;
    }

    // Update every second
    setInterval(updateClock, 1000);

    // Initial call
    updateClock();
</script>

</body>
</html>
