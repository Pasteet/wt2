@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'px-4 py-4 font-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
@endif