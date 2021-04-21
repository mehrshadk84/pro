<tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->wallet }}</td>
    <td style="text-align: center;">
        @include('admin.user.operations')
    </td>
</tr>