let id_eliminar;
function getid(id){
    id_eliminar=id;
}


$(".btn_eliminar" ).click(function() {
     
        Swal.fire({
            title: 'Está seguro que desea eliminar?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Sí',
            denyButtonText: `No`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                
            Swal.fire('El usuario '+id_eliminar+ ' se ha eliminado', '', 'success')
            } else if (result.isDenied) {
            Swal.fire('No se generaron cambios', '', 'info')
            }
        })
  });
  