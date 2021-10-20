@extends('layouts.adminlayout')

<style>
    #profile
    {
        background-color: blue
    }
</style>

@section('title')
    Admin Profile
@endsection

@section('admincontent')
    <div class="form-control">
        <p class="center text-center"><b>Profile</b></p>
            <table class="table table-hover">
                <tr>
                    <td>Name:</td>
                    <td>{{ $admin->a_name }}</td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td>{{ $admin->a_username }}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{ $admin->a_email }}</td>
                </tr>
                <tr>
                    <td>Date Of Birth:</td>
                    <td>{{ $admin->a_dob }}</td>
                </tr>
            </table>
            <a href="{{ route('admin.edit') }}"><button class="btn btn-outline-dark">Edit</button></a>
            <a href="{{ route('admin.dashboard') }}"><button class="btn btn-outline-dark">Back</button></a>
    </div>
@endsection