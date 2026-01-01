<!DOCTYPE html>
<html lang="en">
<head>
    @include('user.partials.head')

</head>
<body>

@include('user.partials.preloader')

@include('user.partials.topnav')



<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    @include('user.partials.sidebar')
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing justify-content-center">

                @yield('content')

            </div>

        </div>

        @include('user.partials.footer')
    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

@include('user.partials.scripts')

</body>
</html>
