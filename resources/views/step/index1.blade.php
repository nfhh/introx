@extends('layouts.app')

@section('content')
    <div class="content">
        <h1>{{ trans('nas.'.$vars[0], [], $lan) }}</h1>
        <p> {{ trans('nas.'.$vars[1], [], $lan) }}</p>
        <p>{{ trans('nas.'.$vars[2], [], $lan) }}</p>
        <ul class="list-group">
            <li>{{ trans('nas.'.$vars[3], [], $lan) }}</li>
            <li>{{ trans('nas.'.$vars[4], [], $lan) }}</li>
            <li>{{ trans('nas.'.$vars[5], [], $lan) }}</li>
            <li>{{ trans('nas.'.$vars[6], [], $lan) }}</li>
            <li>{{ trans('nas.'.$vars[7], [], $lan) }}</li>
            <li>{{ trans('nas.'.$vars[8], [], $lan) }}</li>
            <li>{{ trans('nas.'.$vars[9], [], $lan) }}</li>
        </ul>
    </div>
@endsection
