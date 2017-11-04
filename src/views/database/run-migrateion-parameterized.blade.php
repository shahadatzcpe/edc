<div class="field has-addons">
    <p class="control">
        <a class="button is-static">php artisan migrate:</a>
    </p>
    <p class="control ">
                        <span class="select">
                          <select id="run-migration-command-option">
                            <option value=":fresh">fresh</option>
                            <option value=":install">install</option>
                            <option value=":refresh">refresh</option>
                            <option value=":reset">reset</option>
                            <option value=":rollback">rollback</option>
                            <option value=":status">status</option>
                          </select>
                        </span>
    </p>
    <p class="control wp100">
        <input class="input" type="text" placeholder="optional" id="run-migration-command-value">
    </p>
    <p class="control">
        <a class="button" id="run-migration-command">Run Command</a>
    </p>
</div>

@push('script.footer')
    $('#run-migration-command').click(function(){
        var option = $('#run-migration-command-option').val();
        var value = $('#run-migration-command-value').val();
        terminal.run('php artisan migrate' + option + ' ' + value);
    });
@endpush