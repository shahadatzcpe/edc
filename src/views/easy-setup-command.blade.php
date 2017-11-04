

<div class="column">
    @foreach($config['setup_commands'] as $group => $setup_command)
        <div class="box">
            <h1 class="title">{{ $setup_command['title'] }}</h1>
            <code>
                @foreach($setup_command['commands'] as $command)
                    {{ $command }}<br>
                @endforeach
            </code>
            <button data-group="{{ $group }}" class="button run-setup-command is-link">Run this setup command</button>
        </div>
    @endforeach
</div>

@push('script.footer')

    function run_command_list(group)
    {

    }


    $('.run-setup-command').click(function(){
        var group = $(this).data('group');
        var command_list_group = {!! json_encode( $config['setup_commands'], JSON_PRETTY_PRINT)  !!} ;

        for(i = 0; i < command_list_group[group].commands.length; i++)
        {
            terminal.run(command_list_group[group].commands[i]);
        }
    });

@endpush