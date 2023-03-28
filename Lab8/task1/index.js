// Part a
$(document).ready(function (){
    $("#msg").hide();
    $("#btn").click(function(){
        $("#msg").toggle();
    });
});

// Part b
$(document).ready(function (){
    var txtnum = 1;
    $("input").click(function(){
        // console.log("HEHEHE");
        console.log(txtnum);
        $("#txtBox"+txtnum).css("background-color", "yellow");
        txtnum =txtnum+ 1;
        $("#txtBox"+txtnum-1).css("background-color", "white");
        console.log(txtnum-1);
    });
});

// Part c
$(document).ready(function (){
    var bx1 = $(".box1").attr("style");
    var bx2 = $(".box2").attr("style");
    $(btnSwitch).click(function (){
        $(".box1").attr("style",bx2).toggleClass("box2");
        $(".box2").attr("style",bx1).toggleClass("box1");
    });
});