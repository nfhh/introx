@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="box">
            <h1>{{ trans('nas.'.$vars[0], [], $lan) }}</h1>
            <table border="1">
                <tbody>
                <tr>
                    <td>{{ trans('nas.'.$vars[1], [], $lan) }}</td>
                    <td>{{ trans('nas.'.$vars[2], [], $lan) }}({{ trans('nas.'.$vars[3], [], $lan) }})</td>
                </tr>
                <tr>
                    <td>{{ trans('nas.'.$vars[4], [], $lan) }}</td>
                    <td>{{ trans('nas.'.$vars[5], [], $lan) }}</td>
                </tr>
                <tr>
                    <td>{{ trans('nas.'.$vars[6], [], $lan) }}</td>
                    <td>{{ trans('nas.'.$vars[7], [], $lan) }}</td>
                </tr>
                <tr>
                    <td>{{ trans('nas.'.$vars[8], [], $lan) }}</td>
                    <td>{{ trans('nas.'.$vars[9], [], $lan) }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection