$(document).ready(function(){
    console.log($(document.getElementsByName("table")).length)
    $("table tr:odd").css({"background-color": "grey"});
});