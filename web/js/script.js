$(function(){
    //alert('test');
    $("#btn-open").click(function(){
        $("#my-modal").modal("show")
                .find("#modal-content")
                .load($(this).attr("value"));
    });
});

