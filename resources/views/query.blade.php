<!-- resources/views/query.blade.php -->
<form action="{{ url('/user/store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <button type="submit">Submit</button>
</form>

@if(session('success'))
    <div>{{ session('success') }}</div>
@endif
