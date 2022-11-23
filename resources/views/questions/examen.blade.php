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

                                {{-- {{$loop->iteration}} --}}
                                <h3 class="card-title">Chapitres {{ $listQuestion->first()->chapitres()->first()->titre }}
                                    ({{ $listQuestion->first()->chapitres()->first()->libelle }}) Sujet N°
                                    <br>Question N°
                                    {{ $listQuestion->currentPage() }}
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
                            @foreach ($listQuestion as $list)
                                @if ($list->img != null)
                                    <img src="{{ asset('images/' . $list->img) }}" alt=""
                                        srcset="">
                                @else
                                    <img src="{{ asset('images/image.jpeg') }}" alt="" srcset="">
                                @endif
                            @endforeach

                        </div>


                        <div class="col-md-4">

                        </div>
                    </div>
                </div>
                <br>
                <div class="row">

                    @foreach ($listQuestion as $list)
                        <audio id="myaudio" autoplay="autoplay" loop>
                            <source media="(min-width: )"
                                src="{{ asset('audio/'.substr($list->filename, 1)) }}"
                                srcset="" type="audio/mp3">
                        </audio>
                    @endforeach

                </div>

                <form id="submitQuestion">
                    @csrf
                    <div class="row">

                        @foreach ($listQuestion as $q)
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <input type="checkbox" id="a" name="type"
                                                value="{{ $q->a }}">
                                        </span>
                                    </div>
                                    <button disabled="disabled" class="btn btn-info"> A</button>
                                </div>
                                <!-- /input-group -->
                            </div>

                            <!-- /.col-lg-6 -->
                            <div class="col-lg-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <input type="checkbox" name="type" id="b"
                                                value="{{ $q->b }}">
                                        </span>
                                    </div>
                                    <button disabled="disabled" class="btn btn-info"> B</button>

                                </div>
                                <!-- /input-group -->
                            </div>
                            @if ($q->c != null or $q->c != '')
                                <div class="col-lg-2">


                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <input type="checkbox" id="c" name="type"
                                                    value="{{ $q->c }}">
                                            </span>
                                        </div>
                                        <button disabled="disabled" class="btn btn-info"> C</button>

                                    </div>

                                    <!-- /input-group -->
                                </div>
                            @endif
                            @if ($q->d != null or $q->d != '')
                                <div class="col-lg-2">

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <input type="checkbox" id="d" name="type"
                                                    value="{{ $q->d }}">
                                            </span>
                                        </div>
                                        <button disabled="disabled" class="btn btn-info"> D</button>

                                    </div>

                                    <!-- /input-group -->
                                </div>
                            @endif

                            @if ($listQuestion->currentPage() != $listQuestion->total())
                                <div class="col-lg-2">
                                    <a id="link" href="{{ $listQuestion->nextPageUrl() }}"
                                        class="btn btn-warning">Question Suivant</a>

                                    {{-- <input type="submit" value="test" class="btn btn-info"> --}}
                                </div>
                            @else
                                <div class="col-lg-2">
                                    <a href="#" id="linkFin" class="btn btn-warning">Question Suivant</a>
                                </div>
                            @endif

                            <input type="hidden" name="" id="reponse" value="{{ $q->reponse }}">
                            <input type="hidden" name="" id="questionId" value="{{ $q->id }}">
                            <input type="hidden" name="" id="pages"
                                value="{{ $listQuestion->currentPage() }}">
                        @endforeach

                    </div>

            </div>

    </div>

    </form>


    <div class="row">
        <input type="hidden" name="" id="chapitreId" value="{{ $listQuestion->first()->chapitre_id}}">
        <input type="hidden" name="" id="sujetId" value="{{ $listQuestion->first()->sujet_id }}">
    </div>
    </section>
@endsection


@section('custmo-js')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/questionaire.js') }}"></script>
@endsection
