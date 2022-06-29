@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Trip Booking') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('tripBooking') }}" enctype="multipart/form-data">


                            @csrf
                            <div class="form-group row">
                                <label for="national_id" class="col-md-4 col-form-label text-md-right">{{ __('National ID') }}</label>

                                <div class="col-md-6">
                                    <input id="national_id" type="number" class="form-control @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}" required autocomplete="national_id" autofocus>

                                    @error('national_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone_num1" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                <div class="col-md-6">
                                    <input id="phone_num1" type="tel" class="form-control @error('phone_num1') is-invalid @enderror" name="phone_num1" value="{{ old('phone_num1') }}" required autocomplete="phone_num1" autofocus>

                                    @error('phone_num1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone_num2" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number2') }}</label>

                                <div class="col-md-6">
                                    <input id="phone_num2" type="tel" class="form-control @error('phone_num2') is-invalid @enderror" name="phone_num2" value="{{ old('phone_num2') }}" required autocomplete="phone_num2" autofocus>

                                    @error('phone_num2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="num_of_seats" class="col-md-4 col-form-label text-md-right">{{ __('Number Of Seats') }}</label>

                                <div class="col-md-6">
                                    <input id="num_of_seats" type="number" class="form-control @error('num_of_seats') is-invalid @enderror" name="num_of_seats" value="{{ old('num_of_seats') }}" required autocomplete="num_of_seats" autofocus>

                                    @error('num_of_seats')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Book') }}
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