@extends('layouts.layout')

@section('content')

<!-- Examples of using translations -->

{{ __('test/translationTest.yes') }}<br>
{{ __('test/translationTest.no') }}<br>
@if (isset($param)) <!-- Is parameter set? (see web.php) If yes, then include this translation -->
    {{ trans_choice('test/translationTest.parameter', $param) }}
@endif

@endsection