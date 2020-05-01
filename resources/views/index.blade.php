<h1>{{ config('demo.name') }}</h1>
<h1>@lang('demo.name')</h1>
<h2>Demo Package</h2>

@if(isset($nama))
	<h1>Hii, {{ $nama }}</h1>
@endif