<div class="field has-addons">
    <p class="control">
        <a class="button is-static">php artisan migrate:status</a>
    </p>
    <p class="control">
        <a class="button" id="check-migration-status">Check Status</a>
    </p>
</div>
@push('script.footer')

    jQuery('#check-migration-status').click(function(){
        terminal.run('php artisan migrate:status');
    });

@endpush