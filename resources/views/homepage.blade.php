@extends('layout.master')

@section('content')
<div class="center">
	<div class="screener-button"><a href="#" class="btn-screener">Screener</a></div>
	<div class="logo"><img src="/images/logo.png"></div>
	<div class="search">
		<form>
			<input type="text" placeholder="Search symbol or company" />
		</form>
	</div>
	<div class="content" style="display:none">
		<div class="ajax"><img src="/images/loading.gif" /></div>
	</div>
</div>
@stop