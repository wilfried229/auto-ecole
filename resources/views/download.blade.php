@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Téléchargement</div>

                <div class="card-body">

                <a href="{{route('link')}}" class="btn btn-info text-light">Cliquez ici pour télécharger </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
