function closePanel(e){$("."+e).toggle()}var ExpressOpen=0,CursosOpen=0,OnlineOpen=0;$(".cursosDrop").click(function(){1===ExpressOpen?(closePanel("expressDropdown"),$(".cusesDropdown").toggle(),CursosOpen=1,ExpressOpen=0):($(".cusesDropdown").slideToggle("slow"),CursosOpen=0===CursosOpen?1:0)}),$(".expressDrop").click(function(){1===CursosOpen?(closePanel("cusesDropdown"),$(".expressDropdown").toggle(),ExpressOpen=1,CursosOpen=0):($(".expressDropdown").slideToggle("slow"),ExpressOpen=0===ExpressOpen?1:0),console.log(ExpressOpen)}),$(document).ready(function(){$(function(){$(".oneMenu").stickyNavbar({activeClass:"active",sectionSelector:"scrollto",animDuration:250,startAt:0,easing:"linear",animateCSS:!0,animateCSSRepeat:!0,cssAnimation:"fadeInDown",jqueryEffects:!1,jqueryAnim:"slideDown",selector:"a",mobile:!1,mobileWidth:640,zindex:9999,stickyModeClass:"sticky",unstickyModeClass:"unsticky"})}),$(".equalBlog").matchHeight()}),jQuery("#main, #cursosSidebar").theiaStickySidebar({additionalMarginTop:80}),$(".oooBack").waypoint(function(){1===ExpressOpen&&($(".expressDropdown").toggle("slow"),ExpressOpen=0),1===CursosOpen&&($(".cusesDropdown").slideToggle("slow"),CursosOpen=0)},{offset:0});