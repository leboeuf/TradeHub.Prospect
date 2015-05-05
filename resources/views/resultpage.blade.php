<div class="content-inner left">
	<div class="pure-g">
		<div class="pure-u-1-2">
			<div class="company-title">
				<h1>Apple Inc</h1>
				<h2>AAPL.O</h2>
			</div>
		</div>
		<div class="pure-u-1-2 right">
			@include('components.morningstar-rating', ['rating' => 4])
		</div>
	</div>

	<div class="pure-g">
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

	<hr/>

	<div class="pure-g">
		<div class="pure-u-1-4">
			@include('components.menu')
		</div>
		<div class="pure-u-3-4">
			asd
		</div>
	</div>

	{{-- <div class="pure-g">
		<div class="pure-u-2-3">
			<img src="http://finviz.com/chart.ashx?t=AAPL&ty=c&ta=1&p=d&s=l">
		</div>
		<div class="pure-u-1-3">
			asd
		</div>
	</div> --}}
</div>