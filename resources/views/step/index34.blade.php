@extends('layouts.app')

@section('content')
    <div class="twoxxx">
        <h1>{{ trans('nas.'.$vars[0], [], $lan) }}</h1>
        <div class="box5">
            <p>
                <a href="{{ trans('nas.'.$vars[2], [], $lan) }}">{{ trans('nas.'.$vars[1], [], $lan) }}</a>{{ trans('nas.'.$vars[3], [], $lan) }}{{ trans('nas.'.$vars[4], [], $lan) }}
            </p>
        </div>
    </div>
@endsection


