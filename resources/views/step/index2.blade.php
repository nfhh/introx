@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="box">
            <h1>{{ trans('nas.'.$vars[0], [], $lan) }}</h1>
            @if($img)
                <img src="{{ asset($img)}}">
            @endif
            <ul class="list-group">
                <li>{{ trans('nas.'.$vars[1], [], $lan) }}</li>
                <li>{{ trans('nas.'.$vars[2], [], $lan) }}</li>
                <li>{{ trans('nas.'.$vars[3], [], $lan) }}</li>
                <li>{{ trans('nas.'.$vars[4], [], $lan) }}</li>
                <li>{{ trans('nas.'.$vars[5], [], $lan) }}</li>
                <li>{{ trans('nas.'.$vars[6], [], $lan) }}</li>
                <li>{{ trans('nas.'.$vars[7], [], $lan) }}</li>
            </ul>
        </div>
    </div>
@endsection
