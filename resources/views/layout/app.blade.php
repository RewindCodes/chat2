<!doctype html>
<html lang="en" dir="ltr">

<head>

    {{-- Head --}}
    @include('layout.head')

</head>

<body class="app ltr landing-page horizontal">

    {{-- Global Loader --}}
    @include('layout.loader')

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            {{-- Header --}}
            @include('layout.header')

            <div class="landing-top-header overflow-hidden">
                {{-- Top Navigation --}}
                @include('layout.nav')
            </div>

            <!--app-content open-->
            <div class="main-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container">
                        <div class="">

                           @section('main')
                               
                           @show

                        </div>
                    </div>
                    <!-- CONTAINER CLOSED-->
                </div>
            </div>
            <!--app-content closed-->
        </div>

        {{-- Footer --}}
        @include('layout.footer')
    </div>


{{-- JS Files --}}
@include('layout.js')
</body>

</html>