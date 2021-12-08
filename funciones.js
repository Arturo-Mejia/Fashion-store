//menu 
function removerActive()
{
    $("#lnk-inicio").removeClass("active");
    $("#lnk-gorras").removeClass("active");
    $("#lnk-sudaderas").removeClass("active");
    $("#lnk-playeras").removeClass("active");
    $("#lnk-chamarras").removeClass("active");
    $("#lnk-otros").removeClass("active");
    $("#lnk-todos").removeClass("active");
}
function inicio()
{ 
    document.getElementById("contenidocentral").innerHTML='<div class="lds-dual-ring"></div>';
    $("#lnk-inicio").addClass("active");    
    const http=new XMLHttpRequest();
     const url="getProd.php?op=destacados";
     http.onreadystatechange= function()
     {
         if(this.readyState == 4 && this.status==200)
         {
             console.log(this.responseText);
             document.getElementById("contenidocentral").innerHTML="<h1>Productos destacados</h1>"+this.responseText;
         }
     }  
 
     http.open("GET",url);
     http.send(); 
}

function gorras()
{
    $("#lnk-gorras").addClass("active");
    document.getElementById("contenidocentral").innerHTML='<div class="lds-dual-ring"></div>';  
     const http=new XMLHttpRequest();
     const url="getProd.php?op=categoria&categoria=1";
     http.onreadystatechange= function()
     {
         if(this.readyState == 4 && this.status==200)
         {
             console.log(this.responseText);
             document.getElementById("contenidocentral").innerHTML="<h1>Productos destacados</h1>"+this.responseText;
         }
     }  
 
     http.open("GET",url);
     http.send(); 
}
function sudaderas()
{
    $("#lnk-sudaderas").addClass("active");
    document.getElementById("contenidocentral").innerHTML='<div class="lds-dual-ring"></div>';  
     const http=new XMLHttpRequest();
     const url="getProd.php?op=categoria&categoria=2";
     http.onreadystatechange= function()
     {
         if(this.readyState == 4 && this.status==200)
         {
             console.log(this.responseText);
             document.getElementById("contenidocentral").innerHTML="<h1>Productos destacados</h1>"+this.responseText;
         }
     }  
 
     http.open("GET",url);
     http.send(); 
}
function playeras()
{
    $("#lnk-playeras").addClass("active");
    document.getElementById("contenidocentral").innerHTML='<div class="lds-dual-ring"></div>';  
     const http=new XMLHttpRequest();
     const url="getProd.php?op=categoria&categoria=3";
     http.onreadystatechange= function()
     {
         if(this.readyState == 4 && this.status==200)
         {
             console.log(this.responseText);
             document.getElementById("contenidocentral").innerHTML="<h1>Productos destacados</h1>"+this.responseText;
         }
     }  
 
     http.open("GET",url);
     http.send(); 
}
function chamarras()
{
    $("#lnk-chamarras").addClass("active");
    document.getElementById("contenidocentral").innerHTML='<div class="lds-dual-ring"></div>';  
     const http=new XMLHttpRequest();
     const url="getProd.php?op=categoria&categoria=4";
     http.onreadystatechange= function()
     {
         if(this.readyState == 4 && this.status==200)
         {
             console.log(this.responseText);
             document.getElementById("contenidocentral").innerHTML="<h1>Productos destacados</h1>"+this.responseText;
         }
     }  
 
     http.open("GET",url);
     http.send(); 
}
function otros()
{
    $("#lnk-otros").addClass("active");
    document.getElementById("contenidocentral").innerHTML='<div class="lds-dual-ring"></div>';  
     const http=new XMLHttpRequest();
     const url="getProd.php?op=categoria&categoria=5";
     http.onreadystatechange= function()
     {
         if(this.readyState == 4 && this.status==200)
         {
             console.log(this.responseText);
             document.getElementById("contenidocentral").innerHTML="<h1>Productos destacados</h1>"+this.responseText;
         }
     }  
 
     http.open("GET",url);
     http.send(); 
}
function todos()
{
    $("#lnk-todos").addClass("active");
    document.getElementById("contenidocentral").innerHTML='<div class="lds-dual-ring"></div>';  
     const http=new XMLHttpRequest();
     const url="getProd.php?op=todos";
     http.onreadystatechange= function()
     {
         if(this.readyState == 4 && this.status==200)
         {
             console.log(this.responseText);
             document.getElementById("contenidocentral").innerHTML="<h1>Productos destacados</h1>"+this.responseText;
         }
     }  
 
     http.open("GET",url);
     http.send(); 
}
function registrar()
{
    document.getElementById("contenidocentral").innerHTML='<div id="registrar">'+
    '<h1>Registrarse</h1>'+
    '<form id="registrarusuario" method="POST">'+
        '<div class="form-group">'+
          '<label >Nombre</label>'+
          '<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre o nombres">'+
        '</div>'+
        '<div class="form-group">'+
          '<label >Apellido</label>'+
          '<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese sus apellidos">'+
        '</div>'+
        '<div class="form-group">'+
            '<label >Correo Electronico</label>'+
            '<input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo electronico">'+
          '</div>'+
          '<div class="form-group">'+
            '<label>Contraseña</label>'+
            '<input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Ingrese una contraseña">'+
          '</div>'+
          '<input class="button" type="button" value="Registrar" onclick="validarnombre(); apellidos(); validar_correoR(); validar_contraseñaR(); hr();"/>'+
      '</form>'+
'</div>';
   
}

// registrar

function validarnombre()
{   
    var expr=/^[\w\W]{1,250}$/;
    if(expr.test(document.getElementById("nombre").value.trim()))
    {  
        return true;
    } else
    {
        alert("el nombre solo debe contener letras y con un maximo de 250");
    } 
}

function apellidos()
{   
    var expr=/^[\w\W]{1,250}$/;
    if(expr.test(document.getElementById("apellido").value.trim()))
    {  
        return true;
    } else
    {
        alert("el apellido solo debe contener letras y con un maximo de 250");
    } 
}

function validar_correoR()
{
    var expr=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(expr.test(document.getElementById("correo").value.trim()))
    {  
        return true;
    } else
    {
        alert("Formato de correo incorrecto");
    } 
}
function validar_contraseñaR()
{
    var reg =/^.*(?=.{8,16})(?=..*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*\D).*$/;
    if(reg.test(document.getElementById("contraseña").value.trim()))
    {  
        return true;
    } else
    {
        alert("La contraseña debe contener por lo menos una letra masyuscula, una minuscula, un numero, un caractr especial y debe ser de 8 a 16 caracteres");
    } 
}

function hr()
{
    if(validarnombre() && apellidos() && validar_correoR() && validar_contraseñaR())
    {    
        let nombre,apellido,correo,contraseña; 
        nombre=document.getElementById("nombre").value;
        apellido=document.getElementById("apellido").value;
        correo=document.getElementById("correo").value;
        contraseña=document.getElementById("contraseña").value;
        const http=new XMLHttpRequest();
        const url="registrarUsuario.php?nombre="+nombre+"&apellido="+apellido+"&correo="+correo+"&contraseña="+contraseña;
        http.onreadystatechange= function()
        {
            if(this.readyState == 4 && this.status==200)
            {
                console.log(this.responseText);
                if(this.responseText=="registrado")
                {
                    Swal.fire({
                        icon: 'success',
                        title: '¡Registrado Correctamente!',
                        showConfirmButton: false,
                        timer: 1500
                      })  
                      document.getElementById("registrarusuario").reset(); 
                } else
                {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: this.responseText
                      }) 
                }
            }
        }  
    
        http.open("GET",url);
        http.send(); 
    } 
}

function agregarC(id)
{     
    if(parseInt(document.getElementById("logid").value)==0)
    {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Antes de agregar un producto al carrito debes iniciar sesión'
          })
        document.getElementById("email").focus(); 
    } else
    {
        
    const http=new XMLHttpRequest();
    const url="addCar.php?idp="+id+"&idu="+document.getElementById("logid").value;

    http.onreadystatechange= function()
    {
        if(this.readyState == 4 && this.status==200)
        {
            console.log(this.responseText);
        }
    }  

    http.open("GET",url);
    http.send(); 

        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '¡el producto se agregó al carrito!',
            showConfirmButton: false,
            timer: 1500
          })   
    }
    
}

function val_login()
{
        let correo,contraseña; 
        correo=document.getElementById("email").value;
        contraseña=document.getElementById("password").value;
        const http=new XMLHttpRequest();
        const url="login.php?email="+correo+"&password="+contraseña;
        if(correo=="" || contraseña=="")
        {
            alert("Ingrese un correo y contraseña para iniciar sesión")
        } else
        { 
            http.onreadystatechange= function()
        {
            if(this.readyState == 4 && this.status==200)
            {
                console.log(this.responseText);
                if(this.responseText=="El correo y contraseña no coinciden")
                {  
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'El correo y la contraseña no coinciden'
                      })
                } else
                {  
                    Swal.fire({
                        icon: 'success',
                        title: '¡Bienvenid@!',
                        text: 'se ha iniciado sesión correctamente'
                      })
                      document.getElementById("logid").value=this.responseText;
                      document.getElementById("loglateral").reset();
                      inicio();
                }
            }
        }  
    
        http.open("GET",url);
        http.send(); 

        }
        
}  

function buscarP()
{     document.getElementById("contenidocentral").innerHTML='<div class="lds-dual-ring"></div>'; 
       let buscar=document.getElementById("buscar").value;

        const http=new XMLHttpRequest();
        const url="buscar.php?buscar="+buscar;
        http.onreadystatechange= function()
        {
            if(this.readyState == 4 && this.status==200)
            {
                console.log(this.responseText);
                document.getElementById("contenidocentral").innerHTML=this.responseText;
            }
        }  
    
        http.open("GET",url);
        http.send(); 
}

function verificarlog(){

    if(parseInt(document.getElementById("logid").value)==0)
    {
        document.getElementById("login").style.display="block";
        document.getElementById("opcionesU").style.display="none";
        document.getElementById("opcionesA").style.display="none";
    } 
    if(parseInt(document.getElementById("logid").value)==1)
    {
        document.getElementById("login").style.display="none";
        document.getElementById("opcionesU").style.display="none";
        document.getElementById("opcionesA").style.display="block";
    } 
    if(parseInt(document.getElementById("logid").value)>1)
    {
        document.getElementById("login").style.display="none";
        document.getElementById("opcionesU").style.display="block";
        document.getElementById("opcionesA").style.display="none";
    } 
    setTimeout("verificarlog()",100);
}

function cerrarsesion()
{   
    document.getElementById("logid").value="0";
    inicio();
    const http=new XMLHttpRequest();
    const url="destruir.php";
    http.onreadystatechange= function()
    {
        if(this.readyState == 4 && this.status==200)
        {
            console.log(this.responseText);
        }
    }  

    http.open("GET",url);
    http.send(); 
}

function mispedidos()
{    document.getElementById("contenidocentral").innerHTML='<div class="lds-dual-ring"></div>'; 
    let idu=document.getElementById("logid").value;

        const http=new XMLHttpRequest();
        const url="mispedidos.php?idu="+idu;
        http.onreadystatechange= function()
        {
            if(this.readyState == 4 && this.status==200)
            {
                console.log(this.responseText);
                document.getElementById("contenidocentral").innerHTML=this.responseText;
            }
        }  
    
        http.open("GET",url);
        http.send(); 

} 

function vercarrito()
{
    document.getElementById("contenidocentral").innerHTML='<div class="lds-dual-ring"></div>'; 
    let idu=document.getElementById("logid").value;
        const http=new XMLHttpRequest();
        const url="micarrito.php?idu="+idu;
        http.onreadystatechange= function()
        {
            if(this.readyState == 4 && this.status==200)
            {
                console.log(this.responseText);
                document.getElementById("contenidocentral").innerHTML=this.responseText;
            }
        }  
    
        http.open("GET",url);
        http.send(); 

}

function borrar(idp)
{   document.getElementById("contenidocentral").innerHTML='<div class="lds-dual-ring"></div>'; 
    let idu=document.getElementById("logid").value;
    const http=new XMLHttpRequest();
    const url="borrarP.php?idu="+idu+"&idp="+idp;
    http.onreadystatechange= function()
    {
        if(this.readyState == 4 && this.status==200)
        {
            console.log(this.responseText);
           vercarrito(); 
        }
    }  

    http.open("GET",url);
    http.send(); 

}


function autolog()
{
    const http=new XMLHttpRequest();
    const url="autolog.php";
    http.onreadystatechange= function()
    {
        if(this.readyState == 4 && this.status==200)
        {
            console.log(this.responseText);
            document.getElementById("logid").value=this.responseText;
        }
    }  

    http.open("GET",url);
    http.send(); 
}

// redes sociales
function facebook()
{
    Swal.fire({
        title: 'Sweet!',
        text: 'Facebbok',
        imageUrl: 'https://mcdn.wallpapersafari.com/medium/37/37/PS5Wvy.jpg',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
      })
} 

function twitter()
{
    Swal.fire({
        title: 'Sweet!',
        text: 'Twitter',
        imageUrl: 'https://mcdn.wallpapersafari.com/medium/37/37/PS5Wvy.jpg',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
      })
   
} 

function instagram()
{
    Swal.fire({
        title: 'Sweet!',
        text: 'Instagram',
        imageUrl: 'https://mcdn.wallpapersafari.com/medium/37/37/PS5Wvy.jpg',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
      }) 
}

function github()
{
Swal.fire({
  title: 'Sweet!',
  text: 'GitHub',
  imageUrl: 'src/imagenes/git.jpg',
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: 'Custom image',
})
} 

function hacer_pedido()
{    var expr=/^[0-9]{10}$/;
let idu=document.getElementById("logid").value;
let direc=document.getElementById("direccionp").value;
let total=document.getElementById("totalp").value;
let tel=document.getElementById("telefonop").value;
    if(document.getElementById("direccionp").value=="" || document.getElementById("telefonop").value=="" )
    {
        alert("Para hacer el pedido ingrese primero su direccion y un número de telefono");
    } else
    {    
        if(expr.test(document.getElementById("telefonop").value))
        {   document.getElementById("contenidocentral").innerHTML='<div class="lds-dual-ring"></div>'; 
       
        const f = new Date();
       let fecha=f.getFullYear()+"-"+(parseInt(f.getMonth())+1)+"-"+f.getDate(); 
        const http=new XMLHttpRequest();
        const url="hacerpedido.php?idu="+idu+"&total="+total+"&direccionp="+direc+"&fecha="+fecha+"&tel="+tel;
        http.onreadystatechange= function()
        {
            if(this.readyState == 4 && this.status==200)
            {
                console.log(this.responseText);
                vercarrito();
                Swal.fire({
                    icon: 'success',
                    title: '¡realizado¡',
                    text: 'Se ha registrado su pedido',
                  })
            }
        }  
    
        http.open("GET",url);
        http.send();
            
        } else { alert("El numero telefonico debe ser de 10 digitos");}
         
    }
} 

function pedidosencurso()
{      document.getElementById("contenidocentral").innerHTML='<div class="lds-dual-ring"></div>'; 
    const http=new XMLHttpRequest();
        const url="pedidosenC.php";
        http.onreadystatechange= function()
        {
            if(this.readyState == 4 && this.status==200)
            {
                console.log(this.responseText);
               document.getElementById("contenidocentral").innerHTML=this.responseText;
            }
        }  
    
        http.open("GET",url);
        http.send();
}  

function todoslospedidos()
{    document.getElementById("contenidocentral").innerHTML='<div class="lds-dual-ring"></div>'; 
    const http=new XMLHttpRequest();
    const url="listapedidos.php";
    http.onreadystatechange= function()
    {
        if(this.readyState == 4 && this.status==200)
        {
            console.log(this.responseText);
           document.getElementById("contenidocentral").innerHTML=this.responseText;
        }
    }  

    http.open("GET",url);
    http.send();
}

function listaproductos()
{    document.getElementById("contenidocentral").innerHTML='<div class="lds-dual-ring"></div>'; 
    const http=new XMLHttpRequest();
        const url="listaproductos.php";
        http.onreadystatechange= function()
        {
            if(this.readyState == 4 && this.status==200)
            {
                console.log(this.responseText);
                document.getElementById("contenidocentral").innerHTML=this.responseText;
            }
        }  
    
        http.open("GET",url);
        http.send();
}


function editar_pedido()
{   
    document.getElementById("contenidocentral").innerHTML='<div class="lds-dual-ring"></div>'; 
    if(document.getElementById("editarpid").value=="" || document.getElementById("nuevoestado").value=="")
    {
      alert("ingrese el ide de producto y el nuevo estado"); 
    } else
    {   
        let idp=document.getElementById("editarpid").value;
        let ne=document.getElementById("nuevoestado").value;
        const http=new XMLHttpRequest();
        const url="editarpedido.php?idp="+idp+"&ne="+ne;
        http.onreadystatechange= function()
        {
            if(this.readyState == 4 && this.status==200)
            {
                console.log(this.responseText);
                pedidosencurso();
            }
        }  
    
        http.open("GET",url);
        http.send();
    }
} 

function eliminarpro(idp)
{    
    document.getElementById("contenidocentral").innerHTML='<div class="lds-dual-ring"></div>'; 
    const http=new XMLHttpRequest();
        const url="eliminarpro.php?idp="+idp;
        http.onreadystatechange= function()
        {
            if(this.readyState == 4 && this.status==200)
            {
                console.log(this.responseText);
                listaproductos();
            }
        }  
    
        http.open("GET",url);
        http.send();
}

function editarpro(idp)
{
  window.open("editarpro.php?idp="+idp);  
}

function agregarp()
{
    window.open("agregarproducto.html");
}

