<div>
    <select name="{{ $name }}" class="{{ $class }}">
        @foreach ($countryList as $key => $country)
            <option value="{{ $key }}" @if($selected === $key) selected @endif>{{ $country }}</option>
        @endforeach
    </select>
</div>
