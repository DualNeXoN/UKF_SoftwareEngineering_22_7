<select class="form-select form-select-sm" onchange="location = this.value;" style="height: 100%">
    @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
        <option selected>{{$locale_name}}</option>
        @else
        <option value="/language/{{$available_locale}}">{{$locale_name}}</option>
        @endif
    @endforeach
</select>