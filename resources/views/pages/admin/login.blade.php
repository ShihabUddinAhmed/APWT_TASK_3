@extends('layouts.homelayout')

<style>
    #adminlogin{
        background-color: blue
    }
</style>

@section('title')
    Admin Login
@endsection

@section('content')
    <div class="form-control">
        <p class="center text-center text-danger"><b>Admin Login</b></p>
        <form action="{{ route('admin.login') }}" class="form-control" method="POST">
            {{ csrf_field() }}
            <table class="table-borderless">
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
                    <td><input type="submit" class="btn btn-outline-dark form-control" value="Log In"></td>
                </tr>
            </table>
        </form>
    </div>
@endsection