@extends('templates.index-template')
@section('title')
Auto-Ecole
@endsection

@section('style-css')
<link rel="stylesheet" type="text/css" href="{{asset('progress/styles/plugin.css')}}">
<style>

.my-progress-bar {
  content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 9px solid #eee;
  }
</style>
@endsection()


@section('content-wrapper')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tests Généraux ({{date('d/M/Y H:i',strtotime($note->created_at))}})</h1>
            <h1 class="m-0 text-dark"> </h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
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


      <div class="progress">
            <div class="progress-bar bg-info progress-bar-striped" id="progress"  role="progressbar"
                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
              <span class="sr-only">40% Complete (success)</span>
            </div>
          </div>


          <div class="row" id="loading-resultats" hidden>
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fa fa-user"></i>
                Candidat: {{$note->users()->first()->name}} {{$note->users()->first()->prenom}}
                  </h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i
                        class="fa fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-6 col-md-4 text-center">

                        @if (is_null($note))
                        <h2 class="text text-danger">Faibles ! Vous devez redoubler d'effort</h2>
                        <p class="text text-info">Veuillez Prendre soin de bien revoir les questions que vous aviez ratées et revenez améliorer votre niveau</p>

                        @else
                        <h2 class="text text-danger"> {{$note->apreciation}}</h2>
                        <p class="text text-info"> {{$note->description}}</p>

                        @endif

                    </div>
                    <!-- .  /col -->
                    <div class="col-6 col-md-4 text-center">


                            <div class="my-progress-bar"></div>


                    </div>
                    <!-- ./col -->
                    <div class="col-6 col-md-4 text-center">

                    <a href="{{route('corrigerQuestionTest.user')}}" type="submit" class="btn btn-info" title="cliquez ici pour voir la correction">Voir la Corretion</a>
                    </div>

                    <!-- ./col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          @if (is_null($note))
          <input type="hidden" name="" id="note" value="0">

          @else
          <input type="hidden" name="" id="note" value="{{$note->note}}">

          @endif
      </div>


</section>
@endsection


@section('custmo-js')
<script src="{{asset('js/jquery.js')}}"></script>

<script src="{{asset('js/resultats.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/knob/jquery.knob.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('AdminLTE/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- page script -->
<script src="{{asset('progress/scripts/plugin.js')}}"></script>
<script src="{{asset('progress/scripts/script.js')}}"></script>
<script>

$(document).ready(function () {


    $('progress-bar').animate({
        width: "50%"
    },500);


    setInterval(() => {

        $('.progress-bar').animate({
        width: "100%"
    },500).fadeOut(2000);

    $('.progress').fadeOut(2000);
    }, 1000);

                setInterval(() => {

                  $('#loading-resultats').removeAttr('hidden').fadeIn('linear');

                }, 3000);




})
</script>
<script>
  </script>

@endsection


