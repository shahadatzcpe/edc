<div class="field has-addons">
    <p class="control">
        <a class="button is-static">
            php artisan db:seed
        </a>
    </p>
    <p class="control">
        <a class="button" id="seed-now">
            Seed Database
        </a>
    </p>
</div>

@push('script.footer')
    jQuery('#seed-now').click(function(){
         terminal.run('php artisan db:seed');
    });
@endpush