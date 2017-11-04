<div class="field has-addons">
    <p class="control">
        <a class="button is-static">php artisan migrate</a>
    </p>
    <p class="control">
        <a class="button" id="migrate-now">Migrate Now</a>
    </p>
</div>

@push('script.footer')
    jQuery('#migrate-now').click(function(){
        terminal.run('php artisan migrate');
    });
@endpush