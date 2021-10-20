@extends('layouts.userlayout')

<style>
    #profile{
        background-color: blue
    }
</style>

@section('title')
    User Profile
@endsection

@section('usercontent')
    <div class="form-control">
        <p class="center text-center"><b>Profile</b></p>
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
            <a href="{{ route('user.edit') }}"><button class="btn btn-outline-dark">Edit</button></a>
            <a href="{{ route('user.dashboard') }}"><button class="btn btn-outline-dark">Back</button></a>
    </div>
@endsection