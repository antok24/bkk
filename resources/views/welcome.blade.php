<!doctype html>
<html lang="en" dir="ltr">

@include('layout.headerscript')

<body class="  ">
    <!-- loader Start -->
    @include('layout.loading')
    <!-- loader END -->

    @include('layout.sidebar')
    <main class="main-content">
        <div class="position-relative iq-banner">
            <!-- navbar Section Start -->
            @include('layout.navbar')
            <!-- navbar Section End -->

            <!-- Banner Section Start -->
            @include('layout.banner')
            <!-- Banner Section End -->
        </div>

        <!-- Content Section Start -->
        @yield('content')
        <!-- Content Section End -->
        <!-- Footer Section Start -->
        @include('layout.footer')
        <!-- Footer Section End -->
    </main>

    @include('layout.setting') --}}

    @include('layout.footerscript')

</body>

</html>
