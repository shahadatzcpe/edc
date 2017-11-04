<div class="field has-addons">
    <p class="control">
        <a class="button is-static">git fetch</a>
    </p>
    <p class="control">
        <a class="button" id="git-fetch">Fetch</a>
    </p>
</div>
@push('script.footer')

    jQuery('#git-fetch').click(function(){
        terminal.run('git fetch');
    });

@endpush