@extends('layouts.app')

@section('content')
    <div class="twoxx">
        <h1>{{ trans('nas.'.$vars[0], [], $lan) }}</h1>
        <div class="box5 text-center">
            @for ($i=1; $i<=count($vars)-1; $i++)
                <p> {{ trans('nas.'.$vars[$i], [], $lan) }}</p>
            @endfor
        </div>
        <div class="box4">
            @if($img)
                <img src="{{ $img }}">
            @endif
        </div>
    </div>
@endsection
