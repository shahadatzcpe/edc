<div class="field has-addons">
    <p class="control">
        <a class="button is-static">git remote -v</a>
    </p>
    <p class="control">
        <a class="button" id="git-remote-v">Check remote</a>
    </p>
</div>
@push('script.footer')

    jQuery('#git-remote-v').click(function(){
        terminal.run('git remote -v');
    });

@endpush