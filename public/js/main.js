/**
 * Created by celio_000 on 25/01/2017.
 */

$(document).ready(function(){
    var flag = false;
    var scroll;
    $("#menu").css({"margin-top": "75px"});
    //$("#image").css({"margin-top": "10px", "width": "185px", "height": "75px"});
    $("#image").addClass('image');
    $("#top_home").css({"padding": "0px", "margin":"0px"});
    $("#topConteudo").css({"padding": "0px", "margin":"0px"});

    $(window).scroll(function(){
        scroll = $(window).scrollTop();
        if(scroll >=75) {
            if (!flag) {
                $("#image").css({"margin-top": "-10px", "width": "100px", "height": "40px"});
                flag = true;
            }
                $('#nav').addClass('navbar-fixed-top');
                $("#menu").css({"margin-top": "10px"});
                $("#top_home").css({"padding": "0px", "margin-top":"0px" });
                $("#slideHome").css({"padding": "0px", "margin-top":"85px" });
                $("#topConteudo").css({"padding": "0px", "margin-top":"85px"});
        }else{
            if(flag) {
                $('#nav').removeClass('navbar-fixed-top');
                $("#image").css({"margin-top": "10px", "width": "180px", "height": "70px"});
                //$("#image").addClass('image');
                flag = false;
            }
                $("#top_home").css({"padding": "0px", "margin":"0px"});
                $("#menu").css({"margin-top": "75px"});
                $("#slideHome").css({"padding": "0px", "margin-top":"0px" });
                $("#topConteudo").css({"padding": "0px", "margin":"0px"});
        }
    });
});


$(".abrirModal").click(function() {
    var url = $(this).find("img").attr("src");
    $("#myModal img").attr("src", url);
    $("#myModal").modal("show");
});