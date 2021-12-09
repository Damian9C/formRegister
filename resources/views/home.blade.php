@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-light shadow-sm">
                <div class="card-body">
                    <clients-list/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
