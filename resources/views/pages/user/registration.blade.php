@extends('layouts.homelayout')

<style>
    #userreg{
        background-color: blue
    }
</style>

@section('title')
    User Registration
@endsection

@section('content')
    <div class="form-control">
        <p class="center text-center"><b>User Registration</b></p>
        <form action="{{ route('user.registration') }}" class="form-control" method="POST">
            {{ csrf_field() }}
            <table class="table table-borderless">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" class="form-control" id="name" name="name" placeholder="Name"></td>
                    <td>
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" class="form-control" id="username" name="username" placeholder="Username"></td>
                    <td>
                        @error('username')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" class="form-control" id="email" name="email" placeholder="Email"></td>
                    <td>
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Date Of Birth:</td>
                    <td><input type="date" class="form-control" id="dob" name="dob"></td>
                    <td>
                        @error('dob')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" class="form-control" id="password" name="password" placeholder="Password"></td>
                    <td>
                        @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" class="btn btn-outline-dark form-control" value="Register"></td>
                </tr>
            </table>
        </form>
    </div>
@endsection