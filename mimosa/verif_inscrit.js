$(document).ready(function(){





function StopEvent()
{

 $.ajax({
     url:"http://localhost/code/mimosa/ajax.php?email="+$("#email_id").val(),
      success:function(data2)
         {  
         
        if(data2==1)
        {
           $("#enregistrer").prop("disabled",true);


        }
        else
        {
             $("#enregistrer").prop("disabled",false);
        }
           
         }
});






}










function nom()
{
 var onlyNumber=/^[0-9]*$/gm;
    var onlyletter=/^[A-Za-z]+$/;
     $("#span_nom").css({"color":"red"});

if($("#nom").val()=="")
{
	 $("#span_nom").html("       Champ obligatoire"); 
      $("#nom").css({"background-color": "#ff7f7f"}); 
}
else if($("#nom").val().match(onlyletter)==null)
                {
                    $("#span_nom").html("Que des lettres !");
                    $("#nom").css({"background-color":"#ff7f7f"});
              
               
                }
                else
                {
  $("#span_nom").html("");
                    $("#nom").css({"background-color":"white"});
                }


}

function prenom()
{
 var onlyNumber=/^[0-9]*$/gm;
    var onlyletter=/^[A-Za-z]+$/;
    $("#span_prenom").css({"color":"red"});

if($("#prenom").val()=="")
{
	 $("#span_prenom").html("       Champ obligatoire"); 
      $("#prenom").css({"background-color": "#ff7f7f"}); 
}
else if($("#prenom").val().match(onlyletter)==null)
                {
                    $("#span_prenom").html(" 	Que des lettres !");
                    $("#prenom").css({"background-color":"#ff7f7f"});
                }
  else
  {
  	    $("#span_prenom").html("");
                    $("#prenom").css({"background-color":"white"});

  }


}
function verif_mail()
{
	var span_id=$("#span_id").val();
	var input_mail=$("#email_id").val();
	var emailregex="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}";
	var x=0;
	 $("#span_id").css({"color": "#ff7f7f"}); 
  if (input_mail=="")
  {
  	  $("#span_id").html("       Champ obligatoire"); 
      $("#email_id").css({"background-color": "#ff7f7f"}); 
      x++;
  }
 else if(input_mail.match(emailregex)==null)
                {
                    $("#span_id").html("        Adresse mail non valide");
                    $("#email_id").css({"background-color":"#ff7f7f"});
                    x++;
               
                }

else {

	 $("#span_id").html("");
     $("#email_id").css({"background-color":"white"});


 $.ajax({
     url:"http://localhost/code/mimosa/ajax.php?email="+$("#email_id").val(),
      success:function(data2)
         {  
         
        if(data2==1)
        {
              $("#span_id").html("        Adresse mail existe déjà");
              $("#email_id").css({"background-color":"#ff7f7f"});
        }
        else
        {
           $("#span_id").html("");
              $("#email_id").css({"background-color":"white"});
        }
           
         }
}); 
 StopEvent();
}


return x;

}

function mdp()
{
if($("#mdp").val()=="")
{
	 $("#mdp_span").html("       Champ obligatoire"); 
      $("#mdp").css({"background-color": "#ff7f7f"}); 
}

                else
                {
  $("#span_mdp").html("");
                    $("#mdp").css({"background-color":"white"});
                    if($("#mdp").val().length>0&&$("#mdp").val().length<6)
                {
                    $("#mdp_span").css({"color": "#ff7f7f"});
                    $("#mdp_span").html("       Mot de passe faible"); 
                    $("#motDePasse").css({"background-color": ""});

                }
            else if($("#mdp").val().length>6&&$("#mdp").val().length<12)
                {
                    $("#mdp_span").css({"color": "#FFFF66"});
                    $("#mdp_span").html("       Mot de passe moyen"); 
                    $("#motDePasse").css({"background-color": "#FFFF66"});
                }
            
        else if($("#mdp").val().length>12)
            {
                   $("#mdp_span").css({"color": "#98FB98"});
                    $("#mdp_span").html("       Mot de passe fort"); 
                    $("#motDePasse").css({"background-color": "#98FB98"});
            }
            else{
                
            }   
                }





}
  function confirm()
    {
    var x=0;
        var  mdpC=$("#ConfirmPass").val();
         $("#mdpC_span").css({"color": "#ff7f7f"});
    if(mdpC=='')
        {
                  $("#ConfirmPass").css({"background-color": "#ff7f7f"});
                  $("#mdpC_span").html("       Champs obligatoire "); 
x++;        
        }
        else if(mdpC!=$("#mdp").val())
            {
                
                             $("#ConfirmPass").css({"background-color": "#ff7f7f"});
                             $("#mdpC_span").html("       Confirmation non valide"); 
x++;
            }
        else{
            
                            $("#ConfirmPass").css({"background-color": "#98FB98"});
                                $("#mdpC_span").css({"color": "#98FB98"});
                             $("#mdpC_span").html("       Mot de passe valide");   
        }
    
    return x;
    }














$("#nom").keyup(nom);

$("#prenom").keyup(prenom);


$("#email_id").keyup(verif_mail);


$("#mdp").keyup(mdp);
$("#ConfirmPass").keyup(confirm);








});