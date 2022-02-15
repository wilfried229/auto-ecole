@extends('templates.index-template')
@section('title')
Auto-Ecole
@endsection

@section('style-css')

<link rel="stylesheet" href="{{asset('AdminLTE/plugins/datatables/dataTables.bootstrap4.css')}}">

@endsection()


@section('content-wrapper')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Les Reponses</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Reponses</li>
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
      <div class="card card-success">

            <a class="btn btn-block btn-success" href="#" style="font-size: 17px;" data-toggle="modal" data-target="#ENCOModal" data-whatever="@getbootstrap">


                <h4> Ajouter un réponse  </h4>

            </a><!-- /.card-header -->

            <div class="card-body">
                <table id="example1" class="table  estdata table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Titre</th>
                        <th>Question N°</th>
                        <th>Questions</th>
                        <th>Reponse(s)</th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($reponses as $r)
                        <tr>
                        <td>{{$r->id}}</td>
                                <td>{{$r->titre }}</td>
                        <td>{{$r->question}}</td>
                                <td> {{$r->libelle}}   </td>
                        <th>{{$r->reponse}}</th>

                                            <td>
                                            <a class="btn btn-info" href="#" data-toggle="modal" data-target="#{{$r->id}}classe" data-whatever="@getbootstrap"  type="button" style="text-decoration: none">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <!-- pour modifier-->

                                                <div class="modal fade" id="{{ $r->id }}classe" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">

                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="{{ $r->id }}">
                                                                    <strong>Modification de la classe {{ $r->titre }} </strong>
                                                                </h5>

                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>


                                                            </div>
                                                            <div class="modal-body">
                                                            <form action="{{route('reponse.update',$r->id)}}" method="post" class="form">

                                                                {{ method_field('PUT')}}

                                                                    @csrf
                                                                    <div class="row">

                                                                        <div class="col-lg-12">
                                                                            <label for="">Titre</label>
                                                                        <input type="text" name="titre" class="form-control" value="{{$r->titre}}">
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <label for="">Reponses </label>

                                                                                <input type="text" name="reponse" id="" class="form-control" required>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <br>
                                                                            <input type="submit" value="Modifier" lang="fr" class="btn btn-block btn-info">
                                                                        </div>

                                                                    </div>




                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>

                                        </tr>


                        @endforeach

                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->


    <!--  modal ajout --->

    <div class="modal fade" id="ENCOModal" tabindex="-1" role="dialog" aria-labelledby="ENCOModal" aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="">
                            <strong>Ajouter un réponse  </strong>
                        </h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                            <span aria-hidden="true">&times;</span>
                        </button>


                    </div>
                    <div class="modal-body">
                    <form action="{{route('reponse.store')}}" method="post" class="form">

                        @csrf

                            <div class="row">


                                <div class="col-lg-12">
                                    <label for="">Questions</label>
                                    <select name="question" id="" class="form-control">

                                        @foreach ($questions as $q)
                                        @foreach ($reponses as $r)
                                            @if ($reponses  ->count() !=0 and $r->question_id != $q->id )
                                            <option value="{{$q->id}}">{{$q->titre}}</option>
                                            @endif

                                            @if ($reponses->count()== 0)
                                            <option value="{{$q->id}}">{{$q->titre}}</option>

                                            @endif
                                        @endforeach
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-12">
                                    <label for="">Titre</label>
                                <input type="text" name="titre" class="form-control" required>
                                </div>
                                <div class="col-lg-12">
                                    <label for="">Reponses </label>

                                        <input type="text" name="reponse" id="" class="form-control" required>
                                </div>

                                <div class="col-lg-12">
                                    <br>
                                    <input type="submit" value="Ajouter" lang="fr" class="btn btn-block btn-info">
                                </div>

                            </div>




                        </form>

                    </div>
                </div>
            </div>
        </div>
    <!--- fin modal --->
  </section>
@endsection


@section('custmo-js')
<script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<!-- SlimScroll -->
<script>
        $(function () {
          $("#example1").DataTable();
          $('#example').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
          });
        });
      </script>
@endsection


