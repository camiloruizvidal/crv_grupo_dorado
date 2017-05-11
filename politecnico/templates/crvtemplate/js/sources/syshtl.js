jQuery(document).ready(function(){
        jQuery('.parent').addClass('dropdown');
        jQuery('.parent > a').addClass('dropdown-toggle');
        jQuery('.parent > a').attr('data-toggle', 'dropdown');
        jQuery('.nav > .parent > a').attr('href','#');
        jQuery('.parent > a').append('<span class="caret"></span>');
        jQuery('.parent > ul').addClass('dropdown-menu');
        jQuery('.nav-child .parent').removeClass('dropdown');
        jQuery('.nav-child .parent').addClass('dropdown-submenu');
        jQuery('.dropdown-submenu > a').removeAttr('class');
        jQuery('.dropdown-submenu > a').removeAttr('data-toggle', 'dropdown');
        jQuery('.dropdown-submenu > a > span').remove();
    });
function Renderhtml(ventana_ancho)
{
    var html = '';
    var size_div = ($('#imagenes').position().top + $('#sliders img').height()) + 'px';
    if (ventana_ancho < 992)
    {
        html = html + '<div class="col-xs-2" id="nav_img_logo">';
        html = html + '<img src="'+url_fil+'img/Logo.jpg" style="height: 30px; width: auto;"><br/>';
        html = html + '<a href="#" data-toggle="modal" data-target="#myModal">';
        html = html + '<img id="icon_icontec" style="height: 30px; width: auto;" src="'+url_fil+'img/icons/icontec.png">';
        html = html + '</a>';
        html = html + '</div>';
        html = html + '<div class="col-md-10" id="nav_frase">';
        html = html + '<span id="name">POLITECNICO LATINOAMERICANO DEL NORTE</span><br/>';
        html = html + '<span id="frase">Nunca fue tan facil triunfar</span>';
        html = html + '</div>';
        $('#items').css('top', size_div);
    }
    if (ventana_ancho >= 992)
    {
        size_div = ($('#imagenes').position().top + $('#sliders img').height() - 70) + 'px';
        $('#items').css('top', size_div);
        html = html + '<div class="col-md-3" id="nav_img_logo">';
        html = html + '<img src="'+url_fil+'img/Logo.jpg" style="width: 80px;">';
        html = html + '</div>';
        html = html + '<div class="col-md-8" id="nav_frase">';
        html = html + '<span id="name">POLITECNICO LATINOAMERICANO DEL NORTE</span><br/>';
        html = html + '<span id="frase">Nunca fue tan facil triunfar</span>';
        html = html + '</div>';
        html = html + '<div class="col-md-1" id="nav_img_icontec">';
        html = html + '<a href="#" data-toggle="modal" data-target="#myModal">';
        html = html + '<img id="icon_icontec" src="'+url_fil+'img/icons/icontec.png">';
        html = html + '</a>';
        html = html + '</div>';
    }
	$('#content').css('top',(parseInt(size_div.replace('px'))+$('#items').height()));
    return html;
}

function redisenar()
{
    $('#nav_logos').html(Renderhtml($(window).width()));
}
$(window).resize(function ()
{
    redisenar();
});
$(function()
{
    redisenar();
});