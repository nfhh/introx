@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="box">
            <div class="yi">
                @foreach($vars as $k=>$v)
                    <p> {{ trans('nas.'.$v, [], $lan) }}</p>
                @endforeach
            </div>
            <div class="er">
                @if($img)
                    <img src="{{ $img }}">
                @endif
            </div>
        </div>
    </div>
@endsection
