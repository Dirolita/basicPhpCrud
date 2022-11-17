function eliminar(e){
    e.preventDefault();
    let text=`<h2>¿Estas seguro que deseas eliminar este registro?</h2><br><h3>Esta acción se realizara de manera permanente</h3>`;
    let mensaje=document.querySelector("#mensaje");
    mensaje.innerHTML=text;
    mensaje.style.setProperty("visibility","visible");
    mensaje.style.setProperty("opacity","1");

}