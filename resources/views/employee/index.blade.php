<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Department</th>
    </tr>
    </thead>
    <tbody>
    @foreach($employees as $employee)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->department->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>