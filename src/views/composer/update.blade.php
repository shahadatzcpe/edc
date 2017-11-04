<div class="field has-addons">
    <p class="control">
        <a class="button is-static">composer update</a>
    </p>
    <p class="control">
        <a class="button" id="composer-update">Composer Update</a>
    </p>
</div>
@push('script.footer')

    jQuery('#composer-update').click(function(){
        terminal.run('composer update');
    });

@endpush