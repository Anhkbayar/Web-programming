$(document).ready(function () {
    $("input[type=radio]").change(function () {
        var method = $(this).val();
        $("#form").attr("method", method); //methodiig damjuulna
    });

    // Submit hiihees umnu shalgana
    //false bol tsaashaa damjuulahgui
    $("#submit").click(function () {
        var name = $("#name").val();
        var age = $("#age").val();
        var method = $("input[name='meth']:checked").val();
        if (!method) {
            alert("Select a method");
            return false;
        }
        if (!name || !age) {
            alert("Fill in the form");
            return false; 
        }

        return true; 
    });
});
