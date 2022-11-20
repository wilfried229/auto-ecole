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
                                        <br> {{$users->name}} {{$users->prenom}}
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

                <div class="col-md-4" id="alert-reponse">
                        <img src="{{asset('images/image.jpeg')}}" alt="" srcset="" >

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

        <div class="col-12 col-sm-6 col-md-3">
                      <div class="info-box mb-3">
                              <span class="info-box-icon
                              @if ($q->vrai !=null)
                              bg-success
                              @else
                              bg-danger
                              @endif
                              elevation-1" >
                                  <i class="fa fa-car"></i></span>

                              <div class="info-box-content" id="test">


                              <audio class="audioquestion{{$loop->iteration -1}}">
                                            <source media="(min-width: )" src="{{asset('storage/audios/questions/'.$q->extension.'/'.$q->filename)}}" srcset="" type="audio/mp3">
                                            </audio>

                                        <div class="stop{{$loop->iteration -1}}">
                                                <button class="play" type="button"><i class="fa fa-play"></i>Play</button>

                                            </div>
                                    <span class="info-box-number">Question N° {{$loop->iteration}}</span>
                              </div>
                              <!-- /.info-box-content -->
                            </div>

              <!-- /.info-box -->
            </div>
            <input type="hidden" name="" id="question{{$loop->iteration -1}}" value="{{$q->question_id}}">

        @endforeach
        <input type="hidden" name="" id="sujetId" value="">


      </div>


</section>

@endsection

@section('custmo-js')
<script src="{{asset('js/jquery.js')}}"></script>


<script>


$('.play').each(function (index,element) {
     var data = document.querySelector('.audioquestion'+index);
    var question = $('#question'+index).val();

        $(this).click('.play'+index,function (e) {
             e.preventDefault();
                data.play();

                console.log(question)
             $('.stop'+index).html('<button onclick="pauses('+index+');return false" type="button"><i class="fa fa-pause"></i>Pause</button>');
             questions(1,question);
            })

})

function pauses(index){
    var data = document.querySelector('.audioquestion'+index);

    data.pause();
    $('.stop'+index).html('<button  onclick="plays('+index+');return false" type="button"><i class="fa fa-play"></i>Play</button>');
    $('#questions').html('');
    $('#reponse').html('');

//data.pause();
}

function plays(index){
    var data = document.querySelector('.audioquestion'+index);
    var question = $('#question'+index).val();
    data.play();
    $('.stop'+index).html('<button onclick="pauses('+index+');return false" type="button"><i class="fa fa-pause"></i>Pause</button>');
//data.pause();
questions(1,question);

}



 function questions(user,questionId) {

 /* test/corriger/loading/{user}/{questionId} */

 $.ajax({
        url: '/test/corriger/loading/'+user+'/'+questionId,
        type:'get',
        dataType:'json'
    }).done(function (data) {
        if (data.message == "Vrai") {
            $('#questions').html('Question choisi :'+data.questionChoice+'<span class="text text-success">('+data.message+')</span>');
            $('#reponse').html('Résultat Correct :  <span class="text text-success">('+data.reponse+')</span>')
        } else {
            $('#questions').html('Question choisi :'+data.questionChoice+'<span class="text text-danger">('+data.message+')</span>');
            $('#reponse').html('Résultat Correct :  <span class="text text-success">('+data.reponse+')</span>')

        }
    }).fail(function (xhr) {
        console.log(xhr)

    })
 }

/* function play(idplayer) {
    var x = document.querySelector('#'+idplayer);
    x.play();
}

function pause(idplayer) {
    var x = document.querySelector('#'+idplayer);
    x.pause();
} */

</script>
@endsection


