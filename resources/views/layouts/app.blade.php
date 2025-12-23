<!DOCTYPE html>
<html class="no-js">

<head>

    @include('app.partials.head')

    @yield('stylesheets')

</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">

@include('app.partials.preloader')

<!--
Welcome Slider
==================================== -->

@include('app.modules.hero')

@include('app.partials.navbar')

<!--
		Start About Section
		==================================== -->
@include('app.modules.about')

@include('app.modules.calltoaction')


{{--@include('app.modules.counters')--}}

{{--@include('app.modules.team')--}}

{{--@include('app.modules.testimonials')--}}

{{--@include('app.modules.gamenews')--}}


@include('app.partials.footer')

@include('app.partials.scripts')

@yield('scripts')

</body>
</html>
