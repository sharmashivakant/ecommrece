<div>
    <select name="state" class="{{ $class }}">
    @foreach ($states as $key => $state)
        <option value="{{ $key }}" @if($key == $selected) selected @endif>{{ $state }}</option>
    @endforeach
    </select>
</div>
