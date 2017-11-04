<div class="field has-addons">
    <p class="control wp100">
        <input class="input" type="text" placeholder="optional" id="terminal-optional">
    </p>
    <p class="control">
        <a class="button" id="terminal-run">Run Command</a>
    </p>
</div>
@push('script.footer')

    jQuery('#terminal-run').click(function(){
        var optional = $('#terminal-optional').val();
        terminal.run( optional);
    });

@endpush