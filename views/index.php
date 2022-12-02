<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Vegefoods - Home</title>
</head>

<body class="goto-here">
    <!-- nav -->
    <?php
        require_once('header_footer/header.php');

        require_once('dieuhuong.php');

        require_once("header_footer/footer.php")
    ?>
    <div class="container">
        <!-- Messenger Plugin chat Code -->
        <div id="fb-root"></div>

        <!-- Your Plugin chat code -->
        <div id="fb-customer-chat" class="fb-customerchat">
        </div>

        <script>
            var chatbox = document.getElementById('fb-customer-chat');
            chatbox.setAttribute("page_id", "108645221638906");
            chatbox.setAttribute("attribution", "biz_inbox");

            window.fbAsyncInit = function() {
                FB.init({
                    xfbml: true,
                    version: 'v12.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
    </div>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jquery.easing.1.3.js"></script>
    <script src="public/js/jquery.waypoints.min.js"></script>
    <script src="public/js/jquery.stellar.min.js"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/jquery.magnific-popup.min.js"></script>
    <script src="public/js/aos.js"></script>
    <script src="public/js/jquery.animateNumber.min.js"></script>
    <script src="public/js/bootstrap-datepicker.js"></script>
    <script src="public/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="public/js/google-map.js"></script>
    <script src="public/js/main.js"></script>

</body>

</html>