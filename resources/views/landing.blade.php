@extends('layouts.simple')

@section('content')
    <div id="page-container">

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="bg-image" style="background-image: url({{asset('media/photos/photo24@2x.jpg')}});">
                <div class="hero bg-black-90">
                    <div class="hero-inner">
                        <div class="content content-full">
                            <div class="px-3 py-5 text-center">
                                <img src="{{asset('/media/photos/imglogo.png')}}" alt="logo CidadanIA" width="250">
                                <div class="mb-3">


                                    <a class="link-fx font-w700 font-size-h1" href="index.html">

                                        <span class="text-white">Cidadan</span><span class="text-primary">IA</span>
                                    </a>
                                    <p class="text-uppercase font-w700 font-size-sm text-muted">Modo Manutenção</p>
                                </div>
                                <h1 class="text-white font-w700 mt-5 mb-3">Trabalhando em algumas coisas..</h1>
                                <h2 class="h3 text-white-75 font-w400 text-muted mb-5">Não se preocupe, voltaremos em breve!</h2>
                                <a class="btn btn-hero-primary mb-3" href="{{route('login')}}">
                                    <i class="fa fa-flask mr-1"></i> Va para pagina de login
                                </a>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->
    </div>
@endsection
@section('js_after')
    <script>

    </script>

    <script src="{{asset('/js/dashmix.core.min.js')}}"></script>


    <script src="{{asset('/js/dashmix.app.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{asset('/js/plugins/jquery-countdown/jquery.countdown.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{'/js/pages/op_coming_soon.min.js'}}"></script>
@endsection
