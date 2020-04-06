@extends('layouts.app')

@section('content')
    <div class="content">
        <h1>{{ trans('nas.'.$vars[0], [], $lan) }}</h1>
        <p>{{ trans('nas.'.$vars[1], [], $lan) }}</p>
    </div>
@endsection
