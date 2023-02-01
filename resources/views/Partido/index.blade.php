@extends('layouts.dashboard')
@section('content')
    <div class="bg-light p-5 rounded">
        @auth
            <h1>Listado de Partidos</h1>

            <div class="table-responsive">

                <table class="table table-striped table-hover" id="tabla">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Description</th>
                        <th></th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($provincias as $provincia)

                        <tr>
                            <td>{{  $provincia->id}}</td>
                            <td>{{  $provincia->description}}</td>

                            <td>

                                    <a class="btn btn-success btn-sm"
                                       href="{{ route('partido.show', $provincia->id) }}">Modificar</a>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


        @endauth


    </div>


@endsection

