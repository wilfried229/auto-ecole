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
            <h1 class="m-0 text-dark">Les Sujets</h1>
            <br>
            <button type="button" class="btn btn-outline btn-info" data-toggle="modal" data-target="#ENCOModal">

                    <i class="fa fa-plus"></i>Ajouter</button>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Sites</li>


            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
<!-- Main content -->

@foreach ($chapitres as $c)

<section class="content" id="{{$c->id}}">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="card card-success">

                <a class="btn btn-block btn-success"  href="#"   data-toggle="collapse" data-target="#collapseExample{{ $c->id }}"  data-whatever="@getbootstrap">
                    <h4> Chapitre {{$c->titre}}</h4>
                </a><!-- /.card-header -->

                <div class="collapse" id="collapseExample{{ $c->id }}" data-parent="#accordionExample{{ $c->id }}">
                        <div class="card-body">
                                <div class="table-responsive">

                            <table id="example" class="table example1 table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titre</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>



                                    @foreach ($allsData as $key => $data)

                                        @if ($key == $c->id)
                                        @foreach ($data as $s)


                                        <tr>
                                            <td>{{$s->id}}</td>
                                                    <td>{{$s->titre }}</td>


                                                                <td>
                                                                <a class="btn btn-info" href="#" data-toggle="modal" data-target="#{{$s->id}}classe" data-whatever="@getbootstrap"  type="button" style="text-decoration: none">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>
                                                                    <a class="btn btn-warning" href="#" data-toggle="modal" data-target="#" data-whatever="@getbootstrap"  type="button" style="text-decoration: none">
                                                                       Détails <i class="fa fa-plus"></i>
                                                                    </a>
                                                                    <!-- pour modifier-->

                                                                    <div class="modal fade" id="{{ $s->id }}classe" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">

                                                                            <div class="modal-content">

                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="{{ $s->id }}">
                                                                                        <strong>Modification de la classe {{ $s->titre }} </strong>
                                                                                    </h5>

                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>


                                                                                </div>
                                                                                <div class="modal-body">
                                                                                <form action="{{route('sujet.update',$s->id)}}" method="post" class="form">

                                                                                    {{ method_field('PUT')}}

                                                                                        @csrf
                                                                                        <div class="row">

                                                                                            <div class="col-lg-12">
                                                                                                <label for="">Titre</label>
                                                                                            <input type="text" name="titre" class="form-control" value="{{$s->titre}}">
                                                                                            </div>
                                                                                            <div class="col-lg-12">
                                                                                                    <label for="">Chapitres</label>
                                                                                                    <select name="chapitre" id="" class="form-control">
                                                                                                        @foreach ($chapitres as $c)
                                                                                                        <option value="{{$c->id}}">{{$c->titre}}</option>
                                                                                                        @endforeach
                                                                                                    </select>
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

                                        @endif


                                    @endforeach


                                </tbody>

                            </table>
                            </div>
                        </div>
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
                                <strong>Ajouter un  sujet  </strong>
                            </h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                                <span aria-hidden="true">&times;</span>
                            </button>


                        </div>
                        <div class="modal-body">
                        <form action="{{route('sujet.store')}}" method="post" class="form">

                            @csrf

                                <div class="row">

                                    <div class="col-lg-12">
                                        <label for="">Titre</label>
                                    <input type="text" name="titre" class="form-control" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="">Chapitres</label>
                                        <select name="chapitre" id="" class="form-control">
                                            @foreach ($chapitres as $c)
                                            <option value="{{$c->id}}">{{$c->titre}}</option>
                                            @endforeach
                                        </select>
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
@endforeach

@endsection


@section('custmo-js')
<!-- DataTables -->
<script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<!-- SlimScroll -->
<script>
        $(function () {
          $(".example1").DataTable();
          $('#example2').DataTable({
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


