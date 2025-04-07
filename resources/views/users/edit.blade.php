<h2>Edit User</h2>
<form action="{{ route('users.update', $user) }}" method="POST">
    @csrf @method('PUT')
    @include('users.form')
    <button type="submit">Update</button>
</form>
