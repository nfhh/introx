@extends('layouts.app')

@section('content')
    <div class="twoxx">
        <div class="wrap">
            <div class="box1 text-center">
                @foreach($vars as $k=>$v)
                    <p> {{ trans('nas.'.$v, [], $lan) }}</p>
                @endforeach
            </div>
            <div class="box4">
                @if($img)
                    <img src="{{ $img }}">
                @endif
            </div>
        </div>
    </div>
@endsection

