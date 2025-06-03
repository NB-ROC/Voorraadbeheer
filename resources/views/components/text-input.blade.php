@props(['disabled' => false, 'placeholder' => ''])

<input @disabled($disabled) {{ $attributes->merge(['placeholder' => $placeholder]) }}>
