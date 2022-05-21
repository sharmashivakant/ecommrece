<div>
    <select name="city" class="{{ $class }}">
    @foreach ($cities as $key => $state)
        <option value="{{ $key }}" @if($key == $selected) selected @endif>{{ $state }}</option>
    @endforeach
    </select>
</div>
