@props(['name', 'placeholder' => '', 'label' => '', 'type' => 'text', 'value' => old($name)])
<div class="mb-3">
    @if ($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endif
    <input {{ $attributes }} type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
        placeholder="{{ $placeholder }}" class="form-control @error($name) is-invalid @enderror"
        value="{{ $value }}">
    @if ($type == 'file' && $name == 'image' && $value)
        <img width="100" id="prev" class="img-thumbnail mt-1" src="{{ asset($value) }}" alt="">
    @endif
    @error($name)
        <small class="invalid-feedback">{{ $message }}</small>
    @enderror
</div>
