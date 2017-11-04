<div class="field has-addons">
    <p class="control">
        <a class="button is-static">git status</a>
    </p>
    <p class="control">
        <a class="button" id="git-status">Git status</a>
    </p>
</div>
@push('script.footer')

    jQuery('#git-status').click(function(){
        terminal.run('git status');
    });

@endpush