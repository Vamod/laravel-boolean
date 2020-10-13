@extends('layouts.app')
@section('titolo', 'studenti')
@section('content')
<div class="container-fluid">
    <div class="card-group">
        @foreach ($data as $key => $student)
            <div class="carta">
                <img id="student" src="{{ $student['img'] }}" class="card-img-top" alt="{{ $student['nome'] }}">
                <div class="card-body">
                    {{-- passo a Student.show l'id come parametro e l'associo alla key--}}
                    <a href="{{ route('Student.show', ['id' => $key]) }}"><h5 class="card-title">{{ $student['nome'] }} {{ $student['anni'] }} anni</h5></a>
                    <h6>Assunt{{$student['genere'] == 'm' ? 'o' : 'a' }} da {{ $student['azienda'] }}</h6>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
