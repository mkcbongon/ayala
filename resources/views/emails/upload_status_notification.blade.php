# Property Inquiries

@if(isset($message))
<p style="font-weight: bold;">{{ $message }}</p>
@endif

<p><b>Status:</b> {{ $upload->status }}</p>
