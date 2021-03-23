@extends('layouts.perfil')
@section('titulo', 'Perfil - '.$usuario->nome)
@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <!-- Post Update -->


                <!-- Timeline -->

                <!-- Update #4 -->
                @foreach($relatos as $relato)
                    <div class="block block-rounded block-bordered invisible" data-toggle="appear">
                        <div class="block-header block-header-default">
                            <div>
                                <a class="img-link" href="javascript:void(0)">
                                    <img class="img-avatar img-avatar32 img-avatar-thumb"
                                         src="{{asset('media/avatars/avatar0.jpg')}}" alt="">
                                </a>
                                <a class="font-w600" href="javascript:void(0)">{{$relato->nomeUsuario}}</a>
                                <span
                                    class="font-size-sm text-muted">{{ (new DateTime($relato->dataPost))->format('d/m/Y H:i:s')}}</span>
                            </div>
                            <div class="block-options">
                                <div class="dropdown">
                                    <button type="button" class="btn-block-option dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="dropdown-menu dropdown-menu-right">

                                      @if($usuario->id==$relato->idUsuario)
                                        <a class="dropdown-item" onclick="verDados({{$relato->id}})">
                                            <i class="far fa-fw fa-edit text-primary mr-1"></i> Editar
                                        </a>
                                        <a class="dropdown-item" onclick="excluirRelato({{$relato->id}},'{{$relato->titulo}}')">
                                            <i class="far fa-fw fa-times-circle text-danger mr-1"></i> Excluir
                                        </a>
                                        @endif



                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-exclamation-triangle mr-1"></i> Report this post
                                        </a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="fa fa-fw fa-bookmark mr-1"></i> Bookmark this post
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-content">
                            <h5>{{$relato->titulo}}</h5>

                            <p>{{$relato->conteudo}}</p>
                            <hr>
                            <ul class="nav nav-pills font-size-sm push">
                                <li class="nav-item mr-1">
                                    <a class="nav-link" href="javascript:void(0)">
                                        <i class="fa fa-thumbs-up mr-1"></i> Like
                                    </a>
                                </li>
                                <li class="nav-item mr-1">
                                    <a class="nav-link" href="javascript:void(0)">
                                        <i class="fa fa-comment-alt mr-1"></i> Comment
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)">
                                        <i class="fa fa-share-alt mr-1"></i> Share
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="block-content block-content-full bg-body-light">
                            <p class="font-size-sm">
                                <i class="fa fa-thumbs-up text-info"></i>
                                <a class="font-w600" href="javascript:void(0)">Lisa Jenkins</a>,
                                <a class="font-w600" href="javascript:void(0)">Thomas Riley</a>,
                                <a class="font-w600" href="javascript:void(0)">and 5 others</a>
                            </p>
                            <form action="db_social.html" method="POST" onsubmit="return false;">
                                <input type="text" class="form-control form-control-alt"
                                       placeholder="Write a comment..">
                            </form>
                        </div>
                    </div>
            @endforeach
            <!-- END Update #4 -->
                <!-- END Timeline -->
            </div>
            <div class="col-md-4">
                <!-- Group Suggestions -->
                <div class="col-md-12 col-xl-12">
                    <a class="block block-rounded bg-gd-primary" href="javascript:void(0)">
                        <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                            <div class="item">
                                <i class="fa fa-2x fa-ticket-alt text-white-75"></i>
                            </div>
                            <div class="ml-3 text-right">
                                <p class="text-white font-size-lg font-w600 mb-0">
                                    {{count($relatos)}}
                                </p>
                                <p class="text-white-75 mb-0">
                                    Total de Relatos
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END Group Suggestions -->
            </div>
        </div>
    </div>
    <!-- END Page Content -->

    <!-- Extra Large Block Modal -->
    <div class="modal" id="modal-post" tabindex="-1" role="dialog" aria-labelledby="modal-post" aria-hidden="true">
        <div class="modal-dialog modal-xl col-xl-12" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3  id="tituloModal" class="block-title"><i class="far fa-creative-commons"></i>Criando Relato</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <!-- Progress Wizards -->

                        <div class="row">
                            <div class="col-md-12 col-xl-12">
                                <!-- Progress Wizard 2 -->
                                <div class="js-wizard-simple block block block-rounded block-bordered">
                                    <!-- Wizard Progress Bar -->
                                    <div class="progress rounded-0" data-wizard="progress" style="height: 8px;">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                             role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                    <!-- END Wizard Progress Bar -->

                                    <!-- Step Tabs -->
                                    <ul class="nav nav-tabs nav-tabs-alt nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#wizard-progress2-step1" data-toggle="tab">1.
                                                Comece com o Titulo do Relato</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#wizard-progress2-step2" data-toggle="tab">2.
                                                Descreva o conteudo do relato</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#wizard-progress2-step3" data-toggle="tab">3. Como
                                                devo postar esse relato</a>
                                        </li>
                                    </ul>
                                    <!-- END Step Tabs -->

                                    <!-- Form -->
                                    <form id="formPost">

                                        <!-- Steps Content -->
                                        <div class="block-content block-content-full tab-content"
                                             style="min-height: 312px;">
                                            <!-- Step 1 -->
                                            <div class="tab-pane active" id="wizard-progress2-step1" role="tabpanel">
                                                <div class="form-group">
                                                    <label for="titulo">Titulo</label>
                                                    <input class="form-control form-control-alt" type="text" id="titulo"
                                                           name="titulo">
                                                </div>

                                            </div>
                                            <!-- END Step 1 -->

                                            <!-- Step 2 -->
                                            <div class="tab-pane" id="wizard-progress2-step2" role="tabpanel">
                                                <div class="form-group">
                                                    <label for="wizard-progress2-bio">Descrição do relato</label>
                                                    <textarea class="form-control form-control-alt" id="conteudo"
                                                              name="titulo" rows="7"></textarea>
                                                </div>
                                            </div>
                                            <!-- END Step 2 -->

                                            <!-- Step 3 -->
                                            <div class="tab-pane" id="wizard-progress2-step3" role="tabpanel">

                                                <div class="form-group">
                                                    <label for="wizard-progress2-skills">Categotias</label>
                                                    <select class="form-control form-control-alt" id="categoria"
                                                            name="categoria">
                                                        <option value="0">Por favor escolha umas das opções</option>
                                                        <option value="DENUNCIA">Denuncia</option>
                                                        <option value="PROBLEMA">Problema</option>
                                                        <option value="COMUM">Relato comum</option>

                                                    </select>
                                                </div>
                                                {{--                                                <div class="form-group">--}}
                                                {{--                                                    <div class="custom-control custom-checkbox custom-control-primary">--}}
                                                {{--                                                        <input type="checkbox" class="custom-control-input" id="cbPublicar" name="cbPublicar">--}}
                                                {{--                                                        <label class="custom-control-label" for="wizard-progress2-terms">Publicar ?</label>--}}
                                                {{--                                                    </div>--}}
                                                {{--                                                </div>--}}
                                            </div>
                                            <!-- END Step 3 -->
                                        </div>
                                        <!-- END Steps Content -->

                                        <!-- Steps Navigation -->
                                        <div
                                            class="block-content block-content-sm block-content-full bg-body-light rounded-bottom">
                                            <div class="row">
                                                <div class="col-6">
                                                    <button type="button" class="btn btn-secondary" data-wizard="prev">
                                                        <i class="fa fa-angle-left mr-1"></i> Voltar
                                                    </button>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <button type="button" class="btn btn-secondary" data-wizard="next">
                                                        Proximo <i class="fa fa-angle-right ml-1"></i>
                                                    </button>
                                                    <button type="button" id="btnSalvar" class="btn btn-primary d-none"
                                                            onclick="novoRelato()" data-wizard="finish">
                                                        <i class="fa fa-check mr-1"></i> Enviar Relato
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Steps Navigation -->
                                    </form>
                                    <!-- END Form -->
                                </div>
                                <!-- END Progress Wizard 2 -->
                            </div>

                        </div>
                        <div class="block-content block-content-full text-right bg-light">
                            <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">FECHAR <i
                                    class="far fa-header-x"></i></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Extra Large Block Modal -->


        @endsection
        @section('js_after')
            <script>
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                });</script>

            <script src="{{asset('/js/components/dash.js')}}"></script>
            <script src="{{asset('/js/pages/be_forms_wizard.min.js')}}"></script>
            <script src="{{asset('/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
            <script src="{{asset('/js/plugins/jquery-validation/additional-methods.js')}}"></script>
            <script src="{{asset('/js/plugins/jquery-bootstrap-wizard/bs4/jquery.bootstrap.wizard.min.js')}}"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@endsection
