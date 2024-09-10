@php
    $latestEntry = \App\Models\MailTemplate::latest()->firstOrFail()
@endphp

@if ($latestEntry)
    {!! $latestEntry->template !!}
@endif

