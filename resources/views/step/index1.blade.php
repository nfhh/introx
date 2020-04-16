@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="box">
            <div class="wd yi">
                @foreach($vars as $k=>$v)
                    @if($k===0)
                        <h1> {{ trans('nas.'.$v, [], $lan) }}</h1>
                    @else
                        <p> {{ trans('nas.'.$v, [], $lan) }}</p>
                    @endif
                @endforeach
            </div>
            <div class="wd er">
                @if($img)
                    <img src="{{ $img }}">
                @endif
            </div>
        </div>
    </div>
@endsection
