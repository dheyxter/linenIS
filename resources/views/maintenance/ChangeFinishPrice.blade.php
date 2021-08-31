@extends('layouts.app2')

@section('content')
    <div class="col-lg-12">
        <h1>Change Price</h1>
    </div>
    <hr>
    <div class="col-lg-12">
        <h2>{{$FinishMats->item_name}}</h2>
        <h3>Current Price: {{$FinishMats->item_price}}</h3>
        <form method="POST" action="/pricesave/finish/save" enctype="multipart/form-data">
            @csrf

            <div class="col-md-6">=
                <input id="finishmats_id" type="text" class="form-control" name="finishmats_id" hidden value="{{$FinishMats->id}}">
            </div>

            <div class="col-md-6">
                <label for="item_price" class="col-md-4 col-form-label text-md-right">{{ __('Price:') }}</label>

                <input id="item_price" type="number" class="form-control" name="item_price">

            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Save') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
    

@endsection
