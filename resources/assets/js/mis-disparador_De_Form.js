//Admin

DispararForm('.admin-boton-editar',$('#form-admin-empresa-datos'));
DispararForm('.admin-boton-editar',$('#form-admin-img-home-subir'));

DispararForm('.boton-subir-img',$('#form-admin-subir-img-proyectos'));



  // buscador de eventos por marca
  $('body').on('change','#select_marcas_en_evento',function(e)
  {
   e.preventDefault();   

   var form  = $(this).parents() ;  
   form.submit();
  });



  // buscador de eventos por marca
  $('body').on('click','.editar-evento-guardar',function(e)
  {
   e.preventDefault();   

   var form  = $(this).parents();  

   $("input[name=tipo_de_boton]").val('guardar');

      form.submit();
  });

  // buscador de eventos por marca
  $('body').on('click','.editar-evento-guardar-y-salir',function(e)
  {
   e.preventDefault();   

   var form  = $(this).parents();  

   $("input[name=tipo_de_boton]").val('guardar-y-salir');

      form.submit();
  });

