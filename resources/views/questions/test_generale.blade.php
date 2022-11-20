@extends('templates.index-template')
@section('title')
    Auto-Ecole
@endsection

@section('style-css')
@endsection()


@section('content-wrapper')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Questionnaires </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item active"> <a href="#" class="btn btn-danger">Arrêter</a> </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    @endsection

    @section('content')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card card-info">
                            <div class="card-header">

                                <h3 class="card-title">
                                    Question N°{{ $i + 1 }}
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse">
                                        <i class="fa fa-server"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->

                            <!-- /.card-body -->
                        </div>


                    </div>
                </div>
                <div class="container">

                    <div class="row">
                        <div class="col-md-4">

                        </div>

                        <div class="col-md-4" id="alert-reponse">
                            <img src="@if ($questions->img !=null)
                            {{ asset('images/'.$questions->img ) }}
                              
                            @else
                            {{ asset('images/image.jpeg') }}
                            @endif" alt="" srcset="">
                        </div>


                        <div class="col-md-4">

                        </div>
                    </div>
                </div>
                <br>
                <div class="row">

                    <audio id="myaudio" autoplay="autoplay" loop>
                        <source media="(min-width: )"
                            src="{{ asset('storage/audios/questions/' . $questions->extension . '/' . $questions->filename) }}"
                            srcset="" type="audio/mp3">
                    </audio>

                </div>

                <form id="submitQuestion">
                    @csrf
                    <div class="row">
                        @if (in_array($questions->a, $typeQuestions))
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <input type="checkbox" id="a" name="type"
                                                value="{{ $questions->a }}">
                                        </span>
                                    </div>
                                    <button disabled="disabled" class="btn btn-info"> A</button>
                                </div>
                                <!-- /input-group -->
                            </div>
                        @endif

                        @if (in_array($questions->b, $typeQuestions))
                            <!-- /.col-lg-6 -->
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <input type="checkbox" name="type" id="b"
                                                value="{{ $questions->b }}">
                                        </span>
                                    </div>
                                    <button disabled="disabled" class="btn btn-info"> B</button>

                                </div>
                                <!-- /input-group -->
                            </div>
                        @endif

                        @if (in_array($questions->c, $typeQuestions))
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <input type="checkbox" id="c" name="type"
                                                value="{{ $questions->c }}">
                                        </span>
                                    </div>
                                    <button disabled="disabled" class="btn btn-info"> C</button>

                                </div>

                                <!-- /input-group -->
                            </div>
                        @endif

                        @if (in_array($questions->d, $typeQuestions))
                            <div class="col-lg-2">

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <input type="checkbox" id="d" name="type"
                                                value="{{ $questions->d }}">
                                        </span>
                                    </div>
                                    <button disabled="disabled" class="btn btn-info"> D</button>

                                </div>

                                <!-- /input-group -->
                            </div>
                        @endif

                        @if (in_array($questions->e, $typeQuestions))
                        <div class="col-lg-2">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <input type="checkbox" id="e" name="type"
                                            value="{{ $questions->e }}">
                                    </span>
                                </div>
                                <button disabled="disabled" class="btn btn-info"> E</button>

                            </div>

                            <!-- /input-group -->
                        </div>
                        @endif

                        <div class="col-lg-2">
                            <a id="link" href="#" class="btn btn-warning">Question Suivante</a>
                        </div>
                        <input type="hidden" name="" id="key" value="{{ $i }}">
                        <input type="hidden" name="" id="reponse" value="{{ $questions->reponse }}">
                        <input type="hidden" name="" id="questionId" value="{{ $questions->id }}">
                        <input type="hidden" name="" id="sujetId" value="{{ $questions->sujet_id }}">
                        <input type="hidden" name="" id="chapitreId" value="{{ $questions->chapitre_id }}">

                    </div>

            </div>

    </div>

    </form>
    </section>
@endsection


@section('custmo-js')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/test_generales.js') }}"></script>


    <script></script>
@endsection
