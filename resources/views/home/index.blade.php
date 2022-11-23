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
          <h1 class="m-0 text-dark">Auto-Ecole</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
            <li class="breadcrumb-item active">Auto-Ecole</li>
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
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>Les Chapitres</h3>


              <p></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{route('chapitre.listes')}}" class="small-box-footer">Cliquer ici <i
                class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>Les 38 Sujets<sup style="font-size: 20px"></sup></h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{route('test.sujet38')}}" class="small-box-footer">Cliquer ici <i
                class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>Tests Générales</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{route('test.generales',0)}}" class="small-box-footer"> Cliquer ici<i
                class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->

      <hr>
      <hr>
      <div class="row">
        <h2 style="text-align:center">Sujets Speciaux</h2>

      </div>
      <div class="row">
        <!-- Left col -->
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <div class="col-12 col-sm-6 col-md-3">
          <a href="{{route('sujet.listes','VII')}}" style="color:black">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1">
                <i class="fa fa-wheelchair"></i></span>

              <div class="info-box-content">
                <span class="info-box-number">Permis A</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <a href="{{route('sujet.listes','VIII')}}" style="color:black">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1">
                <i class="fa fa-car"></i></span>

              <div class="info-box-content">
                <span class="info-box-number">Permis B</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>

          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">


          <a href="{{route('sujet.listes','IX')}}" style="color:black">

            <div class="info-box mb-3">

              <span class="info-box-icon bg-success elevation-1">
                <i class="fa fa-bus"></i></span>

              <div class="info-box-content">
                <span class="info-box-number">Permis C</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </a>


          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">

          <a href="{{route('sujet.listes','X')}}" style="color:black">

            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1">
                <i class="fa fa-truck"></i></span>

              <div class="info-box-content">
                <span class="info-box-number">Permis D</span>
              </div>
            </div>
          </a>
          <!-- /.info-box-content -->
          <!-- /.info-box -->
        </div>
        <!-- right col -->
      </div>
      <hr>

      <div class="row">
        <div class="col-lg-12 col-12">
          <!-- small box -->
          <div class="small-box bg-dark">
            <div class="inner">
              <h3 class="text text-center">Sujets Fon</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{route('sujet-fon.index')}}" class="small-box-footer"> Cliquer ici<i
                class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row (main row) -->

      <div class="row">
        <a href="{{route('historique.resultats')}}" class="btn btn-block btn-info">Historique de Resultats</a>

      </div>
    </div><!-- /.container-fluid -->
  </section>
  @endsection


  @section('custmo-js')

  @endsection