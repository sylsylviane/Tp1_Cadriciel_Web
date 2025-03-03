@extends('layouts.app')
@section('title', 'Étudiants')
@section('content')
<div class="col-4 m-auto my-5">
    <div class="card text-center border-0 shadow rounded-0 p-4 m-3">
        <div class="card-header icon">
            <i class="bi bi-backpack" style="font-size: 1.5rem"></i>
        </div>
        <div class=" card-body">
            <h5 class="card-title">{{ $student->name }}</h5>
            <p class="card-text mb-1"><strong>Adresse: </strong>{{ $student->address }}</p>
            <p class="card-text mb-1"><strong>Téléphone: </strong>{{ $student->phone }}</p>
            <p class="card-text mb-1"><strong>Courriel: </strong>{{ $student->email }}</p>
            <p class="card-text mb-1"><strong>Date de naissance: </strong>{{ $student->dob }}</p>
            <p class="card-text mb-1"><strong>Ville: </strong>{{ $student->city->name }}</p>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-between">
                <a href="{{route('student.edit', $student->id)}}"><i class="bi bi-pencil-square" style="font-size: 1.5rem; color: green"></i></a>
                <i class="bi bi-trash3 telx" style="font-size: 1.5rem; color:red"></i>
            </div>
        </div>
    </div>
</div>
@endsection