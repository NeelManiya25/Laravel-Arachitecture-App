<h2>Create User</h2>
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    @include('users.form')
    <button type="submit">Save</button>
</form>
