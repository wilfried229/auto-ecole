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
            <h1 class="m-0 text-dark">Historiques de Notes</h1>
            <br>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active"><a href="{!! URL::previous() !!}" class="btn btn-danger">Retour Vers L'accueil</a></li>


            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
<!-- Main content -->

@foreach ($categorieNotes as $key => $c)

<section class="content" id="{{$key}}">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="card card-success">

                <a class="btn btn-block btn-success"  href="#"   data-toggle="collapse" data-target="#collapseExample{{ $key }}"  data-whatever="@getbootstrap">
                    <h4>  {{$c}}</h4>
                </a><!-- /.card-header -->

                <div class="collapse" id="collapseExample{{ $key }}" data-parent="#accordionExample{{ $key }}">
                        <div class="card-body">
                                <div class="table-responsive">

                            <table id="example" class="table example1 table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Nom et Prénoms</th>
                                    @if ($key == 1)
                                    <th>Sujets et Chapitres</th>

                                    @else
                                    @endif
                                    <th>Notes</th>
                                    <th>Date du Test</th>


                                </tr>
                                </thead>
                                <tbody>
                                        @if ($key == 0)

                                    @foreach ($notesTestGenerales as $n)

                                    <tr>
                                        <td>{{$n->users()->first()->name}} {{$n->users()->first()->prenom}}</td>
                                        <td>{{$n->note}}/20</td>
                                        <td>{{$n->created_at}}</td>

                                    </tr>


                                    @endforeach

                                    @endif

                                    @if ($key == 1)

                                    @foreach ($notes as $n)

                                    <tr>
                                        <td>{{$n->users()->first()->name}} {{$n->users()->first()->prenom}}</td>
                                        <td>{{$n->titre}}</td>
                                        <td>{{$n->note}}/20</td>
                                        <td>{{$n->created_at}}</td>

                                    </tr>


                                    @endforeach


                                    @endif

                                    @if ($key == 2)






                                    @endif

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


