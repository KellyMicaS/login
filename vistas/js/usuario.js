var tabla;
function init(){
    mostrarform(false);
    verificarRol();
    $("#formulario").on("submit", guardaryeditar);
}

function verificarRol(){
    $.getJSON("../controladores/usuario.php?op=verificarRol", function(data){
        if(data.rol === "admin"){
            listar();
            $("#btnagregar").show();
        } else {
            $("#listadoregistro,#btnagregar").hide();
            alert("Acceso denegado: Solo administradores.");
        }
    });
}

function limpiar(){
    $("#idusuario,#nombre,#apellido,#usuario,#correo,#clave").val("");
    $("#rol").val("usuario");
}

function mostrarform(flag){
    limpiar();
    if(flag){
        $("#listadoregistro").hide();
        $("#formularioregistros").show();
        $("#btnagregar").hide();
    } else {
        $("#listadoregistro").show();
        $("#formularioregistros").hide();
        $("#btnagregar").show();
    }
}

function guardaryeditar(e){
    e.preventDefault();
    $("#btnGuardar").prop("disabled",true);
    var formData = new FormData($("#formulario")[0]);
    $.ajax({
        url: "../controladores/usuario.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(msg){
            bootbox.alert(msg);
            mostrarform(false);
            tabla.ajax.reload();
        }
    });
}

function mostrar(idusuario){
    $.post("../controladores/usuario.php?op=mostrar",{idusuario}, function(data){
        data = JSON.parse(data);
        mostrarform(true);
        $("#idusuario").val(data.idusuario);
        $("#nombre").val(data.nombre);
        $("#apellido").val(data.apellido);
        $("#usuario").val(data.login);
        $("#correo").val(data.correo);
        $("#rol").val(data.rol);
    });
}

function listar(){
    tabla = $('#tbllistado').DataTable({
        processing: true,
        serverSide: true,
        dom: 'frtip', // quitar la B que activa botones
        buttons: [], // sin botones
        ajax: {
            url: "../controladores/usuario.php?op=listar",
            type: "GET",
            dataType: "json",
            error: console.error
        },
        destroy: true,
        pageLength: 5,
        order: [[1, "asc"]]
    });
}


function cambiarRol(idusuario,nuevoRol){
    $.post("../controladores/usuario.php?op=cambiarRol",{idusuario,rol:nuevoRol}, function(msg){
        bootbox.alert(msg);
        tabla.ajax.reload();
    });
}

init();
