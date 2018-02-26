$(document).ready(function(){
   $("#provincias").change(function(){
       var miprovincia=$(this).val();
      
       $.getJSON("http://localhost/ejercicio1/Phpprovincias.php?nprovincia="+miprovincia,function(data){
           //alert(JSON.stringify(data));
           $("#poblaciones").empty();
           $.each(data,function(key,val){
               var option=$("<option value="+val+">"+key+"</option>");
              $("#poblaciones").append(option);
               $("#codigo").val(""+ val +"");
           });
       });
   });
       $("#poblaciones").change(function(){
     	var localidad = $(this).val();
            $("#codigo").val("" + localidad + "");
           alert("Hola github");
   });
});