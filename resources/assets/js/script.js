(function(){$(function(){return $("[data-target=datetimepicker]").datetimepicker({icons:{time:"fa fa-clock-o",date:"fa fa-calendar",up:"fa fa-chevron-up",down:"fa fa-chevron-down",previous:"fa fa-chevron-left",next:"fa fa-chevron-right"},ignoreReadonly:!0,allowInputToggle:!0,toolbarPlacement:"bottom",format:"YYYY-MM-DD HH:mm"}),$("[data-method=DELETE]").click(function(t){return noty({theme:"relax",type:"confirm",layout:"center",modal:!0,text:"<h4>您真的要刪除嗎？</h4>",animation:{open:"animated bounceInDown",close:"animated bounceOutUp"},buttons:[{text:"返回",addClass:"btn btn-default",onClick:function(t){return t.close()}},{text:"刪除",addClass:"btn btn-danger",onClick:function(t){return function(e){var n;return n=$('meta[name="csrf-token"]').attr("content"),$('<form action="'+t.href+'" method="POST">').hide().append('<input type="hidden" name="_method" value="DELETE">').append('<input type="hidden" name="_token" value="'+n+'">').appendTo($("body")).submit()}}(this)}]}),t.preventDefault()})})}).call(this);