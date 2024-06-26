<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>controle employees</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.css">
  </head>

  <body>
    <table data-toggle="table" >
      <thead align="center">
        <tr>
            <th>#</th>
            <th>Employee name</th>
            <th>Employee name</th>
            <th>Employee name</th>
            <th>#</th>
            <th>#</th>
        </tr>
      </thead>
      <tbody align="center">
      @foreach ($employees as $employee)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$employee->name}}</td> 
        <td>{{$employee->email}}</td>
        <td>{{$employee->role}}</td>
        <td><a href="{{route('manage-employees.edit', $employee->id)}}"> UPDATE</a></td>
        <td>
          <form action="{{ route('manage-employees.destroy', $employee->id) }}" method="POST" >
          @csrf
          @method('DELETE')
          <button>DELETE</button>
          </form>
        </td> 
        </tr>
      @endforeach
      </tbody>
    </table>
    <a  href="{{route('manage-employees.create')}}"> Add New Employee</a>

    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.js"></script>
  </body>
</html>