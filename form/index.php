<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./confirm/msc-style.css">

    <style>
        body {
            background-image: url("https://images.pexels.com/photos/2873669/pexels-photo-2873669.jpeg");
            background-size: cover;
        }

        #statusBlock {
            position: fixed;
            right: 15px;
            top: 70px;
            font-size: 20px;
            z-index: 10000 !important;
        }

        #statusBlock .alert {
            padding-left: 50px !important;
        }

        #statusBlock i {
            position: absolute;
            left: 10px;
            top: 10px;
        }

        .labelTxt{
            font-size: 1.2rem;
            font-weight: bold;
        }
        .brandLogo {
            font-weight: bold;
            color: white;
            font-size: 5rem;
            margin-bottom: 2rem;
        }
        /* style to remove the up and down arrows on number type of input form */
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>

<body style="height: 100vh;">
    <div id="statusBlock">

    </div>
    <div class="container-fluid w-100 h-100 d-flex flex-column justify-content-center align-items-center">
        <!-- navbar start -->
        <!-- <div class="container-fluid w-100  h-100 d-flex flex-column justify-content-between align-items-center ">
            <nav class=" w-100 navbar  justify-content-between" style="background-color: rgb(52,152,219);">
                <a class="navbar-brand text-light">Quiz App</a>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav> -->
        <!-- navbar end -->
        <h1 class="brandLogo">International Water Conclave</h1>
        <div class="row">
            <form id="formRgstr">
                <div class="mb-3">
                    <label class="form-label text-light labelTxt">Full Name</label>
                    <input type="text" class="form-control required" name="fullname" id="fullname">
                </div>
                <div class="mb-3">
                    <label class="form-label text-light labelTxt">Email address</label>
                    <input type="email" class="form-control required" name="email" id="email">
                </div>
                <div class="mb-3">
                    <label class="form-label text-light labelTxt">Phone</label>
                    <input type="tel" class="form-control required" name="phone" id="phone">
                </div>
                <button type="button" class="btn btn-primary me-2" id="submitForm">Submit</button>
                <input type="hidden" id="reqType" name="reqType" value="form">
                <input type="hidden" id="submitType" name="submitType" value="">
            </form>
        </div>

        <!-- footer start -->
        <!-- <footer class="py-4 bg-dark w-100 d-flex justify-content-center align-items-center">
                <p class="text-white">Developed By Marketing Wire</p>
            </footer> -->
        <!-- footer end -->
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<script src="./confirm/msc-script.js"></script>
<script src="main.js"></script>

</html>