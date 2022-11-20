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
            <h1 class="m-0 text-dark">Les Sujets Du Chapitre {{$nameChapitre->titre}} ({{$nameChapitre->libelle}}) </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
            <li class="breadcrumb-item active"> <a href="{!! URL::previous() !!}" class="btn btn-info">Retour</a> </li>

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

        @php

        $i = 0;
        @endphp
        @foreach ($sujets as $s)

        <div class="col-md-4">
            <a href="{{route('question.sujet.listes',['id'=>$loop->iteration,'namechapitres'=>$nameChapitre->titre])}}">
                    <div class="card card-info">
                            <div class="card-header">

                                {{-- {{$loop->iteration}} --}}
                                <h3 class="card-title">Sujet N°{{$loop->iteration}}</h3>

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
            </a>

                <!-- /.card -->
              </div>


        @endforeach
            <!-- /.col -->
          </div>

    <!--  modal ajout --->


    </div>
</section>
@endsection


@section('custmo-js')

@endsection


