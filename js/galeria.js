$(document).ready(function(){

  //Accion que carga la lista de imagenes correspondientes a la categoria seleccionada en modificar imagen
	$('#categoria_1').on('change', function(){
    var dato_categoria = $('#categoria_1').val()
    $.ajax({
      type:'POST',
      url:'./class/cargar_lista_fotos.php', 
      data: {'categoria': dato_categoria}
    })
    .done(function(obtenerLista){
      $('#fotos_1').html(obtenerLista)
    })
    .fail(function(){
      alert('Hubo un error al cargar la lista de fotos')
    })
  })

  //Accion que carga la lista de imagenes correspondientes a la categoria seleccionada en eliminar imagen
  $('#categoria_2').on('change', function(){
    var dato_categoria = $('#categoria_2').val()
    $.ajax({
      type:'POST',
      url:'./class/cargar_lista_fotos.php', 
      data: {'categoria': dato_categoria}
    })
    .done(function(obtenerLista){
      $('#fotos_2').html(obtenerLista)
    })
    .fail(function(){
      alert('Hubo un error al cargar la lista de fotos')
    })
  })

  //Accion que carga la miniatura de imagen seleccionada en modificar imagen
  $('#fotos_1').on('change', function(){
    var dato_foto = $('#fotos_1').val()
    var dato_cate = $('#categoria_1').val()
    $.ajax({
      type: 'POST',
      url:'./class/cargar_foto.php',
      data:{'foto': dato_foto, 'dato_cate':dato_cate}
    })
    .done(function(obtenerFoto){
      $('#img_1').html(obtenerFoto)
    })
    .fail(function(){
      alert('Hubo un error al cargar la imagen.')
    })
  })

  //Accion que carga la descripcion segun la imagen seleccionada en modificar imagen
  $('#fotos_1').on('change', function(){
    var dato_foto = $('#fotos_1').val()
    $.ajax({
      type: 'POST',
      url:'./class/cargar_descripcion.php',
      data:{'foto': dato_foto}
    })
    .done(function(obtenerDescripcion){
      $('#descripcion_1').html(obtenerDescripcion)
    })
    .fail(function(){
      alert('Hubo un error al cargar la imagen.')
    })
  })

  //Accion que carga la miniatura de imagen seleccionada en eliminar imagen
  $('#fotos_2').on('change', function(){
    var dato_foto = $('#fotos_2').val()
    var dato_cate = $('#categoria_2').val()
    $.ajax({
      type: 'POST',
      url:'./class/cargar_foto.php',
      data:{'foto': dato_foto, 'dato_cate':dato_cate}
    })
    .done(function(obtenerFoto){
      $('#img_2').html(obtenerFoto)
    })
    .fail(function(){
      alert('Hubo un error al cargar la imagen.')
    })
  })

})