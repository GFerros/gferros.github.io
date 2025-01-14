<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/scripts.js"></script>
    <?php include 'includes/define.inc.php'
    ?>
</head>
<body>
    <?php include INC_NAVBAR ?>

    <main style="margin-top: 120px;">
        <div class="container">
            <div class="row mb-4">
                <div class="col-6">
                    <img src="media/Current_Portrait.jpg" alt="Grant Ferris" class="img-fluid rounded h-100">
                </div>
                <div class="col-6">
                    <h1>Grant Ferris</h1>
                    <div class="horizontal-line"></div>
                    <p>
                        My name is Grant Ferris, a current student at Bowling Green State University.
                        I am currently a third-year student studying Computer Science for a Bachelors of Science as well as a minor in Digital Arts. 
                        This personal website is meant as a way progress my skills in web development and to showcase my work both in Computer Science and Digital Arts.
                        I'm currently striving to become a software developer as well as a digital artist either as a serious hobby or as a career.
                    </p>
                    <p>
                        For more personal information about me, please visit the about page. If you would like to contact me
                        then go to the contacts page with my socials. If you would like to see my work in Computer Science or Digital Arts
                        then go to the respective pages.
                    </p>
                </div>
            </div>
        </div>

    </main>


    <?php include INC_FOOTER ?>
</body>
</html>