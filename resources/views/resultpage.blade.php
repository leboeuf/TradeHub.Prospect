<div class="content-inner">
	<div class="pure-g left">
		<div class="pure-u-1-4"><h1>AAPL</h1></div>
		<div class="pure-u-1-4">b</div>
		<div class="pure-u-1-4">c</div>
		<div class="pure-u-1-4">d</div>
	</div>

	<div class="pure-g left">
		<div class="pure-u-1-5">
			@include('components.datasquare-small', ['title' => 'Quote', 'subtitle' => 'Last: May 6 11:42:49', 'data' => '41.64', 'class' => 'green'])
		</div>
		<div class="pure-u-1-5">
			@include('components.datasquare-small', ['title' => 'Change', 'subtitle' => '&nbsp;', 'data' => '-1.51 (-3.50%)', 'class' => 'red'])
		</div>
		<div class="pure-u-1-5">
			@include('components.datasquare-small', ['title' => 'Open', 'subtitle' => 'Prev close: 42.88', 'data' => '42.77', 'class' => ''])
		</div>
		<div class="pure-u-1-5">
			@include('components.datasquare-small', ['title' => 'Range', 'subtitle' => '&nbsp;', 'data' => '41.54 - 42.82', 'class' => ''])
		</div>
		<div class="pure-u-1-5">
			@include('components.datasquare-small', ['title' => 'Volume', 'subtitle' => 'Avg: 130 538 391', 'data' => '123 456 789', 'class' => ''])
		</div>
	</div>
</div>