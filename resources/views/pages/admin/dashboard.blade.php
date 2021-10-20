@extends('layouts.adminlayout')

<style>
    #dashboard
    {
        background-color: blue
    }
</style>

@section('title')
    Admin Dashboard
@endsection

@section('admincontent')
    <br><h3><p class="center text-center text-danger">Admin Panel <br> Welcome {{ $admin->a_name }}!</p></h3>
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->u_name }}</td>
                <td>{{ $user->u_username }}</td>
                <td>{{ $user->u_email }}</td>
                <td>{{ $user->u_dob }}</td>
                <td><a href="{{ route('admin.userdetails', $user->id) }}"><button class="btn btn-outline-info">Details</button></a></td>
                <td><a href="{{ route('admin.edituser', $user->id) }}"><button class="btn btn-outline-success">Edit</button></a></td>
                <td><a href="{{ route('admin.deleteuser', $user->id) }}"><button class="btn btn-outline-danger">Delete</button></a></td>
            </tr>
        @endforeach
    </table>
@endsection