<section id="linktodoneworks" class="">

   

	<div class="row">
		<div class="col-lg-12 text-center">
			<div class="navy-line">&nbsp;</div>

			<h1>Done works<br />
			<span class="navy">with many custom components</span></h1>

			<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
		</div>
	</div>
	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
		@foreach(\App\Group::find(24)->mediachilds()->where('language',__('front.lang'))->get() as $donework)
				{{--->where('language',__('front.lang'))->get()--}}

				<div class="col-md-3">
					<div class="ibox">
						<div class="ibox-content product-box">
						<div class="product-imitation" style="background: url({{asset('upload/'.$donework->mediasrc)}});background-size: cover;"></div>

							<div class="product-desc"><span class="product-price">{{$donework->headline}} </span>
								<a class="product-name" href="{{$donework->hyperlink}}"> {{$donework->title}}</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
	    </div>
	</div>
</section>


