<div class="field has-addons" style="width:100%;">
    <p class="control">
        <a class="button is-static">git</a>
    </p>
    <p class="control wp100">
        <input class="input" type="text" placeholder="optional" id="git-param">
    </p>
    <p class="control">
        <a class="button" id="git-run">Run Command</a>
    </p>
</div>
@push('script.footer')

    jQuery('#git-run').click(function(){
        var param = $('#git-param').val();
        terminal.run('git '+param);
    });

@endpush