@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>--}}
            <table class="table table-hover table-bordered">
                <thead>
                <tr class="card-header">
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                </tr>
                </thead>
                <tbody>
                    <tr class="card-body">
                        <td>{{\Illuminate\Support\Facades\Auth::user()->id??''}}</td>
                        <td><a href="{{route('show',\Illuminate\Support\Facades\Auth::user()->id??'')}}">{{\Illuminate\Support\Facades\Auth::user()->name??''}}</a></td>
                        <td>{{\Illuminate\Support\Facades\Auth::user()->email??''}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
