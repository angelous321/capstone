@extends('layouts.app')
@section('content')
<div class="col py-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Admin Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('admin modulaae') }}
                        </div>
        </div>
    </div>
    @endsection
</div>
</div>
</div>
