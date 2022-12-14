<!DOCTYPE html>
<html lang="ar" dir='rtl'>

<head>
    <meta charset="utf-8">
    <title>الرفاعي للمحاماة</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Consulting Website Template Free Download" name="keywords">
    <meta content="Consulting Website Template Free Download" name="description">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    @include('include.style')
    <style>
        /* Slider  */
        .slider {
            height: 100vh;
            position: relative;
            overflow: hidden;
            opacity: 0.375;
            margin-top: 2.5%;
        }

        .slide {
            height: 80%;
            width: 105%;
            position: absolute;
            top: 0;
            left: 0;
            background-size: cover;
            background-position: left;
            opacity: 0;
            animation: fade linear infinite backwards normal;
            animation-duration: 20s;
        }

        .slide:nth-child(1) {
            animation-delay: 0s;
        }

        .slide:nth-child(2) {
            animation-delay: 5s;
        }

        .slide:nth-child(3) {
            animation-delay: 10s;
        }

        @media (max-width: 991.98px) {

            .navbar {
                padding: 0px;
            }

            .slider {
                width: 99%;
                margin-top: -0.5%;
            }
        }

        @keyframes fade {

            0%,
            100%,
            50% {
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            30% {
                opacity: 1;
                transform: translateX(-5%) scale(105%);
            }
        }

        @media screen and (max-width: 1000px) {
            .deal-section {
                display: none !important;
            }
        }
    </style>
</head>
