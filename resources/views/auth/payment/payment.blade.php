@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Payment') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('payment') }}" enctype="multipart/form-data">


                            @csrf
                            <div class="form-group row">
                                <label for="cardnum" class="col-md-4 col-form-label text-md-right">{{ __('Card Number') }}</label>

                                <div class="col-md-6">
                                    <input id="cardnum" type="text" class="form-control @error('cardnum') is-invalid @enderror" name="cardnum" >

                                    @error('cardnum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="expiration" class="col-md-4 col-form-label text-md-right">{{ __('Expiration') }}</label>

                                <div class="col-md-6">
                                    <input id="expiration" type="date" class="form-control @error('expiration') is-invalid @enderror" name="expiration" >

                                    @error('expiration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cvv" class="col-md-4 col-form-label text-md-right">{{ __('CVV') }}</label>

                                <div class="col-md-6">
                                    <input id="cvv" type="text" class="form-control @error('cvv') is-invalid @enderror" name="cvv" >

                                    @error('cvv')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="card_user_name" class="col-md-4 col-form-label text-md-right">{{ __('Card holder name') }}</label>

                                <div class="col-md-6">
                                    <input id="card_user_name" type="text" class="form-control @error('card_user_name') is-invalid @enderror" name="card_user_name" >

                                    @error('cardholder')
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