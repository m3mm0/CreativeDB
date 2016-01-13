//Button Save Ideas
$( "#btn-save" ).on( "click", function() {
  
  var msj_error   = "";
  var focus      = $('#focus2').val();
  var observacion = $('#observacion').val();
 
  $.ajax({
      type: 'POST',
      url: './process/ins_idea.php',     
      data:"focus="+focus+"&observacion="+observacion,
      success:function(data){
        if (data > 0) {

          $('#focus2').val('');
          $('#observacion').val('');

          //Get New Idea
          get_ideas();


        }else{
            $('.msj-error').html('No se pudo crear tu idea.<br>Intentalo nuevamente mas tarde.<br>');
            $('.alert-danger').slideDown();
        } 
      },
      error: function() { // if error occured 
        $('.msj-error').html('Estamos teniendo inconvenientes para crear tu idea.<br>Intentalo nuevamente mas tarde.<br>');
          $('.alert-danger').slideDown();
      },
      async:false,
      dataType:'html'
    }); 
});

//Show
function get_ideas(p_order, p_focid){
  $('.grid').empty();
  $.ajax({
      type: 'POST',
      url: './process/get_ideas.php', 
      data:"order="+p_order+"&focid="+p_focid,          
      success:function(data){
        $('.grid').append(data);
      },
      error: function() { // if error occured 
        $('.msj-error').html('Estamos teniendo inconvenientes para obtener las idea.<br>Intentalo nuevamente mas tarde.<br>');
        $('.alert-danger').slideDown();
      },      
      dataType:'html'
    }); 
}

//Filter
$( "#order" ).change(function() {
  var order = $('#order').val();
  var focid = $('#focid').val();
  get_ideas(order, focid);    
});

$( "#focid" ).change(function() {
  var order = $('#order').val();
  var focid = $('#focid').val();
  get_ideas(order, focid);
});