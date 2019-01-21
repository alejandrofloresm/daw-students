@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col">
        <h1>Índice de estudiantes</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a class="btn btn-primary" href="{{ route('students.create') }}" role="button">Agregar un estudiante</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table">
            <theader>
                <th>Id</th>
                <th>Matrícula</th>
                <th>Nombre</th>
            </theader>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>
                            {{ $student->id }}
                        </td>
                        <td>
                            {{ $student->student_id }}
                        </td>
                        <td>
                            {{ $student->name }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
