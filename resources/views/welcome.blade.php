<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AKM | جمعية الكشف المنير</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,700'>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="icon" href="{{ asset('assets/img/logo-whitout-background.png') }}" type="image/x-icon">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.ico"> -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png"> -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png"> -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png"> -->
    <!-- <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->
<style>
    .map-container{
        overflow:hidden;
        padding-bottom:56.25%;
        position:relative;
        height:0;
    }
    .map-container iframe{
        right: 100px;
        top:80px;
        height:80%;
        width:80%;
        position:absolute;
    }
</style>
</head>

<body>

    <!-- Header -->
    <div class="container">
        <div class="row header">
            <div class="col-sm-4 logo">

            </div>
            <div class="co-sm-4">
                <img src="{{ asset('assets/img/Screenshot_2022_02_26_002843.png') }}" alt="" height="100">
            </div>
            <div class="col-sm-4 call-us">

            </div>
        </div>
    </div>

    <!-- Coming Soon -->
    <div class="coming-soon">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>قريبا</h1>
                        <p>! نحن نعمل بجد على الإصدار الجديد من موقعنا. سوف يجلب الكثير من الميزات الجديدة. ابقوا
                            متابعين </p>
                        <div class="timer">
                            <div class="days-wrapper">
                                <span class="days"></span> <br>days
                            </div>
                            <div class="hours-wrapper">
                                <span class="hours"></span> <br>hours
                            </div>
                            <div class="minutes-wrapper">
                                <span class="minutes"></span> <br>minutes
                            </div>
                            <div class="seconds-wrapper">
                                <span class="seconds"></span> <br>seconds
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 subscribe">
                <h3> اشترك معنا </h3>
                <form class="form-inline" id="myForm" role="form" action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-email">Email address</label>
                        <input type="text" name="email" placeholder="Enter your email..."
                            class="subscribe-email form-control" id="subscribe-email">
                    </div>
                    <button type="submit" class="btn">اشترك</button>
                </form>
                <div class="success-message"></div>
                <div class="error-message"></div>
            </div>
        </div>
        <!--Google map-->
        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13226.186168879512!2d-6.7698892175048835!3d34.02984885467327!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3527205cf250fef1!2z2KfZhNmF2LHZg9ioINin2YTYq9mC2KfZgdmKINmIINin2YTYp9is2KrZhdin2LnZiiDYp9it2LXZitmG!5e0!3m2!1sfr!2sma!4v1646357048228!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <!--Google Maps-->
        <div class="row">
            <div class="col-sm-12 social">
                <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                        class="fa fa-facebook"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i
                        class="fa fa-instagram"></i></a>
                <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i
                        class="fa fa-whatsapp"></i></a>

            </div>
        </div>
    </div>


    <!-- Javascript -->
    <!-- <script>
            let email = $("subscribe-email").val();
            $.ajax({
                url: "{{ route('email') }}",
                type:"POST",
                data:{
                    email:email
                }
                success: function(response){
                    console.log(response);
                }

            })
        </script> -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/scripts.js"></script>

    <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

</body>

</html>
