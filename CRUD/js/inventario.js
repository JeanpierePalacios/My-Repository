//VENTANA MODAL
let cerrar = document.querySelectorAll(".close")[0];
let abrir = document.querySelectorAll(".cta")[0];
let modal = document.querySelectorAll(".modal-form")[0];
let modalC = document.querySelectorAll(".modal-container")[0];

window.addEventListener("click", function(e){
    console.log(e.target);
    if(e.target == modalC){
        setTimeout(function(){
            modalC.style.opacity = "0";
            modalC.style.visibility = "hidden";
        }, 200)
    }
})

abrir.addEventListener("click", function(e){
    limpiar();
    e.preventDefault();
    modalC.style.opacity = "1";
    modalC.style.visibility = "visible";
});

cerrar.addEventListener("click", function(e){
    setTimeout(function(){
        modalC.style.opacity = "0";
        modalC.style.visibility = "hidden";
    }, 200)
})

/* CRUD*/
var nuevoID;
var db=openDatabase("BD_Productos","1.0","BD_Productos", 65535);

function limpiar(){
    document.getElementById("item").value="";
    document.getElementById("precio").value="";
    document.getElementById("descripcion").value="";
    document.getElementById("cantidad").value="";
}

//ELIMINAR PRODUCTO
function eliminarProducto(){
    $(document).one('click','button[type="button"]', function(event){
        let id= this.id;
        var lista=[];
        $('#listaProductos').each(function(){
            var celdas = $(this).find('tr.Reg_'+id);
            celdas.each(function(){
                var registro = $(this).find('span.miID');
                registro.each(function(){
                    lista.push($(this).html())
                });
            });
        });
        nuevoID = lista[0].substr(1);
        db.transaction(function(transaction){
            var sql = "DELETE FROM ventas WHERE id ="+nuevoID+";"
            transaction.executeSql(sql, undefined, function(){
                alert("Prodcuto eliminaro satisfactoriamente");
            }, function(transaction, err){
                alert(err.message);
            })
        })
    });
}

//EDITAR PRODUCTO
function editar(){
    modalC.style.opacity = "1";
    modalC.style.visibility = "visible";

    $(document).one('click','button[type="button"]', function(event){
        let id= this.id;
        var lista=[];
        $('#listaProductos').each(function(){
            var celdas = $(this).find('tr.Reg_'+id);
            celdas.each(function(){
                var registro = $(this).find('span');
                registro.each(function(){
                    lista.push($(this).html())
                });
            });
        });
        document.getElementById("item").value=lista[1];
        document.getElementById("descripcion").value=lista[2];
        document.getElementById("cantidad").value=lista[3];
        document.getElementById("precio").value=lista[4].slice(0,5);
        nuevoID=lista[0].substr(1);
    });
}

//CREACION DE TABLA
$(function (){
    $("#crear").click(function(){
        db.transaction(function(transaction){
            var sql="CREATE TABLE ventas "+
            "(id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, "+
            "item VARCHAR(50) NOT NULL, "+
            "descripcion VARCHAR(50) NOT NULL, "+
            "cantidad INTEGER NOT NULL, "+
            "precio DECIMAL(5,2) NOT NULL, "+
            "importe DECIMAL(5,2) AS (cantidad*precio))";
            transaction.executeSql(sql,undefined, function(){
                alert("Tabla creada exitosamente");
            }, function(transaction, err){
                alert(err.message);
            })
        });
    });

    $("#mostrar").click(function(){
        cargardatos();
    })

    //CARGAR Y LISTAR LOS DATOS DE LA TABLA
    function cargardatos(){
        $("#listaProductos").children().remove();
        db.transaction(function(transaction){
            var sql="SELECT * FROM ventas ORDER BY id DESC";
            transaction.executeSql(sql, undefined, function(transaction, result){
                if(result.rows.length){
                    $("#listaProductos").append('<tr><th>Código</th><th>Producto</th><th>Descripcion</th><th>Cantidad</th><th>Precio</th><th>Importe</th><th></th><th></th></tr>');
                    for(var i=0; i<result.rows.length; i++){
                        var row = result.rows.item(i);
                        var item = row.item;
                        var id = row.id;
                        var precio = row.precio;
                        var descripcion = row.descripcion;
                        var cantidad = row.cantidad;
                        var importe = row.importe;
                        $("#listaProductos").append('<tr id="fila'+id+'" class="Reg_A'+id+'"><td><span class="miID">A'+
                        id+'</span></td><td><span>'+item+'</span></td><td><span>'+
                        descripcion+'</span></td><td><span>'+cantidad+'</span></td><td>S/ <span>'+
                        precio+'</span></td><td>S/ <span>'+importe+
                        '</span></td><td><button type="button" id="A'+id+'" class="btn btn-secondary btn-edit" onclick="editar()"><i class="fa-solid fa-pen-to-square"></i></button></td><td><button type="button" id="A'+id+'" class="btn btn-danger" onclick="eliminarProducto()"><i class="fa-solid fa-trash"></i></button></td></tr>');
                    }
                }else{
                    $("#listaProductos").append('<tr><td colspan="5" align="center">No existe registros de productos</td></tr>');
                }
            },function(transaction, err){
                alert.apply(err.message);
            })
        })
    }

    //MODIFICAR REGISTRO
    $("#modificar").click(function(){
        var nprod=$('#item').val();
        var nprecio=$('#precio').val();
        var ndescrip=$('#descripcion').val();
        var ncant=$('#cantidad').val();

        db.transaction(function(transaction){
            var sql="UPDATE ventas SET item='"+nprod+"', precio='"+nprecio+"', descripcion='"+ndescrip+"', cantidad='"+ncant+"' WHERE id ="+nuevoID+";"
            transaction.executeSql(sql, undefined, function(){
                cargardatos();
                limpiar();
            }, function(transaction, err){
                alert(err.message);
            })
        })
    })

    //INSERTAR REGISTRO EN LA TABLA
    $("#insertar").click(function (){
        var item=$("#item").val();
        var precio=$("#precio").val();
        var descripcion=$("#descripcion").val();
        var cantidad=$("#cantidad").val();
        if(item.length>0 & precio.length>0 & descripcion.length>0 & cantidad.length>0){
            db.transaction(function(transaction){
                var sql="INSERT INTO ventas(item, precio, descripcion, cantidad) VALUES(?,?,?,?)";
                transaction.executeSql(sql,[item, precio, descripcion, cantidad], function(){   
                }, function(transaction, err){
                    alert(err.message);
                })
            })
            limpiar();
            cargardatos();
        }else{
            alert("Campos vacios, por favor ingrese los datos");
        }
            
    })

    //ELIMINAR LISTA
    $("#eliminarTodo").click(function(){
        if(!confirm("¿Estas seguro de eliminar los datos de la tabla?", ""))
            return;
        db.transaction(function(transaction){
            var sql="DROP TABLE ventas";
            transaction.executeSql(sql, undefined, function(){
                alert("Tabla borrada exitosamente");
            }, function(transaction, err){
                alert(err.message);
            })
        })
    })
})

//SWEET ALERT