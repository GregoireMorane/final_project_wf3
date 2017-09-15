$(function(){
    $(".ddList>a").click(function(){
        var thisUl = $(this).siblings('ul');
        $(".ddList>a").siblings('ul').not(thisUl).slideUp(500);
        thisUl.slideToggle(500);
    });
    
    $(".ddList2>a").click(function(){
        var thisLevel3ul = $(this).siblings('ul');
        $(".ddList2>a").siblings('ul').not(thisLevel3ul).slideUp(500);
        thisLevel3ul.slideToggle(500);
    });
    var arrowElem = "<img class='arrowRight' style='float:right; position:relative; left:5px;' src='https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-arrow-right-b-128.png' width='15' height='15'/>";
    $(".ddList>a, .ddList2>a").append(arrowElem);
    
    $('.ddList, .ddList2').each(function(){
        var len = $(this).find("ul").length;
        if(len==0) {
            $(this).children('a').children('.arrowRight').hide();
        }
    });

});