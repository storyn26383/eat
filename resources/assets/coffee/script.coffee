$ ->
    $ '[data-target=datetimepicker]'
        .datetimepicker
            # debug: true
            icons:
                time: 'fa fa-clock-o'
                date: 'fa fa-calendar'
                up: 'fa fa-chevron-up'
                down: 'fa fa-chevron-down'
                previous: 'fa fa-chevron-left'
                next: 'fa fa-chevron-right'
            # showClose: true
            # sideBySide: true
            ignoreReadonly: true
            allowInputToggle: true
            toolbarPlacement: 'bottom'
            format: 'YYYY-MM-DD HH:mm'

    $ '[data-method=DELETE]'
        .click (e) ->
            noty
                theme: 'relax'
                type: 'confirm'
                layout: 'center'
                modal: true
                text: '<h4>您真的要刪除嗎？</h4>'
                animation:
                    open: 'animated bounceInDown'
                    close: 'animated bounceOutUp'
                buttons:
                    [
                        text: '返回'
                        addClass: 'btn btn-default'
                        onClick: ($noty) ->
                            $noty.close()
                    ,
                        text: '刪除'
                        addClass: 'btn btn-danger'
                        onClick: ($noty) =>
                            token = $('meta[name="csrf-token"]').attr 'content'

                            $('<form action="' + @href + '" method="POST">')
                                .hide()
                                .append '<input type="hidden" name="_method" value="DELETE">'
                                .append '<input type="hidden" name="_token" value="' + token + '">'
                                .appendTo $('body')
                                .submit()
                    ]

            e.preventDefault()