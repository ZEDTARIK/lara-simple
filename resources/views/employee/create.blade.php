@extends("_layout")
@section("content")
<form action="{{route('employee.store')}}" method="POST">

@CSRF 

    <div class="card">
    <div class="card-header">Create New Employee</div>
        <div class="card-body">
            
            <div class="form-group">
                <label for="EmployeeNumber" class="col-sm-2 control-label">Employee Number</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Employee Number" name="EmployeeNumber">
                </div>
            </div>

            <div class="form-group">
                <label for="EmployeeFullName" class="col-sm-2 control-label">Employee FullName</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Employee Name" name="EmployeeFullName">
                </div>
            </div>

            <div class="form-group">
                <label for="EmployeeEmail" class="col-sm-2 control-label">Employee Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" placeholder="Employee Email" name="EmployeeEmail">
                </div>
            </div>

            <div class="form-group">
                <label for="EmployeeAdress" class="col-sm-2 control-label">Employee Adress</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Adress" name="EmployeeAdress">
                </div>
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success btn-sm">Save</button>
        </div>
    </div>

</form>
@endsection