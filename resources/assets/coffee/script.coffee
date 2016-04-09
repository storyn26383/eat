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
