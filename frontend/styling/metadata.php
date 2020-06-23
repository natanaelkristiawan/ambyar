<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8"/>
    <title>Coklat E-commerce</title>
    <meta name="theme-color" content="#dd7e17"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="robots" content=""/>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/uploads/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/uploads/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/uploads/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/uploads/favicon/site.webmanifest">
    <!-- end favicon -->

    <!-- critical CSS -->
    <style>
        /* preloader */
        body.preloader-site {
            overflow: hidden;
        }

        .preloader-wrapper {
            background-color: #ffffff;
            height: 100%;
            left: 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 500;
        }

        .preloader-wrapper .spinner {
            height: 40px;
            left: 50%;
            margin: 0 auto;
            position: absolute;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 40px;
        }

        .preloader-wrapper .spinner .bounce {
            -webkit-animation: preloader-bounce 2s infinite ease-in-out;
            animation: preloader-bounce 2s infinite ease-in-out;
            background-color: #333333;
            border-radius: 100%;
            height: 100%;
            left: 0;
            opacity: .6;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .preloader-wrapper .spinner .bounce:nth-child(2) {
            -webkit-animation-delay: -1s;
            animation-delay: -1s;
        }

        @-webkit-keyframes preloader-bounce {
            0%,
            100% {
                -webkit-transform: scale(0.0)
            }

            50% {
                -webkit-transform: scale(1.0)
            }
        }

        @keyframes preloader-bounce {
            0%,
            100% {
                -webkit-transform: scale(0.0);
                transform: scale(0.0);
            }

            50% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
            }
        }

        /* placeholder loading */
        .placeholder-loading {
            position: relative;
        }

        .placeholder-loading::before {
            content: " ";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 50%;
            z-index: 1;
            width: 500%;
            margin-left: -250%;
            animation: placeholder-animation .8s linear infinite;
            background: 
                linear-gradient(to right, rgba(255, 255, 255, 0) 46%, 
                rgba(255, 255, 255, .35) 50%, 
                rgba(255, 255, 255, 0) 54%) 50% 50%;
        }

        .placeholder-loading.slow::before {
            animation-duration: 1.2s;
        }

        @keyframes placeholder-animation {
            0% {
                transform: translate3d(-30%, 0, 0);
            }

            100% {
                transform: translate3d(30%, 0, 0);
            }
        }

        /* modal */
        .modal-overlay {
            backface-visibility: hidden;
            opacity: 0;
            visibility: hidden;
            z-index: 250;
        }

        /* notification bar */
        .c-notification-bar {
            display: none;
            visibility: hidden;
        }

        /* utility */
        .u-hidden {
            display: none;
        }
    </style>
    <!-- end critical CSS -->

    <!-- vendor style -->
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css"/>
    <!-- end vendor style -->

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="css/nuan.css"/>
    <!-- end main style -->

</head>

<body class="l-site preloader-site">

    <!-- preloader -->
    <div class="preloader-wrapper fn-preloader">
        <div class="spinner">
            <div class="bounce"></div>
            <div class="bounce"></div>
        </div> <!-- .spinner -->
    </div> <!-- .preloader-wrapper -->
    <!-- end preloader -->