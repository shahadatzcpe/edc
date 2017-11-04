<div class="field has-addons">
    <p class="control">
        <a class="button is-static">composer dump</a>
    </p>
    <p class="control">
        <a class="button" id="composer-dump">Composer Dump</a>
    </p>
</div>
@push('script.footer')

    jQuery('#composer-dump').click(function(){
        terminal.run('composer dump');
    });

@endpush