@extends('layouts.app')

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

                        <div class="d-flex gap-2">
                            <form action="{{ route('cache') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Cashe Congif & Routes</button>
                            </form>
                            <form action="{{ route('clear') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Clear Congif & Routes</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
