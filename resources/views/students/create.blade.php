@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Crear un nuevo estudiante</h1>
    </div>
</div>
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Matrícula</label>
                <input type="text" class="form-control" name="student[student_id]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="student[name]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Carrera</label>
                <input type="text" class="form-control" name="student[program]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Correo personal</label>
                <input type="text" class="form-control" name="student[personal_email]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>GPA</label>
                <input type="number" class="form-control" name="student[gpa]">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endsection
