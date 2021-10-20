@extends('layouts.adminlayout')

@section('title')
    User Profile
@endsection

@section('admincontent')
    <div class="form-control">
        <p class="center text-center"><b>User Details</b></p>
            <table class="table table-hover">
                <tr>
                    <td>Name:</td>
                    <td>{{ $user->u_name }}</td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td>{{ $user->u_username }}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{ $user->u_email }}</td>
                </tr>
                <tr>
                    <td>Date Of Birth:</td>
                    <td>{{ $user->u_dob }}</td>
                </tr>
            </table>
            <a href="{{ route('admin.edituser', $user->id) }}"><button class="btn btn-outline-dark">Edit</button></a>
            <a href="{{ route('admin.dashboard') }}"><button class="btn btn-outline-dark">Back</button></a>
    </div>
@endsection