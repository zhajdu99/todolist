const beforetag = "<div class='row'><button class='todouncheck '><span class='material-symbols-outlined font-black'>radio_button_unchecked</span></button><button class='todocheck hidden'><span class='material-symbols-outlined font-black'>radio_button_checked</span></button><p>";
const aftertag = "</p><button class='deltoggle'><span class='material-symbols-outlined font-red'>delete</span></button></div>";

$(document).ready(function() {
    $("#navopentoggle").click(function() {
        $("#navbar").slideToggle("slow");
    });

    $("#navbar").click(function() {
        $("#navbar").hide("slow");
    });

    $(".notepad").on("click", ".deltoggle", function(){
    	$(this).parent().remove();
  	});

    $("#newtaskbtn").click(function(){
        $(".newtask").before(beforetag+$("input").val()+aftertag);
        $("input").val("");
    });

    $(".todocheck").click(function() {
        $("#navbar").hide("slow");
    });

    $(".todouncheck").click(function() {
        $("#navbar").hide("slow");
    });

    $(".notepad").on("click", ".todouncheck", function(){
    	$(this).siblings("p").addClass("cross");
        $(this).hide();
        $(this).siblings(".todocheck").show();
  	});

    $(".notepad").on("click", ".todocheck", function(){
    	$(this).siblings("p").removeClass("cross");
        $(this).hide();
        $(this).siblings(".todouncheck").show();
  	});
});