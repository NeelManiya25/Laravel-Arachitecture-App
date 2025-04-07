
<h2>Users</h2>
<a href="{{ route('users.create') }}">Create New User</a>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Role</th>
        <th>Action</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->firstname }} {{ $user->lastname }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->mobile }}</td>
            <td>{{ $user->role }}</td>
            <td>
                <a href="{{ route('users.edit', $user) }}">Edit</a>
                <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
