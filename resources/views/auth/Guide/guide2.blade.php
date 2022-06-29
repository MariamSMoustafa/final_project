@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register2') }}" enctype="multipart/form-data">


                            @csrf
                            <div class="form-group row">
                                <label for="language_name" class="col-md-4 col-form-label text-md-right">{{ __('selest your language') }}</label>

                                <div class="col-md-6">
                                    <input id="language_name" type="text" class="form-control @error('language_name') is-invalid @enderror" name="language_name" value="{{ old('language_name') }}" required autocomplete="language_name" autofocus>

                                    @error('language_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="certificate_img" class="col-md-4 col-form-label text-md-right">{{ __('certificate Image') }}</label>

                                <div class="col-md-6">
                                    <input id="certificate_img" type="file" class="form-control @error('certificate_img') is-invalid @enderror" name="certificate_img" value="{{ old('certificate_img') }}" >

                                    @error('certificate_img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection