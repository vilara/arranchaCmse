<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Bootstrap</title>
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap.css') }}">
</head>
<body>
<h1>Testando bootstrap</h1>
<button class="btn btn-lg btn-orange">Bootstrap</button>
<script src="{{ url(mix('/site/js/jquery.js')) }}"></script>
<script src="{{ url(mix('/site/js/bootstrap.js')) }}"></script>
</body>
</html>




{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
