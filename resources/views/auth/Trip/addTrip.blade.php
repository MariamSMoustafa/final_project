@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Trip') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('addTrip') }}" enctype="multipart/form-data">


                            @csrf
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('tripname') }}</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('tripname') is-invalid @enderror" name="tripname" value="{{ old('tripname') }}" required autocomplete="title" autofocus>

                                    @error('tripname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">

                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="guideLines" class="col-md-4 col-form-label text-md-right">{{ __('Guide Lines') }}</label>

                                <div class="col-md-6">
                                    <input id="guideLines" type="text" class="form-control @error('guideLines') is-invalid @enderror" name="guideLines" value="{{ old('guideLines') }}" required autocomplete="guideLines">

                                    @error('guideLines')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="from" class="col-md-4 col-form-label text-md-right">{{ __('From') }}</label>

                                <div class="col-md-6">
                                    <input id="from" type="date" class="form-control @error('from') is-invalid @enderror" name="from" value="{{ old('from') }}" required autocomplete="from" autofocus>

                                    @error('from')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="to" class="col-md-4 col-form-label text-md-right">{{ __('To') }}</label>

                                <div class="col-md-6">
                                    <input id="to" type="date" class="form-control @error('to') is-invalid @enderror" name="to" value="{{ old('to') }}" required autocomplete="to" autofocus>

                                    @error('to')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="durationTime" class="col-md-4 col-form-label text-md-right">{{ __('Duration ') }}</label>

                                <div class="col-md-6">
                                    <input id="duration" type="time" class="form-control @error('duration') is-invalid @enderror" name="duration" required autocomplete="duration">

                                    @error('duration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="departureTime" class="col-md-4 col-form-label text-md-right">{{ __('Departure Time') }}</label>

                                <div class="col-md-6">
                                    <input id="departureTime" type="time" class="form-control @error('departureTime') is-invalid @enderror" name="departureTime" required autocomplete="departureTime">

                                    @error('departureTime')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="departurePlace" class="col-md-4 col-form-label text-md-right">{{ __('Departure Place') }}</label>

                                <div class="col-md-6">
                                    <input id="departurePlace" type="text" class="form-control @error('departurePlace') is-invalid @enderror" name="departurePlace" value="{{ old('departurePlace') }}" required autocomplete="departurePlace">

                                    @error('departurePlace')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">

                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="num_of_sets" class="col-md-4 col-form-label text-md-right">{{ __('Number Of people') }}</label>

                                <div class="col-md-6">
                                    <input id="nofpeople" type="number" class="form-control @error('nofpeople') is-invalid @enderror" name="nofpeople" value="{{ old('nofpeople') }}" required autocomplete="num_of_sets">

                                    @error('nofpeople')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="photos" class="col-md-4 col-form-label text-md-right">{{ __('Upload Photos') }}</label>

                                <div class="col-md-6">
                                    <input id="photos" type="file" class="form-control @error('photos') is-invalid @enderror" name="photos" value="{{ old('photos') }}" required autocomplete="photos" autofocus>

                                    @error('photos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('ADD') }}
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