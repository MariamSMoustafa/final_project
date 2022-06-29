@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Review For Guide') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('guideReviews') }}" enctype="multipart/form-data">


                            @csrf
                            <div class="form-group row">
                                <label for="review" class="col-md-4 col-form-label text-md-right">{{ __('your review') }}</label>

                                <div class="col-md-6">
                                    <input id="review" type="text" class="form-control @error('review') is-invalid @enderror" name="review" value="{{ old('review') }}" required autocomplete="review" autofocus>

                                    @error('review')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="rateing" class="col-md-4 col-form-label text-md-right">{{ __('choose your rateing for your guide') }}</label>

                                <div class="col-md-6">
                                    <input id="rating" type="range" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{ old('rating') }}" required autocomplete="rating" autofocus>

                                    @error('rating')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit your review') }}
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