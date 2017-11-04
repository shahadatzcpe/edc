<div class="field has-addons">
    <p class="control">
        <a class="button is-static">php artisan db:seed</a>
    </p>
    <p class="control wp100">
        <input class="input" type="text" placeholder="optional" id="run-command-db-seed-optional">
    </p>
    <p class="control">
        <a class="button" id="run-command-db-seed">Run Command</a>
    </p>
</div>

@push('script.footer')
    $('#run-command-db-seed').click(function(){
        var optional = $('#run-command-db-seed-optional').val();
        terminal.run('php artisan db:seed ' + optional);
    });
@endpush