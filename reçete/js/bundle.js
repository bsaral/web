this.vbox = function() {
    $(".vbox").unbind().click(
        function(e) {
            var this_id = $(this).attr("id");
            var div = "div#" + this_id;
            var item = $(div).css("display");
            (item == "none") ? $(div).show() : $(div).hide();
        }
    );
};

$(function(){
    vbox();
});


