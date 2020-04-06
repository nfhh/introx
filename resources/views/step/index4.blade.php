@extends('layouts.app')

@section('content')
    <div class="content">
        <h1>{{ trans('nas.'.$vars[0], [], $lan) }}</h1>
        <p>{{ trans('nas.'.$vars[1], [], $lan) }}</p>
        <p>{{ trans('nas.'.$vars[2], [], $lan) }}</p>
        <img src="https://iph.href.lu/300x300" alt="">
        <p>{{ trans('nas.'.$vars[3], [], $lan) }}</p>
        <img src="https://iph.href.lu/300x300" alt="">
        <p>{{ trans('nas.'.$vars[4], [], $lan) }}</p>
        <p>{{ trans('nas.'.$vars[5], [], $lan) }}</p>
        <img src="https://iph.href.lu/300x300" alt="">
        <p>{{ trans('nas.'.$vars[6], [], $lan) }}</p>
        <img src="https://iph.href.lu/300x300" alt="">
        <p>{{ trans('nas.'.$vars[7], [], $lan) }}</p>
        <p>{{ trans('nas.'.$vars[8], [], $lan) }}</p>
        <img src="https://iph.href.lu/300x300" alt="">
        <p>{{ trans('nas.'.$vars[9], [], $lan) }}</p>
        <img src="https://iph.href.lu/300x300" alt="">
        <p>{{ trans('nas.'.$vars[10], [], $lan) }}</p>
        <img src="https://iph.href.lu/300x300" alt="">
    </div>
@endsection
