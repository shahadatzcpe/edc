<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="edc-run-command-url" content="{{ route('command-run') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Easy development commands</title>
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
    <style type="text/css">
        #terminal{
            min-height: 400px;
            background-color: rgb(0, 0, 0);
            padding: 20px;
            color: #fff;
        }

        .wp100{
            width:100%;
        }
    </style>
    <script>
        @stack('script.header')
    </script>
</head>
<body>
<section class="section">
    <div class="container">
        <div class="tabs is-centered is-boxed terminal-switch">
            <ul>
                <li class="is-active" data-target="#raw-terminal">
                    <a>
                        <span class="icon is-small"><i class="fa fa-terminal"></i></span>
                        <span>Raw Terminal</span>
                    </a>
                </li>
                <li data-target="#git-command">
                    <a>
                        <span class="icon is-small"><i class="fa fa-git"></i></span>
                        <span>Git Command</span>
                    </a>
                </li>
                <li data-target="#database-command">
                    <a>
                        <span class="icon is-small"><i class="fa fa-database"></i></span>
                        <span>Database Command</span>
                    </a>
                </li>

                <li data-target="#composer-command">
                    <a>
                        <span class="icon is-small"><i class="fa fa-flag"></i></span>
                        <span>Composer Command</span>
                    </a>
                </li>

                <li data-target="#easy-setup-command">
                    <a>
                        <span class="icon is-small"><i class="fa fa-flag"></i></span>
                        <span>Easy Setup Command</span>
                    </a>
                </li>

                <li data-target="#help">
                    <a>
                        <span class="icon is-small"><i class="fa fa-question"></i></span>
                        <span>Help</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="terminal-tab-content">
            <div id="database-command" style="display:none;" class="columns">
                <div class="column">
                    <h1 class="title">Basic database operation</h1>
                    @include('edc::database.check-migration-status')
                    @include('edc::database.migrate-now')
                    @include('edc::database.seed-database')
                </div>

                <div class="column">
                    <h1 class="title">Migration command</h1>
                    @include('edc::database.run-migrateion-parameterized')

                    <h1 class="title">Seed command</h1>
                    @include('edc::database.run-seed-command')
                </div>
            </div>

            <div id="composer-command" style="display:none;" class="columns">
                <div class="column">
                    <h1 class="title">Composer commands</h1>
                    @include('edc::composer.dump')
                    @include('edc::composer.install')
                    @include('edc::composer.update')
                </div>

                <div class="column">
                    <h1 class="title">Custom composer command</h1>
                    @include('edc::composer.run')
                    @include('edc::composer.require')
                </div>
            </div>

            <div id="git-command" style="display:none;" class="columns">
                <div class="column">
                    <h1 class="title">Basic Git Commands</h1>
                    @include('edc::git.show-remote')
                    @include('edc::git.fetch')
                    @include('edc::git.branch')
                    @include('edc::git.status')
                    @include('edc::git.pull')
                    @include('edc::git.checkout')
                </div>

                <div class="column">
                    <h1 class="title">Custom Git command</h1>
                    @include('edc::git.common')
                    @include('edc::git.run')
                </div>
            </div>

            <div id="raw-terminal"  class="columns">
                <div class="column">
                    <h1 class="title">Raw Terminal Command</h1>
                    @include('edc::raw.terminal')
                </div>
                <div class="column">
                    <h1 class="title">Raw Artisan Command</h1>
                    @include('edc::raw.artisan')
                </div>
            </div>

            <div id="easy-setup-command" style="display:none;" class="columns">
                @include('edc::easy-setup-command')
            </div>

            <div id="help" style="display:none;" class="columns">
                @include('edc::help')
            </div>
        </div>

        <div class="terminal-output">
            <textarea class="textarea" id="terminal" placeholder="" disabled>=></textarea>
        </div>
    </div>
</section>
</body>
<script type="text/javascript">

    var terminal = {
        selector : "#terminal",
        is_running : false,
        command_queue: [],
        update : function(content)
        {
            jQuery(this.selector).append(content);
            jQuery(this.selector).scrollTop($(this.selector)[0].scrollHeight);
        },
        run : function (command) {

            if(this.is_running)
            {
                console.log('Another command is running. "'+command+'" will be run after finishing running command.');
                this.command_queue.push(command);
                return true;
            }

            this.is_running = true;

            terminal.update( command + "\n");

            jQuery.ajax({
                url :  $('meta[name="edc-run-command-url"]').attr('content'),
                method : 'POST',
                data : {
                    command : command,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success : function(response)
                {
                    terminal.update(response + "=>");
                    terminal.is_running = false;
                    terminal.next();
                },
                error : function()
                {
                    alert('Something wrong...');
                    terminal.is_running = false;
                    terminal.next();
                }
            });
        },
        next : function(){
            var command = this.command_queue.shift();

            if(command)
                terminal.run(command);

        },
    };


    $('.terminal-switch li').click(function(){
       var target = $(this).data('target');
       $('.terminal-switch li').removeClass('is-active');
       $(this).addClass('is-active');
       $('.terminal-tab-content .columns').hide();
       $(target).show();
    });

    @stack('script.footer')

</script>
</html>