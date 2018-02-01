@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img src="{{ (asset('/images/OrderlyLogo_final.svg')) }}" id="logo" width="300px" style="margin-bottom: 28px" class="mx-auto d-block" />
            {{--  {{ URL::asset("../assets/img/OrderlyLogo.svg") }}  --}}
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    {{--  <button type="button" class="btn btn-outline-info">Proceed</button>  --}}
                    <br/>
                    <a class="waves-effect waves-light btn" href=" {{ route('loggedIn') }} ">Click to Begin</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
