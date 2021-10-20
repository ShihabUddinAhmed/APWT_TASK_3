@extends('layouts.userlayout')

<style>
    #dashboard
    {
        background-color: blue
    }
</style>

@section('title')
    User Dashboard
@endsection

@section('usercontent')
    <br><h3><p class="center text-center">Welcome {{ $user->u_name }}!</p></h3>
@endsection