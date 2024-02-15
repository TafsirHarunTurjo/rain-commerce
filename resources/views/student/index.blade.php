<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rain Commerce</title>
        
        <style>
            table, th, td {
              border: 1px solid black;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>Students</h1>
        <table class="">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Gender</th>
              <th>Email</th>
            </tr>

            @foreach($students as $student)
            <tr>
              <td>{{ $student->id }}</td>
              <td>{{ $student->name }}</td>
              <td>{{ $student->gender }}</td>
              <td>{{ $student->email }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
