<section id="linktocontact" class="gray-section contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>@lang('front.contactus')</h1>

            </div>
        </div>
        {!! \App\Group::find(25)->contentchilds()->where('language',__('front.lang'))->first()->body !!}
        {{--<div class="row m-b-lg">--}}
            {{--<div class="col-lg-3 col-lg-offset-3">--}}
                {{--<address>--}}
                    {{--<strong><span class="navy">Company name, Inc.</span></strong><br/>--}}
                    {{--795 Folsom Ave, Suite 600<br/>--}}
                    {{--San Francisco, CA 94107<br/>--}}
                    {{--<abbr title="Phone">P:</abbr> (123) 456-7890--}}
                {{--</address>--}}
            {{--</div>--}}
            {{--<div class="col-lg-4">--}}
                {{--<p class="text-color">--}}
                    {{--Consectetur adipisicing elit. Aut eaque, totam corporis laboriosam veritatis quis ad perspiciatis, totam corporis laboriosam veritatis, consectetur adipisicing elit quos non quis ad perspiciatis, totam corporis ea,--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="mailto:info@bitsoft.mn" class="btn btn-primary">@lang('front.sendmail')</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p><strong>&copy; 2015 Company Name</strong><br/> consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>