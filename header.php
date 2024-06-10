<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clear smiles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="top-header">
        <div class="container-fluid">
            <div class="d-flex flex-row align-items-center justify-content-center">
                <div class="p-2">
                    <i class="fa-solid fa-phone me-2"></i><span class="me-2">Dallas (469) 460-5915</span>
                    <i class="fa-solid fa-phone me-2"></i><span>Houston (713) 817-8063</span>
                </div>
                <div class="p-2">
                    <i class="fa-solid fa-right-to-bracket me-2"></i><span>Patient Portal</span>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php"><img src="./images/logo.png" alt="logo" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-2">
                        <a class="nav-link" aria-current="page" href="./how-it-works.php">HOW IT WORKS</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="./cost.php">COSTS</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="./retainer.php">RETAINERS</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="./faq.php">FAQ</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="./review.php">REVIEWS</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="./about-us.php">ABOUT US</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="./blog.php">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./location.php">LOCATIONS</a>
                    </li>
                </ul>
                <div class="nav-btns d-flex">
                    <div class="btn-1 me-2">
                        <a href="#" class="btn">Smile Quiz</a>
                    </div>
                    <div class="btn-2">
                        <a href="./booking.php" class="btn">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var topHeader = document.querySelector('.top-header');
            var navbar = document.querySelector('.navbar');

            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    topHeader.classList.add('top-header-hidden');
                    navbar.classList.add('scrolled');
                } else {
                    topHeader.classList.remove('top-header-hidden');
                    navbar.classList.remove('scrolled');
                }
            });
        });
    </script>
</body>

</html>