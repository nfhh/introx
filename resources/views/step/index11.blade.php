@extends('layouts.app')

@section('content')
    <div class="content">
        <h1>{{ trans('nas.'.$vars[0], [], $lan) }}</h1>
        <p>{{ trans('nas.'.$vars[1], [], $lan) }}</p>
        <p>{{ trans('nas.'.$vars[2], [], $lan) }}</p>
        <p>{{ trans('nas.'.$vars[3], [], $lan) }}</p>
        <p>{{ trans('nas.'.$vars[4], [], $lan) }}</p>
        <p>{{ trans('nas.'.$vars[5], [], $lan) }}</p>
    </div>
@endsection
