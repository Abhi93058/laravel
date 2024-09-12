<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container mt-3">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
  
  <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm">Add User</a>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <!-- <th>Create Date</th> -->
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->password }}</td>
        <!-- <td>{{ $item->created_at }}</td> -->
        <td>
          <a href="{{ route('user.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>     
          <a href="{{ route('user.delete', $item->id) }}" class="btn btn-warning btn-sm">Delete</a>     
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
