<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('themar-front/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('themar-front/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('themar-front/assets/css/themar.css')}}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500&display=swap" rel="stylesheet">
    <title>ثمار | @yield("title")</title>

    @yield("css")
</head>
<body>
<!-- ============================Start Header====================== -->
@include("layouts.home.header")
<!-- ============================End Header ======================== -->


<div class="container-page justify-content-start">
    <!--===========================Start Sidebar=========================-->
    @include("layouts.home.sidebar")
    <!--===========================End Sidebar=========================-->

    <!--===========================Start Content=========================-->
    <div class="content">
        <div class="main-container">
        @yield('content')
        </div>
        <!-- ========================start footer ====================-->
        @include("layouts.home.footer")
        <!-- =======================end footer======================== -->

    </div>
    <!--===========================End Content=========================-->


</div>

<script src="{{asset('themar-front/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('themar-front/assets/js/all.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    const languageBtn = document.getElementById("language-sel");

    languageBtn.addEventListener("click", function () {
        if (languageBtn.textContent === "EN") {
            languageBtn.textContent = "AR";
        } else {
            languageBtn.textContent = "EN";
        }
        languageBtn.classList.toggle("btn-underline");
    });
</script>
@yield("js")
</body>
</html>
