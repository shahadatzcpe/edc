<div class="field has-addons">
    <p class="control">
        <a class="button is-static">composer install</a>
    </p>
    <p class="control">
        <a class="button" id="composer-install">Composer Install</a>
    </p>
</div>
@push('script.footer')

    jQuery('#composer-install').click(function(){
        terminal.run('composer install');
    });

@endpush