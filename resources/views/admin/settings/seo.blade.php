@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Website SEO') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('settings.update') }}" method="POST">
                            @csrf
                            <div class="row">
                                @foreach ($pages as $page => $fields)
                                    <div class="col-12 @if (!$loop->first) mt-3 @endif">
                                        <h4 class="text-capitalize">{{ str_replace('_', ' ', $page) }}</h4>
                                    </div>
                                    @foreach ($fields as $name => $field)
                                        <div class="col-md-6 form-group mb-2">
                                            <label class="text-capitalize"
                                                for="{{ $field }}">{{ $name }}</label>
                                            <input id="{{ $field }}" class="form-control" type="text"
                                                name="{{ $field }}" value="{{ old($field, setting($field)) }}"
                                                placeholder="{{ $name }}">
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>

                            <div class="form-group mt-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
