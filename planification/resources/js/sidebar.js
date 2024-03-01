

$(".menuu > ul > li").click(function (e){
    // remove avtive from already active 
    $(this).siblings().removeClass("active");
    // add active to clicked
    $(this).toggleClass("active");
    // if has submenu open it
    $(this).find("ul").slideToggle();
    // close other sub menus if any open
    $(this).siblings().find("ul").slideUp();
    // remove active class of submenu items
    $(this).siblings().find("ul").find("li").removeClass("active");
});

$(".sub-formm").click(function (e){
    // remove avtive from already active 
    $(this).siblings().removeClass("block ");
    // add active to clicked
    $(this).toggleClass("block");
    // if has submenu open it
    $(this).find("ul").slideToggle();
    // close other sub menus if any open
    $(this).siblings().find("ul").slideUp();
    // remove active class of submenu items
    $(this).siblings().find("ul").find("li").removeClass("active");
});