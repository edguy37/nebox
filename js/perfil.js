$(function(){
	$('a.scroll').click(function(e){
		e.preventDefault();
		$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
	});
});
// When the browser is ready...
  $(function() {
    // validate
    $("#contact").validate({
        // Set the validation rules
        rules: {
            name: "required",
            number: "required",
            email: {
                required: true,
                email: true
            },
            price: "required",
            ubication: "required",
            description: "required",
            imagen1: "required",
            imagen2: "required",
            imagen3: "required",
            imagen4: "required",
            imagen5: "required",
            category[]: "required",
            terms: "required",

        },
        // Specify the validation error messages
        messages: {
            name: "Por favor ingresa tu nombre",
            number:  "Por favor ingresa tu número de teléfono",
            email: "Por favor ingresa una dirección de correo válida",
            price: "Por favor ingresa un precio",
            ubication: "Por favor ingresa tu ciudad",
            description: "Por favor escribe tu mensaje",
            imagen1: "Olvidaste elegir tu primera foto",
            imagen2: "Olvidaste elegir tu segunda foto",
            imagen3: "Olvidaste elegir tu tercera foto",
            imagen4: "Olvidaste elegir tu cuarta foto",
            imagen5: "Olvidaste elegir tu quinta foto",
            category[]: "Debes seleccionar al menos una categoría",
            terms: "Debes estar de acuerdo con nuestros términos y condiciones para poder inscribirte",
            errorPlacement: function(error, element) {
                if(element.attr("name") == "terms") {
                    error.appendTo( element.parent("span").next("div") );
                } else {
                    error.insertAfter(element);
                }
}
        },
        // submit handler
        submitHandler: function(form) {
          //form.submit();
           $(".enviado").css('display', 'flex');
           $(".enviado").fadeOut(4500);
           $("#contact").ajaxSubmit();
        }
    });
  });

 window.onmousedown = function (e) {
    var el = e.target;
    if (el.tagName.toLowerCase() == 'option' && el.parentNode.hasAttribute('multiple')) {
        e.preventDefault();

        // toggle selection
        if (el.hasAttribute('selected')) el.removeAttribute('selected');
        else el.setAttribute('selected', '');

        // hack to correct buggy behavior
        var select = el.parentNode.cloneNode(true);
        el.parentNode.parentNode.replaceChild(select, el.parentNode);
    }
}

$(".dropdown-menu a").click(function(){
var sel = $(this).text()
    $('#buscador').submit(function(eventObj) {
        $(this).append("<input type='hidden' name='ubic' value="+sel+"> ");
        return true;
    });
})