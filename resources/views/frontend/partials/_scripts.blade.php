
    <!-- latest jquery-->
    <script src="{{('frontend/')}}/assets/js/jquery-3.3.1.min.js"></script>

    <!-- fly cart ui jquery-->
    <script src="{{('frontend/')}}/assets/js/jquery-ui.min.js"></script>

    <!-- exitintent jquery-->
    <script src="{{('frontend/')}}/assets/js/jquery.exitintent.js"></script>
    <script src="{{('frontend/')}}/assets/js/exit.js"></script>

    <!-- popper js-->
    <script src="{{('frontend/')}}/assets/js/popper.min.js"></script>

    <!-- slick js-->
    <script src="{{('frontend/')}}/assets/js/slick.js"></script>

    <!-- menu js-->
    <script src="{{('frontend/')}}/assets/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="{{('frontend/')}}/assets/js/lazysizes.min.js"></script>

    <!-- Bootstrap js-->
    <script src="{{('frontend/')}}/assets/js/bootstrap.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{('frontend/')}}/assets/js/bootstrap-notify.min.js"></script>

    <!-- Fly cart js-->
    <script src="{{('frontend/')}}/assets/js/fly-cart.js"></script>

    <!-- Theme js-->
    <script src="{{('frontend/')}}/assets/js/script.js"></script>

    <script>
        $(window).on('load', function () {
            setTimeout(function () {
                $('#exampleModal').modal('show');
            }, 2500);
        });
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>