let confirma = document.getElementById('confirma')

confirma.addEventListener('show.bs.modal', e => {  
  document.getElementById('texto-confirma').innerHTML = '¿Desea eliminar el pedido Nº ' + e.relatedTarget.dataset.id + '?'
  document.getElementById('btnSi').dataset.id = e.relatedTarget.dataset.id
})

let btnSi = document.getElementById('btnSi');

btnSi.addEventListener('click', e =>{
  
  data = {id: e.target.dataset.id}
  
  console.log(data)
  fetch('../controller/borrarPedido.php', {
    method: 'POST',
    body: JSON.stringify(data)
  })
  .then(data => {
    return data.json()
  })
  .then(resJson => {
    let mensajeModal = new bootstrap.Modal(document.getElementById("mensaje"), {});
    if (resJson == 'OK') {
      document.getElementById("texto-mensaje").innerHTML = "El pedido fue eliminado";
      mensajeModal.show();
    } else {
      document.getElementById("texto-mensaje").innerHTML = "Ocurrio un error al eliminar el pedido";      
      mensajeModal.show();
    }
  })
})

let mensaje = document.getElementById('mensaje')

mensaje.addEventListener('hidden.bs.modal', e => {  
  window.location.reload()
})