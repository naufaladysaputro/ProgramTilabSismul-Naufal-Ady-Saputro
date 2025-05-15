<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Website</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: white;
        }

        header {
            background: rgba(0, 0, 0, 0.2);
            padding: 1rem;
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .hero {
            text-align: center;
            padding: 4rem 0;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease;
        }

        .hero p {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease 0.3s;
            opacity: 0;
            animation-fill-mode: forwards;
        }

        .text-effect {
            background: linear-gradient(90deg, #fff, #f0f0f0);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .content-section {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 2rem;
            margin: 2rem 0;
            animation: fadeIn 1s ease 0.6s;
            opacity: 0;
            animation-fill-mode: forwards;
        }

        .image-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 1rem 0;
        }

        .gallery-item {
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
            background: rgba(255, 255, 255, 0.1);
            padding: 1rem;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
        }

        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            display: block;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .typing-effect {
            border-right: 3px solid white;
            white-space: nowrap;
            overflow: hidden;
            margin: 0 auto;
            letter-spacing: 2px;
            animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
        }

        @keyframes typing {
            from {
                width: 0
            }

            to {
                width: 100%
            }
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent
            }

            50% {
                border-color: white;
            }
        }

        footer {
            background: rgba(0, 0, 0, 0.2);
            padding: 1.5rem;
            text-align: center;
            margin-top: auto;
        }

        .footer-text {
            font-size: 1.1rem;
            font-weight: 500;
            letter-spacing: 1px;
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #667eea;
            }

            to {
                text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #764ba2;
            }
        }


        .video-wrapper iframe {
            width: 70%;
            /* Sesuaikan lebar sesuai kebutuhan */
            height: 400px;
            /* Sesuaikan tinggi sesuai kebutuhan */
            margin: 0 auto;
            display: block;
        }

        .video-wrapper {
            width: 80%;
            /* Mengatur lebar kotak video */
            margin: 2rem auto;
            /* Memusatkan kotak video */
            padding: 1rem;
            /* Memberi ruang di dalam kotak video */
            border-radius: 10px;
            /* Membuat sudut kotak video melengkung */
            background: rgba(0, 0, 0, 0.3);
            /* Menambahkan latar belakang transparan */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            /* Menambahkan bayangan pada kotak */
        }
    </style>
</head>

<body>
    <header>
        <h2 class="text-effect">Welcome to Our Website</h2>
    </header>

    <div class="container">
        <section class="hero">
            <h1 class="text-effect"><?php echo "Welcome to the Future"; ?></h1>
            <p class="typing-effect">Discover amazing possibilities with us</p>
        </section>

        <section class="content-section">
            <h2>About Us</h2>
            <p>
                <?php
                $welcome_text = "We are a creative team dedicated to bringing innovative solutions to life. 
                Our passion drives us to create exceptional experiences for our clients.";
                echo $welcome_text;
                ?>
            </p>
        </section>

        <section class="content-section">
            <h2>Our Services</h2>
            <?php
            $services = [
                "Web Development",
                "Digital Marketing",
                "UI/UX Design",
                "Content Creation"
            ];

            echo "<ul style='list-style: none; padding: 1rem;'>";
            foreach ($services as $service) {
                echo "<li style='margin: 0.5rem 0;'>✨ {$service}</li>";
            }
            echo "</ul>";
            ?>
        </section>

        <section class="content-section">
            <h2>Our Gallery</h2>
            <div class="image-gallery">
                <?php
                $images = [
                    'hamilton.png',
                    'max.png'
                ];

                foreach ($images as $image) {
                    echo "<div class='gallery-item'>
                            <img src='assets/img/{$image}' alt='" . pathinfo($image, PATHINFO_FILENAME) . "'>
                          </div>";
                }
                ?>
            </div>
        </section>

        <section class="content-section">
            <h2>Our Video</h2>
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/1H-hlSxT4VU?si=hsPE_e3OrGdqIr4d" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>
        </section>

    </div>

    <!-- <section class="content-section">
        <h2>Our Video</h2>
        <div class="video-wrapper">
            <video controls width="100%" poster="assets/img/video-thumbnail.jpg">
                <source src="https://youtu.be/gXY40oiNhEA?si=W2PkMKSBbHWdJqfb" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </section> -->





    <!-- Background Audio -->
    <!-- <audio autoplay loop>
        <source src="assets/audio/8788437679912678801-c.mp3" type="audio/mp3">
        Your browser does not support the audio element.
    </audio> -->

    <!-- Background Audio controls-->
    <!-- <audio id="bgAudio" controls autoplay loop preload="auto">
        <source src="assets/audio/8788437679912678801-c.mp3" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>

    <script>
        // Pastikan audio dapat diputar
        window.onload = function() {
            var audio = document.getElementById('bgAudio');
            audio.play().catch(function(error) {
                console.log("Audio autoplay failed:", error);
            });
        }
    </script> -->

    <!-- Background Audio first click-->
    <audio id="bgAudio" autoplay loop preload="auto" style="display: none;">
        <source src="assets/audio/8788437679912678801-c.mp3" type="audio/mp3">
        Your browser does not support the audio element.
    </audio>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var audio = document.getElementById('bgAudio');

            // Mencoba memutar audio saat interaksi pertama user dengan halaman
            document.addEventListener('click', function initAudio() {
                audio.play();
                document.removeEventListener('click', initAudio);
            }, { once: true });

            // Mencoba memutar audio secara otomatis
            audio.play().catch(function (error) {
                console.log("Autoplay prevented - waiting for user interaction");
            });
        });
    </script>

    <footer>
        <p class="footer-text">© 2025 | Naufal Ady Saputro</p>
    </footer>
</body>

</html>