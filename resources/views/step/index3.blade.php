@extends('layouts.app')

@section('content')
    <div class="twox">
        <div class="wrap">
            <div class="box1">
                <h1>{{ trans('nas.'.$vars[0], [], $lan) }}</h1>
            </div>
            <div class="box2">
                @if($img)
                    <img src="{{ asset($img)}}">
                @endif
            </div>
            <div class="box3">
                <table border="1">
                    <tbody>
                    <tr>
                        <td>{{ trans('nas.'.$vars[1], [], $lan) }}</td>
                        <td>{{ trans('nas.'.$vars[2], [], $lan) }}</td>
                    </tr>
                    <tr>
                        <td>{{ trans('nas.'.$vars[3], [], $lan) }}</td>
                        <td>
                            <table class="inner-table">
                                <tr>
                                    <td>{{ trans('nas.'.$vars[4], [], $lan) }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('nas.'.$vars[5], [], $lan) }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('nas.'.$vars[6], [], $lan) }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('nas.'.$vars[7], [], $lan) }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('nas.'.$vars[8], [], $lan) }}</td>
                        <td>
                            <table class="inner-table">
                                <tr>
                                    <td>{{ trans('nas.'.$vars[9], [], $lan) }}</td>
                                </tr>
                                <tr>
                                    <td>{{ trans('nas.'.$vars[10], [], $lan) }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ trans('nas.'.$vars[11], [], $lan) }}</td>
                        <td>{{ trans('nas.'.$vars[12], [], $lan) }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
