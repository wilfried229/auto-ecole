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
          <h1 class="m-0 text-dark">Correction (Tests Généraux) </h1>
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
              <h3 class="card-title">
                <br> {{ $users->name }} {{ $users->prenom }}
                <br>


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

          <div class="col-md-4" >
            <img id="alert-reponse" src="{{ asset('images/image.jpeg') }}" alt="" srcset="">

          </div>


          <div class="col-md-4">

          </div>
        </div>
      </div>
      <br>


      <div class="row">

        <h2 class="" id="questions"></h2>
        &nbsp;
        &nbsp;
        &nbsp;

        <h2 class="" id="reponse"></h2>

      </div>
      <div class="row">

        @foreach ($questionByTestGenerales as $q)
        
        <div class="col-12 col-sm-3 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon
                              @if ($q->vrai != null) bg-success
                              @else
                              bg-danger @endif
                              elevation-1">
              <i class="fa fa-car"></i></span>
            <div class="info-box-content" id="test">
              <audio controls style="width: 150px;">
                <source media="(min-width:50px )"
                  src="{{ asset('audio/' . substr($q->questions()->first()->filename, 1)) }}" srcset=""
                  type="audio/mp3">
              </audio>
              <span class="info-box-number">Question N° {{ $loop->iteration }} </span>
            </div>
            <!-- /.info-box-content -->
          </div>

          <!-- /.info-box -->
        </div>
        <input type="hidden" name="" class="question" value="{{ $q->question_id }}">
        @endforeach
      </div>
  </section>
  @endsection

  @section('custmo-js')
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script>
    var srcImage =window.location.protocol+ "//" +   window.location.host+"/images"+"/" ;
    document.addEventListener('play', function(e) {
                var audios = document.getElementsByTagName('audio');
                var question = document.getElementsByClassName('question');
                for (var i = 0, len = audios.length; i < len; i++) {
                    if (audios[i] != e.target) {
                        audios[i].pause();
                    } else {
                        questions(question[i].value);
                    }
                }
            }, true);
            function questions(questionId) {
                $.ajax({
                    url: '/test/corriger/loading/' + questionId,
                    type: 'get',
                    dataType: 'json'
                }).done(function(data) {

                  if (data.srcImg) {
                    $("#alert-reponse").attr("src", srcImage+""+data.srcImg)
                  }else{
                    $("#alert-reponse").attr("src", srcImage+"image.jpeg")
                  }

                  
                    if (data.message == "Vrai") {
                        $('#questions').html('Question choisi :' + data.questionChoice +
                            '<span class="text text-success">(' + data.message + ')</span>');
                        $('#reponse').html('Résultat Correct :  <span class="text text-success">(' + data.reponse +
                            ')</span>')
                    } else {
                        $('#questions').html('Question choisi :' + data.questionChoice +
                            '<span class="text text-danger">(' + data.message + ')</span>');
                        $('#reponse').html('Résultat Correct :  <span class="text text-success">(' + data.reponse +
                            ')</span>')
                    }
                }).fail(function(xhr) {

                })
            }
  </script>
  @endsection