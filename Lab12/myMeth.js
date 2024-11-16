$(document).ready(function () {
    // Change form method based on radio button selection
    $("input[type=radio]").change(function () {
        var method = $(this).val();
        $("#form").attr("method", method); // Assigns Method Type From Radio Button
    });

    // Validate form before submission
    $("#submit").click(function () {
        var name = $("#name").val();
        var age = $("#age").val();
        var method = $("input[name='meth']:checked").val();

        if (!name || !age || !method) {
            alert("Please fill in all fields and select a method.");
            return false; // Prevents form submission
        }

        return true; // Allows form submission
    });
});
