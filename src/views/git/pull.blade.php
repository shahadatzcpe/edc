<div class="field has-addons">
    <p class="control">
        <a class="button is-static">composer pull</a>
    </p>
    <p class="control">
        <a class="button" id="git-pull">Git pull</a>
    </p>
</div>
@push('script.footer')

    jQuery('#git-pull').click(function(){
        terminal.run('git pull');
    });

@endpush