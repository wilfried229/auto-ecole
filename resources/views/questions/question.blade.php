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
            <h1 class="m-0 text-dark">Les Questions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Questions</a> </li>

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


                <h4> Ajouter une questions  </h4>

            </a><!-- /.card-header -->

            <div class="card-body">
                <table id="example1" class="table  estdata table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Sous Questions</th>
                        <th>Reponses</th>

                        <th>Sujets et chapitres</th>

                        <th>Action</th>

                    </tr>
                    </thead>
                    <tbody>

                        @foreach ($questions as $q)
                        <tr>
                        <td>{{$q->id}}</td>
                                <td>{{$q->titre }}</td>
                                <td>{{$q->libelle}}</td>

                        <td>{{$q->a}} {{$q->b}} {{$q->c}} {{$q->d}}</td>
                        <td>{{$q->reponse}}</td>

                                <td>@foreach ($sujets as $s)
                                    @if ($s->id == $q->sujet_id)
                        {{$s->titre}}
                                    @endif

                                @endforeach    </td>

                                            <td>
                                            <a class="btn btn-info" href="#" data-toggle="modal" data-target="#{{$q->id}}classe" data-whatever="@getbootstrap"  type="button" style="text-decoration: none">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <!-- pour modifier-->

                                                <div class="modal fade" id="{{ $q->id }}classe" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">

                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="{{ $q->id }}">
                                                                    <strong>Modification de la classe {{ $q->titre }} </strong>
                                                                </h5>

                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>


                                                            </div>
                                                            <div class="modal-body">
                                                            <form action="{{route('question.update',$q->id)}}" method="post" class="form">

                                                                {{ method_field('PUT')}}

                                                                    @csrf
                                                                    <div class="row">

                                                                        <div class="col-lg-12">
                                                                            <label for="">Titre</label>
                                                                        <input type="text" name="titre" class="form-control" value="{{$q->titre}}">
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <label for="">Description</label>
                                                                        <input type="text" name="libelle" id="" class="form-control" value="{{$q->libelle}}">
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
                            <strong>Ajouter un chapitre  </strong>
                        </h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                            <span aria-hidden="true">&times;</span>
                        </button>


                    </div>
                    <div class="modal-body">
                    <form action="{{route('question.store')}}" method="post" class="form" enctype="multipart/form-data">

                        @csrf

                            <div class="row">

                                <div class="col-lg-12">
                                    <label for="">Sujets</label>
                                    <select name="sujet" id="" class="form-control">
                                        @foreach ($sujets as $s)

                                    <option value="{{$s->id}}">{{$s->titre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                        <label for="">Titre</label>

                                        <input type="text" name="titre" id="" class="form-control">
                                    </div>

                                <div class="col-lg-12">
                                    <label for="">Description</label>
                                    <textarea name="libelle" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>

                                <div class="row">

                                        <div class="col-lg-6">
                                                <label for="">Index Questions A</label>
                                            <input type="text" name="a" id="" class="form-control" required>
                                            </div>
                                            <div class="col-lg-6">
                                                    <label for="">Index Questions B</label>
                                            <input type="text" name="b" id="" class="form-control" required>
                                            </div>

                                </div>

                                <div class="row">
                                        <div class="col-lg-6">
                                                <label for="">Index Questions,C</label>

                                            <input type="text" name="c" id="" class="form-control" required>
                                            </div>

                                            <div class="col-lg-6">
                                                <label for="">Index Questions D</label>

                                            <input type="text" name="d" id="" class="form-control">
                                            </div>

                                </div>

                                <div class="col-lg-12">

                                    <label for=""></label>
                                    <input type="file" name="audio" id="" class="form-control">
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
          $(".example1").DataTable();
          $('#example1').DataTable({
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


