@extends('layouts.homelayout')

<style>
    #userlogin{
        background-color: blue
    }
</style>

@section('title')
    User Login
@endsection

@section('content')
    <div class="form-control">
        <p class="center text-center"><b>User Login</b></p>
        <form action="" class="form-control" method="post">
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