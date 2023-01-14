@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Social Links') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('settings.update') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="facebook">Facebook</label>
                                <input id="facebook" class="form-control @error('facebook') is-invalid @enderror"
                                    type="text" name="facebook" value="{{ old('facebook', setting('facebook')) }}"
                                    placeholder="Facebook page link" autofocus>
                                @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="twitter">Twitter</label>
                                <input id="twitter" class="form-control @error('twitter') is-invalid @enderror"
                                    type="text" name="twitter" value="{{ old('twitter', setting('twitter')) }}"
                                    placeholder="Twitter account link">
                                @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="linkedin">Linkedin</label>
                                <input id="linkedin" class="form-control @error('linkedin') is-invalid @enderror"
                                    type="text" name="linkedin" value="{{ old('linkedin', setting('linkedin')) }}"
                                    placeholder="Linkedin page link">
                                @error('linkedin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="instagram">Instagram</label>
                                <input id="instagram" class="form-control @error('instagram') is-invalid @enderror"
                                    type="text" name="instagram" value="{{ old('instagram', setting('instagram')) }}"
                                    placeholder="Instagram page link">
                                @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
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
