@props(['name', 'placeholder' => '', 'label' => '', 'type' => 'text'])
<div class="mb-3">
    @if ($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endif
    <input {{ $attributes }} type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
        placeholder="{{ $placeholder }}" class="form-control @error($name) is-invalid @enderror"
        value="{{ old($name) }}">
    @error($name)
        <small class="invalid-feedback">{{ $message }}</small>
    @enderror
</div>
