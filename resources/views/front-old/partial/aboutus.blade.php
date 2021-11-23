

<section id="linktoaboutus" class="container features">
    {!! \App\Group::find(26)->contentchilds()->where('language',__('front.lang'))->first()->body !!}
</section>
