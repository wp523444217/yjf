/*!
 * @project : YY
 * @version : 1.0.0
 * @author  : vicky
 * @update  : 2014-10-22 06:35:15 PM
 */
!function(){$("a").focus(function(){$(this).blur()}),$(".subscribe-list li").mouseenter(function(){$(this).children(".btn-cancel").show()}),$(".exchange-list li").click(function(){$(this).addClass("selected").siblings().removeClass("selected")}),$(".mini-tab .mini-tab-hd a").click(function(){var tabInndex=$(this).index();$(this).addClass("selected").siblings().removeClass("selected").parent(".mini-tab-hd").next(".mini-tab-bd").children(".mini-content").eq(tabInndex).fadeIn("fast").siblings().fadeOut("fast")}),$(".btn-toggle").click(function(){$(this).toggleClass("btn-toggle-direction").parent(".mod-card-hd").toggleClass("current").next(".mod-card-bd").slideToggle("fast")}),$(".record tr:odd").css("background","#fff9e8"),$(".record tr:even").css("background","#fff"),$(".msg").hover(function(){$(this).children(".m-tit ").find(".delete").show()},function(){$(this).children(".m-tit ").find(".delete").hide()}),$(".more,.gift,.nickname-refresh").hover(function(){$(this).children(".tips ").show()},function(){$(this).children(".tips ").hide()}),$(".ow_more").mouseenter(function(){var tipsHeight=$(this).find(".tips").height();$(this).children(".tips").css("marginTop",-tipsHeight-20)}),$(".mini-q").hover(function(){$(this).children(".mini-tips ").show()},function(){$(this).children(".mini-tips ").hide()}),$(".subscribe-list li").hover(function(){$(this).children(".s-content").find(".btn-cancel").show()},function(){$(this).children(".s-content").find(".btn-cancel").hide()}),$(".sign-anchor").hover(function(){$(this).children(".hover-tips ").show()},function(){$(this).children(".hover-tips ").hide()}),$(".mod-o-msg .msg").hover(function(){$(this).children("a").show()},function(){$(this).children("a ").hide()}),$(".table-duty tr").hover(function(){$(this).css("background","#fffbf0")},function(){$(this).css("background","#fff")}),$(".mod-tab-trigger .set-sign").click(function(){$(".check-status").show().next(".my-status").hide()}),$(".mod-tab-trigger .my-sign,.mod-tab-trigger .history-sign").click(function(){$(".my-status").show().prev(".check-status").hide()}),$(".j_date li").click(function(){$(".set-sign").addClass("selected").siblings().removeClass("selected"),$(".check-status").show().siblings(".my-status").hide(),$(".j_date").show().siblings(".j_sign").hide()}),$(".selectBox").hover(function(){$(this).addClass("selectBoxHover")},function(){$(this).removeClass("selectBoxHover")}),$(".selectValue").click(function(){return $(this).blur(),$(".selectBoxOptions").show(),!1}),$(".selectBoxItem a").click(function(){$(this).blur();var value=$(this).attr("rel"),txt=$(this).text();$(".select").val(value),$(".select_text").val(txt),$(".selectValue").text(txt),$(".selectBoxItem a").removeClass("selected"),$(this).addClass("selected"),$(".selectBoxOptions").hide()}),$(document).click(function(event){"selectBox"!=$(event.target).attr("class")&&$(".selectBoxOptions").hide()}),$(".anchor-list").click(function(){$(".box-anchor").fadeIn("fast")}),$(".box-anchor .btn-close").click(function(){$(".box-anchor").fadeOut("fast")}),$(".anchor-pop-list").click(function(){$(this).parent(".form-group").next(".cont-wrap").slideToggle("fast")})}();