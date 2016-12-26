
var choreId;

$('#todoList ul').sortable({
    items: "li:not('.listTitle, .addItem')",
    connectWith: "ul",
    dropOnEmpty: true,
    placeholder: "emptySpace"
});

$('input').keydown(function(e){
    if(e.keyCode == 13)
    {
        var value= $(this).val();
        var day= $(this).data('day');


        $.ajax({
            type: "POST",
            url: "actions.php?action=postTodo",
            data: "todo=" + value +
            "&day=" + day,
            success: function (result) {

                if ($.isNumeric(result)) {
                    $("input[data-day='" + day + "']").parent().parent().append('<li>' + value + '<a href="#" class="info" data-toggle="modal" data-target="#infoModal" data-id="' + result + '"> info</a></li>');
                    $("input[data-day='" + day + "']").val('');

                    alert(result)
                }
                else {
                    alert(result);
                }
            }
        });

    }
});
$("#trash").droppable({
    drop: function(event, ui){
        ui.draggable.remove();
    }
})

$(document).on('click', '.info', function () {

    var id= $(this).data('id');
    var name= $(this).data('name');

    choreId=id;

    $.ajax({
        type: "POST",
        url: "actions.php?action=getInfo",
        data:"id="+ id,
        success: function(result) {

            var chore=JSON.parse(result);

            $("#myModalLabel").html(chore[0]);
            $("#message-text").val(chore[1]);

        }
    })
})
$(document).on('click', '#saveChanges', function(){
alert("tuki smo");
    $.ajax({
        type: "POST",
        url: "actions.php?action=saveChanges",
        data: "msg=" + $("#message-text").val() +
        "&id=" + choreId,
        success: function(result){

            alert("tuki smo");
            if(result == "1")
            {
                window.location.assign("index.php");
            }
            else
            {
                $("#error").html(result).show();
            }

        }

    })

})
