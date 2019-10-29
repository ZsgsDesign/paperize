<?php
    namespace App;

    require_once 'autoload.php';
    $paperModel=new Paper();
    $randArticle=$paperModel->rand();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home | Paperize</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="alternate icon" type="image/png" href="/favicon.png">
    <!-- Mobile Display Declarations -->
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="theme-color" content="#3E4551">
    <!-- Desktop App Declarations -->
    <meta name="msapplication-TileColor" content="#3E4551">
    <!-- Loading Style -->
    <style>
        loading>div {
            text-align: center;
        }

        loading p {
            font-weight: 300;
        }

        loading {
            display: flex;
            z-index: 999;
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            justify-content: center;
            align-items: center;
            background: #f5f5f5;
            transition: .2s ease-out .0s;
            opacity: 1;
        }

        .lds-ellipsis {
            display: inline-block;
            position: relative;
            width: 64px;
            height: 64px;
        }

        .lds-ellipsis div {
            position: absolute;
            top: 27px;
            width: 11px;
            height: 11px;
            border-radius: 50%;
            background: rgba(0, 0, 0, .54);
            animation-timing-function: cubic-bezier(0, 1, 1, 0);
        }

        .lds-ellipsis div:nth-child(1) {
            left: 6px;
            animation: lds-ellipsis1 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(2) {
            left: 6px;
            animation: lds-ellipsis2 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(3) {
            left: 26px;
            animation: lds-ellipsis2 0.6s infinite;
        }

        .lds-ellipsis div:nth-child(4) {
            left: 45px;
            animation: lds-ellipsis3 0.6s infinite;
        }

        @keyframes  lds-ellipsis1 {
            0% {
                transform: scale(0);
            }
            100% {
                transform: scale(1);
            }
        }

        @keyframes  lds-ellipsis3 {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(0);
            }
        }

        @keyframes  lds-ellipsis2 {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(19px, 0);
            }
        }
    </style>
</head>

<body style="display: flex;flex-direction: column;min-height: 100vh;">
    <!-- Loading -->
    <loading>
        <div>
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <p>Loading PAPERIZE</p>
        </div>
    </loading>
    <!-- Style -->
    <link rel="stylesheet" href="fonts/Roboto/roboto.css">
    <link rel="stylesheet" href="fonts/Montserrat/montserrat.css">
    <link rel="stylesheet" href="fonts/Roboto-Slab/roboto-slab.css">
    <link rel="stylesheet" href="https://acm.njupt.edu.cn/static/library/bootstrap-material-design/dist/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="https://acm.njupt.edu.cn/static/css/wemd-color-scheme.css">
    <link rel="stylesheet" href="https://acm.njupt.edu.cn/static/css/main.css?version=0.3.2-28-g8703d5d">
    <link rel="stylesheet" href="https://acm.njupt.edu.cn/static/library/animate.css/animate.min.css">
    <link rel="stylesheet" href="fonts/MDI-WXSS/MDI.css">
    <link rel="stylesheet" href="fonts/Devicon/devicon.css">
    <link rel="stylesheet" href="fonts/Raleway/raleway.css">
    <!-- Background -->
    <div class="mundb-background-container">
        <img src="img/bg.jpg">
    </div>
    <style>

        .mundb-standard-container{
            padding-top: 3rem;
        }

        essay-card {
            display: block;
            box-shadow: 0 2px 2px 0 rgba(0,0,0,0.16), 0 0 0 1px rgba(0,0,0,0.08);
            border-radius: 4px;
            transition: .2s ease-out .0s;
            color: #7a8e97;
            background: rgba(255,255,255,0.7);
            padding: 1rem;
            position: relative;
            margin-bottom: 2rem;
        }

        essay-card:hover {
            box-shadow: 0 3px 3px 0 rgba(0,0,0,0.16), 0 0 0 2px rgba(0,0,0,0.08);
        }

        .cm-title-section{
            font-family: 'Raleway';
        }

        .cm-oj{
            border: 1px solid rgba(0, 0, 0, 0.15);
            border-radius: 4px;
            margin-bottom: 2rem;
            padding: 0.5rem 1rem;
            background: rgb(255, 255, 255);
        }

        timeline-container{
            display:block;
        }

        timeline-item{
            display: block;
            padding: 1rem;
            background: #fff;
            border: 1px solid rgba(0, 0, 0, 0.15);
            border-radius: 4px;
            margin-bottom: 2rem;
        }

        timeline-item[data-type^="notice"] {
            border-left: 4px solid #ffc107;
        }

        timeline-item[data-type^="notice"] > div:first-of-type{
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: rgba(0, 0, 0, 0.62);
        }

        timeline-item[data-type^="notice"] > div:last-of-type h5 {
            font-weight: bold;
            font-family: 'Roboto Slab';
            margin-bottom: 1rem;
        }

        .cm-avatar{
            width:2.5rem;
            height:2.5rem;
            border-radius: 200px;
        }

        .cm-anno{
            color:rgba(0,0,0,0.54);
            margin-bottom: 1.5rem;
            font-weight: 500;
        }

        #NOJFocusCarousel{
            border-radius: 4px;
            overflow: hidden;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 30px;
        }

        .carousel-item img{
            transform: scale(1.01);
        }

        empty-container{
            display:block;
            text-align: center;
            margin-bottom: 2rem;
        }

        empty-container i{
            font-size:5rem;
            color:rgba(0,0,0,0.42);
        }

        empty-container p{
            font-size: 1rem;
            color:rgba(0,0,0,0.54);
        }

        essay-card .title{
            font-weight: 900;
        }

        essay-card .title{
            font-weight: 900;
        }

        input[type=text]:not(.browser-default).ss-search-container{
            box-sizing:border-box;
            background:rgba(255,255,255,0.7);
            width:100%;
            padding:0 1rem;
            position: relative;
            margin: .5rem 0 1rem 0;
            transition: .25s ease-in;
            border-radius: 2px;
            box-shadow: 0 2px 2px 0 rgba(0,0,0,0.16), 0 0 0 1px rgba(0,0,0,0.08);
            outline: none;
            height: 3rem;
            font-size: 1rem;
        }
        input[type=text]:not(.browser-default){
            border: none;
            margin:0;
        }
        input[type=text]:not(.browser-default):focus:not([readonly]){
            box-shadow: none;
            -webkit-box-shadow: none;
            border-bottom:none;
        }
        input[type=text]:not(.browser-default).ss-search-container:focus:not([readonly]){
            box-shadow: 0 3px 8px 0 rgba(0,0,0,0.2), 0 0 0 1px rgba(0,0,0,0.08);
            -webkit-box-shadow: 0 3px 8px 0 rgba(0,0,0,0.2), 0 0 0 1px rgba(0,0,0,0.08);
            background:rgba(255,255,255,1);
            border-bottom:none;
        }

    </style>

    <div class="container mundb-standard-container">
        <div class="row">
            <div class="col-sm-12">
                <div class="cm-title-section mb-5">
                    <h1 style="text-align: center;">PAPERIZE<br><small style="font-size:1.5rem;color:rgba(0, 0, 0, .54);">organize your paper</small></h1>
                </div>

                <form action="search.php" method="get">
                    <input autocomplete="off" class="ss-search-container" name="q" placeholder="Type keywords here" type="text">
                </form>
                <?php if(!empty($randArticle)){ ?>
                    <p class="cm-anno"><i class="MDI star-circle"></i> Recommand for you</p>
                    <?php Helper::display($randArticle); ?>
                <?php } ?>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener("load",function() {
            
        }, false);
    </script>

    
    <footer class="d-print-none bg-dark center-on-small-only" style="flex-shrink: 0;flex-grow: 0">
        <div class="mundb-footer mundb-copyright">&copy; 2019, Paperize. </div>
    </footer>
    <script src="https://acm.njupt.edu.cn/static/library/jquery/dist/jquery.min.js"></script>
    <script src="https://acm.njupt.edu.cn/static/library/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://acm.njupt.edu.cn/static/library/bootstrap-material-design/dist/js/bootstrap-material-design.min.js"></script>
<script>
    $(document).ready(function () { $('body').bootstrapMaterialDesign();$('[data-toggle="tooltip"]').tooltip(); });
    window.addEventListener("load",function() {
        $('loading').css({"opacity":"0","pointer-events":"none"});
    }, false);
</script>
    </body>

</html>
