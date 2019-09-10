@extends('layouts.master')

@section('nav')
@include('partials.nav')
@endsection


@section('content')
<!-- Introduction -->
<section id="intro" class="main">
	<div class="spotlight">
		<div class="content">
			<header class="major">
				<h2>Ipsum sed adipiscing</h2>
			</header>
			<p>Sed lorem ipsum dolor sit amet nullam consequat feugiat consequat magna
			adipiscing magna etiam amet veroeros. Lorem ipsum dolor tempus sit cursus.
			Tempus nisl et nullam lorem ipsum dolor sit amet aliquam.</p>
			<ul class="actions">
				<li><a href="generic.html" class="button">Learn More</a></li>
			</ul>
		</div>
	</div>
</section>


<!-- Get Started -->
<section id="pro" class="main special">
	<header class="major">
		<h2>Search Here</h2>
	</header>
	<footer class="major text-center">
			<form method="post" action="#">
					<div class="row gtr-uniform">
						<div class="col-12 col-12-xsmall">
							<input type="text" name="demo-name" id="demo-name" value="" placeholder="Search here. . ." />
						</div>
						<div class="col-12">
							<ul class="actions">
								<li><input type="submit" value="Search" class="primary" /></li>
								<li><input type="reset" value="Reset" /></li>
							</ul>
						</div>
					</div>
				</form>
	</footer>
</section>
@endsection

@section('footer')
@include('partials.footer')
@endsection

@section('scripts')
@include('partials.scripts')
@endsection