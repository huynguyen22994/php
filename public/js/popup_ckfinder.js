$(document).ready(function () {
        $("#btn").click(function () {
            var finder = new CKFinder();
            finder.selectActionFunction = function (fileUrl) {
                $('#ImageUrl').val(fileUrl);
            };
            finder.popup();
        });
    });