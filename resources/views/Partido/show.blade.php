@extends('layouts.dashboard')
@section('content')
    <div class="bg-light p-5 rounded">
        @auth

            <div class="row">

                <div class="col-1">

                </div>
                <div class="col-10">

                <form method="post" action="{{ route('partido.update') }}">
                    @csrf
                    <div class="mb-3">
                        <h1>Modificación del Partido {{$provincia->id}}</h1>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" value="{{$provincia->id}}" id="id" name="id">
                        <label for="description" class="form-label">Descripción:</label>
                        <input type="text" class="form-control" id="description" name="description" required value="{{$provincia->description}}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                </div>

                <div class="col-1">

                </div>
            </div>


                @endauth


            </div>

@endsection

