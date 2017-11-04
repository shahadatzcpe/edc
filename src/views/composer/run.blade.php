<div class="field has-addons">
    <p class="control">
        <a class="button is-static">composer</a>
    </p>
    <p class="control wp100">
        <input class="input" type="text" placeholder="optional" id="composer-param">
    </p>
    <p class="control">
        <a class="button" id="run-composer-command">Run Command</a>
    </p>
</div>

@push('script.footer')
    $('#run-composer-command').click(function(){
        var option = $('#composer-param').val();

        terminal.run('composer ' + option );
    });
@endpush