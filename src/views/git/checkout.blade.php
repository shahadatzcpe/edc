<div class="field has-addons">
    <p class="control">
        <a class="button is-static">git checkout </a>
    </p>
    <p class="control">
        <input class="input" type="text" placeholder="optional" id="git-branch-name">
    </p>
    <p class="control">
        <a class="button" id="git-checkout-b">Switch branch</a>
    </p>
</div>
@push('script.footer')

    jQuery('#git-checkout-b').click(function(){
        var branch_name = $('#git-branch-name').val();
        terminal.run('git checkout ' + branch_name);
    });

@endpush