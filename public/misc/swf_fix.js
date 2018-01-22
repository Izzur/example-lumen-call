$(document).ready(function () {
    var modal = '<div id="myModal" class="modal"><div class="modal-content"><span class="close">&times;</span><p>Some text in the Modal..</p></div></div>';
    var swfRegex = new RegExp('\.swf');
    $("body").append(modal);    
    $("a").click(function (event) {
        var href = $(this).attr("href")
        if (swfRegex.test(href)) {
            event.preventDefault();
            console.log(href);
            $(".modal-content").children().last().remove();
            $(".modal-content").append('<object><embed src="'+href+'" width="100%" height="100%"></embed></object>');
            $(".modal").css("display", "block");
        } else {
            console.log("normal link");
        }
    });
    $(".close").click(function() {
        $(".modal").css("display", "none");        
    });
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});