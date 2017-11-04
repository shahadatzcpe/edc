<div class="field has-addons">
    <p class="control">
        <a class="button is-static">git branch</a>
    </p>
    <p class="control">
        <a class="button" id="git-branch">Show branch</a>
    </p>
</div>
@push('script.footer')

    jQuery('#git-branch').click(function(){
        terminal.run('git branch');
    });

@endpush