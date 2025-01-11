<?php $files = scandir("./pictures/");
//print_r($files);
echo "<br>";
$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
for($i = 2 ; $i< sizeof($files); $i++) {
   $file = $files[$i];
   $extention = strtolower(pathinfo($file, PATHINFO_EXTENSION));
   if(!in_array($extention,$allowedExtensions)){
    echo $file;
    unlink("./pictures/".$file);
    echo "<br>";
   }
}
$newfiles = scandir("./pictures/");
//print_r($newfiles);?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
        <center>
            <h1 class="text-center">
                DEMO Upload File Vulnerability
            </h1>
        </center>
        <br>
    </header>
    <main>
        <div class="container">
            <div class="row px-4">
                <a class="col border border-5 rounded text-center" href="./Lab1">
                    1 filter client side only
                </a>
                <a class="col border border-5 rounded text-center" href="./Lab2">
                    2 check if image
                </a>
                <a class="col border border-5 rounded text-center" href="./Lab3">
                    3 check if image and file extention
                </a>
            </div>
        </div>
    </main>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>