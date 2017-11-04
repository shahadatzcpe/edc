<div class="field has-addons">
    <p class="control">
        <a class="button is-static">composer require </a>
    </p>
    <p class="control wp100">
        <input class="input" type="text" placeholder="optional" id="composer-require-param">
    </p>
    <p class="control">
        <a class="button" id="run-composer-require-command">Run Command</a>
    </p>
</div>

@push('script.footer')
    $('#run-composer-require-command').click(function(){
        var option = $('#composer-require-param').val();

        if(!option)
        {
            alert('Invalid command');
            return;
        }

        terminal.run('composer require ' + option );
    });
@endpush