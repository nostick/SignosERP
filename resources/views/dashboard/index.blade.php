@extends('layouts.template')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{route('admin')}}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Dashboard</span>
            </li>
        </ul>
    </div>

    <h1 class="page-title"> Dashboard 2
        <small>dashboard & statistics</small>
    </h1>


    <div class="row">

    </div>
@endsection