<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <style>
        .heading {
            font-family: "roboto";
            color: black;
            font-size: xx-large;
            font-weight: bold;
        }

        .desc-heading {
            font-family: "roboto";
            font-size: medium;
            color: #7e83a9;
        }

        .subheading {
            padding-top: 15px;
            font-family: "roboto";
            color: black;
            font-size: medium;
            font-weight: bold;
        }

        .desc-subheading {
            font-family: "roboto";
            color: #747474;
            font-size: small;
        }

        .left-panel img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }


        .col-8 {
            padding-top: 8%;
            padding-left: 8%;
            padding-right: 8%;
            padding-bottom: 8%;
        }


        .col-6 {
            padding-top: 5%;
        }
    </style>

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-4 left-panel img pl-0">
                <img src="Image.png" class="img-fluid">
            </div>
            <div class="col-8">
                <h1 class="heading">Light, Fast & Powerful</h1>
                <p class="desc-heading">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                    eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                    ridiculus</p>
                <p class="desc-heading">mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                    consequat massa quis enim.</p>

                <div class="row">
                    <div class="col-6">
                        <img src="architecture.png" class="img-fluid" width="40px">
                        <h1 class="subheading">Title Goes Here</h1>
                        <p class="desc-subheading">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.</p>
                    </div>
                    <div class="col-6">
                        <img src="architecture.png" class="img-fluid" width="40px">
                        <h1 class="subheading">Title Goes Here</h1>
                        <p class="desc-subheading">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <img src="architecture.png" class="img-fluid" width="40px">
                        <h1 class="subheading">Title Goes Here</h1>
                        <p class="desc-subheading">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.</p>
                    </div>
                    <div class="col-6">
                        <img src="architecture.png" class="img-fluid" width="40px">
                        <h1 class="subheading">Title Goes Here</h1>
                        <p class="desc-subheading">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
