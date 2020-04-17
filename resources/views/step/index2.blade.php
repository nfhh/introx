@extends('layouts.app')

@section('content')
    <div class="twox">
        <div class="wrap">
            <div class="box1">
                <p>{{ trans('nas.'.$vars[0], [], $lan) }}</p>
            </div>
            <div class="box2">
                @if($img)
                    <img src="{{ asset($img)}}">
                @endif
            </div>
            <div class="box3">
                <div class="inline-box">
                    <div class="first">{{ trans('nas.'.$vars[1], [], $lan) }}</div>
                    <div class="second">
                        ×1
                    </div>
                </div>
                <div class="inline-box">
                    <div class="first">{{ trans('nas.'.$vars[2], [], $lan) }}</div>
                    <div class="second">
                        ×1
                    </div>
                </div>
                <div class="inline-box">
                    <div class="first">{{ trans('nas.'.$vars[3], [], $lan) }}</div>
                    <div class="second">
                        ×1
                    </div>
                </div>
                <div class="inline-box">
                    <div class="first">{{ trans('nas.'.$vars[4], [], $lan) }}</div>
                    <div class="second">
                        ×1
                    </div>
                </div>
                <div class="inline-box">
                    <div class="first">{{ trans('nas.'.$vars[5], [], $lan) }}</div>
                    <div class="second">
                        ×1
                    </div>
                </div>
                <div class="inline-box">
                    <div class="first">{{ trans('nas.'.$vars[6], [], $lan) }}</div>
                    <div class="second">
                        ×1
                    </div>
                </div>
                <div class="inline-box">
                    <div class="first">{{ trans('nas.'.$vars[7], [], $lan) }}</div>
                    <div class="second">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
