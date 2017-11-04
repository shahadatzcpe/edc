<div class="field has-addons">
    <p class="control">
        <a class="button is-static">php artisan </a>
    </p>
    <p class="control wp100">
        <input class="input" type="text" placeholder="optional" id="artisan-optional">
    </p>
    <p class="control">
        <a class="button" id="artisan-run">Run Command</a>
    </p>
</div>
@push('script.footer')

    jQuery('#artisan-run').click(function(){
        var optional = $('#artisan-optional').val();
        terminal.run('php artisan ' + optional);
    });

@endpush