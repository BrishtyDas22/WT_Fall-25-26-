<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Image Slider</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f2f5;
            margin: 0;
        }

        .slider-container {
            position: relative;
            width: 600px;
            height: 400px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            background-color: #fff;
        }

        .slider-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0,0,0,0.5);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 18px;
        }

        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.7);
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }
    </style>
</head>
<body>

<div class="slider-container">
    <button class="prev">&#10094;</button>
    <img id="sliderImage" src="https://source.unsplash.com/600x400/?beach" alt="Travel Image">
    <button class="next">&#10095;</button>
</div>

<script>
    // Array of image URLs
    const images = [
        "https://source.unsplash.com/600x400/?beach",
        "https://source.unsplash.com/600x400/?mountains",
        "https://source.unsplash.com/600x400/?city",
        "https://source.unsplash.com/600x400/?forest",
        "https://source.unsplash.com/600x400/?desert"
    ];

    let currentIndex = 0;
    const sliderImage = document.getElementById("sliderImage");

    // Function to show image at currentIndex
    function showImage(index) {
        sliderImage.src = images[index];
    }

    // Next button click
    document.querySelector(".next").addEventListener("click", function() {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    });

    // Previous button click
    document.querySelector(".prev").addEventListener("click", function() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showImage(currentIndex);
    });

    // Automatic slideshow every 3 seconds
    setInterval(function() {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    }, 3000);

</script>
</body>
</html>
