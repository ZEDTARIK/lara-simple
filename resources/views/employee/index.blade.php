@extends("_layout")

@section("content")


<a href="{{route('employee.create')}}" class="btn btn-sm btn-dark mb-3">New Employee</a>

<div class="card">
    <div class="card-header">Employees List</div>
    <div class="card-body">
        <table class="table table-sm table-hover table-bordered">
            <thead>
                <tr class="text-center">
                    <th>Employee N°</th>
                    <th>Employee Name</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->EmployeeNumber }}</td>
                    <td>{{ $employee->EmployeeFullName }}</td>
                    <td>{{ $employee->EmployeeEmail }}</td>
                    <td>
                        <form action="{{ route('employee.destroy', ['employee' => $employee->id]) }}" method="POST">
                           @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection