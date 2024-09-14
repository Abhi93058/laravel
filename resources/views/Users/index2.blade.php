<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User List</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card-header h4 {
      font-weight: 600;
    }

    .table-hover tbody tr:hover {
      background-color: #f5f5f5;
    }

    .rounded-circle {
      object-fit: cover;
    }

    .btn-info {
      background-color: #17a2b8;
    }

    .btn-danger {
      background-color: #dc3545;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header bg-primary text-white">
      <div class=""><a href="{{ route('user.create2') }}" class="btn btn-primary btn-md">Add user</a></div>
      </div>
      <div class="card-body p-0">
        <table class="table table-hover table-bordered mb-0">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>
              <th scope="col">Image</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
  @foreach($users as $item)
  <tr>
    <th scope="row">{{ $item->id }}</th>
    <td>{{ $item->name }}</td>
    <td>{{ $item->email }}</td>
    <td>{{ $item->mobile }}</td>
    <td>
      <img src="{{ asset('images/' . $item->image) }}" alt="User Image" width="50" height="50" class="rounded-circle">
    </td>
    <td>
          <a href="{{ route('user.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>     

    <a href="{{ route('user.delete', $item->id) }}" class="btn btn-danger btn-sm">Delete</a>     
    </td>
  </tr>
  @endforeach
</tbody>

        </table>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS, Popper.js, and jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
