<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KDA</title>
    @include('partials.css')
   
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('partials.header')

            @if(Session::get('success'))<input type="hidden" id="tItLe" value="Success"><input type="hidden" id="mEsSeGe" value="{{ Session::get('success') }}">@elseif(Session::get('error'))<input type="hidden" id="tItLe" value="Error"><input type="hidden" id="mEsSeGe" value="{{ Session::get('error') }}">@endif

            @include('partials.sidebar')

            @yield('content')

            @include('partials.settingSidebar')

            @include('partials.footer')

        </div>
    </div>



    @include('partials.scripts')
    <script>
        var tItLe = $("#tItLe").val();
        var mEsSeGe = $("#mEsSeGe").val();

        @if(Session::get('success'))
        $(document).ready(function() {

            iziToast.success({
                title: tItLe,
                message: mEsSeGe,
                position: "topRight",

            });
        });
        @elseif(Session::get('error'))

        $(document).ready(function() {

            iziToast.warning({
                title: tItLe,
                message: mEsSeGe,
                position: "topRight",
            });
        });
        @endif
    </script>
    @stack('scripts')
</body>

</html>