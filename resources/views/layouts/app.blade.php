<!DOCTYPE html>
<html lang="en">

@include('partials._head')

<body>
<div id="app">

@include('partials._nav')
<!-- default navbar -->

    <div class="container">

        @include('partials._messages')

        @yield('content')

        @include('partials._footer')

    </div>

</div>

@include('partials._javascript')

<!-- Scripts -->
@yield('scripts')

</body>
</html>
