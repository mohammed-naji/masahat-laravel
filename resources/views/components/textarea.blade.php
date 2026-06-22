@props(['name', 'placeholder' => '', 'label' => '', 'rows' => 4])
<div class="mb-3">
    @if ($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endif
    <textarea {{ $attributes }} id="{{ $name }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
        class="form-control @error($name) is-invalid @enderror" rows="{{ $rows }}">{{ old($name) }}</textarea>
    @error($name)
        <small class="invalid-feedback">{{ $message }}</small>
    @enderror
</div>
