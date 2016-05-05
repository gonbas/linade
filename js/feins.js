/**
 * CUSTOM VALIDACIONES
 */
agregarValidacionPassword();
agregarValidacionEmail();

/**
 * ONLOAD
 */
$(window).load(function () {
    footerOnBottom();
    igualarAlturasLoginRegistro();
});
/**
 * RESIZE
 */
$(window).on('resize', function () {
    footerOnBottom();
    igualarAlturasLoginRegistro();
});



function agregarValidacionPassword(){
    $.validator.addMethod(
            "verificaPassword",
            function (value, element) {
                if (value.length > 8) {
                    return true;
                }
                return false;
            },
            "La contraseña no concuerda, prueba de nuevo"
            );
}
function agregarValidacionEmail(){
    $.validator.addMethod(
            "verificaEmail",
            function (value, element) {
                if (value.length > 8) {
                    $("#errorEmail").hide();
                    $("#okEmail").show();
                    return true;
                }else{
                    $("#errorEmail").show();
                    $("#okEmail").hide();
                }
                return false;
            },
            "El email no concuerda, prueba de nuevo"
            );
}

function igualarAlturasLoginRegistro() {
    if ($(window).width() > 992) {
        equalheight('.eqlLogin');
        $(".inicio-session").css("height", $(".inicio-registro").height() + "px");
    }
}
function footerOnBottom() {
    var fh = $("#footerFixed").height();
    $("body").css("padding-bottom", fh + "px");
}

function showHideFactura(check) {
    if ($(check).prop("checked")) {
        $(".form-dato-facturacion").hide();
    } else {
        $(".form-dato-facturacion").show();
    }
}


/**
 EqualHeight
 **/
equalheight = function (container) {
    var currentTallest = 0,
            currentRowStart = 0,
            rowDivs = new Array(),
            $el,
            topPosition = 0;
    $(container).each(function () {

        $el = $(this);
        $($el).height('auto')
        topPostion = $el.position().top;

        if (currentRowStart != topPostion) {
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0; // empty the array
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
        }
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
}



