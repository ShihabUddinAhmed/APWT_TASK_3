@extends('layouts.adminlayout')

<style>
    #edit{
        background-color: blue
    }
</style>

@section('title')
    Edit Profile
@endsection

@section('admincontent')
    <div class="form-control">
        <p class="center text-center"><b>Edit Profile</b></p>
        <form action="{{  route('admin.edit') }}" class="form-control" method="POST">
            {{ csrf_field() }}
            <table class="table table-borderless">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" class="form-control" id="name" name="name" value="{{ $admin->a_name }}"></td>
                    <td>
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" class="form-control" id="email" name="email" value="{{ $admin->a_email }}"></td>
                    <td>
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Date Of Birth:</td>
                    <td><input type="date" class="form-control" id="dob" name="dob" value="{{ $admin->a_dob }}"></td>
                    <td>
                        @error('dob')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" class="btn btn-outline-dark form-control" value="Save"></td>
                </tr>
            </table>
        </form>
    </div>
@endsection