(function () {
  'use strict'
  window.addEventListener('load', function () {
    let confirma = document.getElementById('confirma')

    confirma.addEventListener('show.bs.modal', e => {  
      document.getElementById('texto-confirma').innerHTML = '¿Desea eliminar el pedido Nº ' + e.relatedTarget.dataset.id + '?'
      document.getElementById('btnSi').dataset.id = e.relatedTarget.dataset.id
    })

    let btnSi = document.getElementById('btnSi');

    btnSi.addEventListener('click', e =>{
      
      let data = {id: e.target.dataset.id}
      
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


    const getPedido = id => {
      let data = {idPedido: id}

      fetch('../controller/getPedido.php', {
        method: 'POST',
        body: JSON.stringify(data)
      })
      .then(data => {
        return data.json()
      })
      .then(resJson => {
        if(resJson.status == 0) {
          //resJson.data
          document.getElementById('accion').value = 'Editar'
          document.getElementById('idpedido').value = resJson.data.idpedido
          document.getElementById('idusuario').value = resJson.data.idusuario
          document.getElementById('username').value = resJson.data.usuario
          document.getElementById('firstName').value = resJson.data.nombre
          document.getElementById('email').value = resJson.data.mail
          document.getElementById('address').value = resJson.data.lugarentrega
          document.getElementById('provincia').value = resJson.data.provincia
          getLocalidades(resJson.data.provincia, resJson.data.localidad)      
          document.getElementById('zip').value = resJson.data.codpostal
          if (resJson.data.formadepago == 'c') {
            document.getElementById('credit').checked = true
          } else{
            document.getElementById('debit').checked = true
          }
          document.getElementById('cc-name').value = resJson.data.tarjtitular
          document.getElementById('cc-number').value = resJson.data.tarjnumero
          document.getElementById('cc-expiration').value = resJson.data.tarjvto
          document.getElementById('cc-cvv').value = resJson.data.tarjclave
        } else {
          document.getElementById('btnPedido').setAttribute('disabled', '')
        }
      })
    }

    let pedido = document.getElementById('pedido')
    pedido.addEventListener('show.bs.modal', e => {  
      document.getElementById('btnPedido').innerHTML = 'Modificar Pedido'
      getPedido(e.relatedTarget.dataset.id)
    })
  })
}())