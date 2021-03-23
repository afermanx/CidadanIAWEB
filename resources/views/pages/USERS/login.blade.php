@extends('layouts.login')

@section('content')
    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="bg-image" style="background-image: url({{asset('media/photos/city.jfif')}});">
            <div class="row no-gutters bg-primary-op">
                <!-- Main Section -->
                <div class="hero-static col-md-6 d-flex align-items-center bg-white">
                    <div class="p-3 w-100">
                        <!-- Header -->
                        <div class="mb-3 text-center">
                            <a class=" font-w700 font-size-h1" href="#">
                                <img src="{{asset('media/photos/cidadanIA.png')}}" width="350">
                            </a>
                            <p class="text-uppercase font-w700 font-size-sm text-muted">Acessar seu perfil</p>
                        </div>
                        <!-- END Header -->

                        <!-- Sign In Form -->
                        <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <div class="row no-gutters justify-content-center">
                            <div class="col-sm-8 col-xl-6">
                                <form  name="formLogin" class="js-validation-signin" >
                                    @csrf

                                    <div class="py-3">
                                        @if ( old('email') )
                                            <div class="alert alert-danger d-flex align-items-center justify-content-between"
                                                 role="alert">
                                                <div class="flex-fill mr-3">
                                                    <p class="mb-0">Verifique seus dados e tente novamente</p>
                                                </div>
                                                <div class="flex-00-auto">
                                                    <i class="fa fa-fw fa-times-circle"></i>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-lg form-control-alt" value="{{ old('email') }}" id="email" name="email" placeholder="Entre com seu E-mail">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg form-control-alt" id="senha" name="senha" placeholder="Senha">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit"  class="btn btn-block btn-hero-lg btn-hero-primary">
                                            <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Praticar cidadania!
                                        </button>
                                        <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                            <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="">
                                                <i class="fa fa-exclamation-triangle text-muted mr-1"></i> Lembar a senha
                                            </a>
                                            <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="op_auth_signup.html">
                                                <i class="fa fa-plus text-muted mr-1"></i> Seja um cidadão inteligente
                                            </a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Sign In Form -->
                    </div>
                </div>
                <!-- END Main Section -->

                <!-- Meta Info Section -->
                <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
                    <div class="p-3">
                        <p class="display-4 font-w700 text-white mb-3">
                            Jeito certo de praticar cidadania inteligente.
                        </p>
                        <p class="font-size-lg font-w600 text-white-75 mb-0">
                           Todos diretos reservados &copy; <span data-toggle="year-copy"></span>
                        </p>
                    </div>
                </div>
                <!-- END Meta Info Section -->
            </div>
        </div>
        <!-- END Page Content -->



    </main>
    <!-- END Main Container -->
@endsection

@section('js_after')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        $('form[name="formLogin"]').submit(function (event){
            event.preventDefault();

            $.ajax({
                url:"{{route('logar')}}",
                type:"post",
                data:$(this).serialize(),
                dataType:"json",
                success:function (response){

                    if(response.success===true){
                        Dashmix.loader('show', 'bg-primary');
                        setTimeout(function () {
                            Dashmix.loader('hide');
                        }, 5000);
                        window.location.href="{{route('painel')}}"

                    }else{
                        let timerInterval
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: response.message,
                            footer: '<a href>Ainda não tem cadastro? Clique Aqui!</a>',
                            timer: 4000,
                            didOpen: () => {
                                timerInterval = setInterval(() => {
                                    const content = Swal.getContent()
                                    if (content) {
                                        const b = content.querySelector('b')
                                        if (b) {
                                            b.textContent = Swal.getTimerLeft()
                                        }
                                    }
                                }, 100)
                            },
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {

                            }
                        })
                        // Swal.fire({
                        //     icon: 'error',
                        //     title: 'Oops...',
                        //     text: response.message,
                        //     footer: '<a href>Tente novamente!</a>'
                        // })
                    }
                    console.log(response)
                }


            })
        })

        {{--action="{{route('logar')}}" method="POST"--}}

    </script>
@endsection
