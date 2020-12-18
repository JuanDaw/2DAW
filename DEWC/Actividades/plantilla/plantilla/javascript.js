var usuario = new usuarioActivo();
setCookie("nombre", usuario.nombre);
setCookie("email", usuario.email);
setCookie("dni", usuario.dni);
setCookie("rango", usuario.rango);

function usuarioActivo(nombre = "", email = "", dni = "", rango = "invitado") {
    this.nombre = nombre;
    this.email = email;
    this.dni = dni;
    this.rango = rango;

    this.cambiarRango = function (rangoN) {
        return this.rango = rangoN;
    }
}


function loguin() {
    var contenedor = document.getElementById("contenedorUno");
    var button = contenedor.firstChild;
    contenedor.removeChild(button);

    contenedor.appendChild(button);
    var logout = contenedor.firstChild;
    logout.setAttribute("id", "logout");
    logout.setAttribute("onclick", "volver();");
    logout.innerHTML = "LogOut";

    button = document.createElement("button");
    contenedor.appendChild(button);
    var guardar = document.getElementsByTagName("button")[1];
    guardar.setAttribute("id", "guardar");
    guardar.setAttribute("onclick", "guardar();");
    guardar.innerHTML = "Guardar Datos";

    button = document.createElement("button");
    contenedor.appendChild(button);
    var admin = document.getElementsByTagName("button")[2];
    admin.setAttribute("id", "admin");
    admin.setAttribute("onclick", "administrador();");
    admin.innerHTML = "Modo Administrador";

    var form = document.createElement("form");
    form.setAttribute("id", "form");
    var input1 = "<label for='usu'>Usuario</label><input type='text' name='usu' id='usu' /><br>";
    var input2 = "<label for='email'>Email</label><input type='text' name='email' id='email' />";
    var contenedor2 = document.getElementById("contenedorDos");
    contenedor2.innerHTML = "";
    contenedor2.appendChild(form);
    document.getElementById("form").innerHTML = input1 + input2;
}

function volver() {
    deleteCookie("nombre");
    deleteCookie("email");
    deleteCookie("dni");
    deleteCookie("rango");
    window.location.href = "index.html"
}

function guardar() {
    var nusuario = document.getElementById("usu").value;
    var email = document.getElementById("email").value;

    usuario.nombre = nusuario;
    usuario.email = email;
    usuario.cambiarRango("registrado");
    setCookie("nombre", usuario.nombre);
    setCookie("email", usuario.email);
    setCookie("rango", usuario.rango);

}

function administrador() {
    var contenedor = document.getElementById("contenedorUno");
    var admin = document.getElementsByTagName("button")[2];
    contenedor.removeChild(admin);

    var input1 = "<label for='usu'>Usuario</label><input type='text' name='usu' id='usu' /><br>";
    var input2 = "<label for='email'>Email</label><input type='text' name='email' id='email' /><br>";
    var input3 = "<label for='dni'>DNI</label><input type='text' name='dni' id='dni' /><br>";
    var form = document.getElementById("form");
    form.innerHTML = input1 + input2 + input3;

    document.getElementsByTagName("button")[1].setAttribute("onclick", "guardar2();")
}

function guardar2() {
    var nusuario = document.getElementById("usu").value;
    var email = document.getElementById("email").value;
    var dni = document.getElementById("dni").value;

    usuario.nombre = nusuario;
    usuario.email = email;
    usuario.dni = dni;
    usuario.cambiarRango("administrador");
    setCookie("nombre", usuario.nombre);
    setCookie("email", usuario.email);
    setCookie("dni", usuario.dni);
    setCookie("rango", usuario.rango);
}