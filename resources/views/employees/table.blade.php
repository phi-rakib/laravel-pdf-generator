<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Date of Birth</th>
        </tr>

        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->phone_number }}</td>
                    <td>{{ $employee->dob }}</td>
                </tr>
            @endforeach
        </tbody>
    </thead>
</table>