<!DOCTYPE html>
<html>

    @include('partials/languageSwitcher')

    {{ __('test/translationTest.yes') }}<br>
    {{ __('test/translationTest.no') }}<br>
    @if (isset($param))
        {{ trans_choice('test/translationTest.parameter', $param) }}
    @endif
    
</html>