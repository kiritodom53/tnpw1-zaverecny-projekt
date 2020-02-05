$(document).ready(function(){

    // Vypnutí hover menu pro weby bez podpory JS
    document.getElementById("nav2").style.display = "none";
    // Zapnutí js menu pro weby s podporou JS
    document.getElementById("menu1").style.display = "block";

    // Otevření menu pro menu na mobilu */
    $(".menu-mobile").click(function() {
        //$("div.wrap").slideToggle();

        var visible = $(this).find("div.sub-item:visible").length;

        if(visible == false){
            $("div.sub-item").slideUp();
            $(this).find(".sub-item").slideDown();
        }else{
            $("div.sub-item").slideUp();
        }

        $('html, body').animate({scrollTop:0}, 'slow');
        //return false;
    });

    // Menu
    $("div.pre-item").click(function() {
        // Zjistí zda kliknutý tag je visible nebo ne
        var visible = $(this).find("div.sub-item:visible").length;

        if(visible == false){
            $("div.sub-item").slideUp();
            $(this).find(".sub-item").slideDown();
        }else{
            $("div.sub-item").slideUp();
        }
    });
});