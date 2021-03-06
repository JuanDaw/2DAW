$(document).ready(function () {
    // Ponemos el número
    $("#text").on('keyup', function (e) {
        var text = $("#text").val();
        if (!isNaN(text) && parseInt(text) >= 1 && parseInt(text) <= 5) {
            $("#b1")[0].disabled = false;
        } else {
            $("#b1")[0].disabled = true;
        }
    });

    $("#b1").on('click', function (e) {
        // Aparecen los círculos
        $("#div").fadeOut('slow', function () {
            var num = $("#text").val();
            var div = $("<div id='div2'>");
            var enca = $("<h1 id='enc'>");
            enca.text(num);
            div.append(enca);
            var b = $("<input type='button' value='Añadir' id='b2'>")
            div.append(b);
            var divD = $("<div id='divD'>");
            for (let i = 0; i < parseInt(num); i++) {
                var circulo = $("<div class='circulo'>");
                divD.append(circulo);
            }
            div.append(divD);
            $("body").append(div);

            // Añadir círculos
            if (num == "5") {
                $("#b2")[0].disabled = true;
            } else {
                $("#b2").on('click', function (e) {
                    var dentro = $("#divD");
                    dentro.fadeOut('slow', function () {
                        var circulo = $("<div class='circulo'>");
                        circulo.hover(cambiaColor);
                        circulo.on('click', cambiaOpacidad);
                        // circulo.on('mouseout', daOpacidad);
                        dentro.append(circulo);
                    });
                    dentro.fadeIn('slow', function () {
                        num = parseInt(num) + 1;
                        $("#enc").text(num);
                        if (num == 5) {
                            $("#b2")[0].disabled = true; 
                        }
                    });
                });
            }
            // Comportamiento círculos
            $(".circulo").hover(cambiaColor);

            function cambiaColor() {
                $(this).toggleClass("amarillo");
            }

            $(".circulo").on('click', cambiaOpacidad);

            function cambiaOpacidad() {
                $(this).toggleClass("opacidad");
                $(this).on('click', function (e) {
                    if (num != "1") {
                        $(this).fadeOut('fast', function (e) {
                            num = parseInt(num) - 1;
                            $("#enc").text(num);
                        })
                    } else {
                        alert("No se puede eliminar el único círculo que queda.")
                    }
                })
            }

            // $(".circulo").on('mouseout', daOpacidad);

            // function daOpacidad() {
            //     $(this).animate({
            //         opacity: "1"
            //     });
            //     preventDefault();
            // }
        });
    })
});