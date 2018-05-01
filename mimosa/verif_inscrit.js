$(document).ready(function(){





function StopEvent()
{

 $.ajax({
     url:"http://localhost/code/mimosa/ajax.php?email="+$("#email_id").val(),
      success:function(data2)
         {  
         
        if(data2==1)
        {
           $("#S'inscrire").prop("disabled",true);


        }
        else
        {
             $("#S'inscrire").prop("disabled",false);
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
function notes()
{
 var onlyNumber=/^[0-9]*$/gm;
    var onlyletter=/^[A-Za-z]+$/;
     $("#span_notes").css({"color":"red"});

if($("#notes").val()=="")
{
   $("#span_notes").html("       Champ obligatoire"); 
      $("#notes").css({"background-color": "#ff7f7f"}); 
}
else if($("#notes").val().match(onlyletter)==null)
                {
                    $("#span_notes").html("Que des lettres !");
                    $("#notes").css({"background-color":"#ff7f7f"});
              
               
                }
                else
                {
  $("#span_notes").html("");
                    $("#notes").css({"background-color":"white"});
                }


}
function street_number()
{
 var onlyNumber=/^[0-9]*$/gm;
    var onlyletter=/^[A-Za-z]+$/;
     $("#span_street_number").css({"color":"red"});

if($("#street_number").val()=="")
{
   $("#span_street_number").html("       Champ obligatoire"); 
      $("#street_number").css({"background-color": "#ff7f7f"}); 
}

                else
                {
  $("#span_street_number").html("");
                    $("#street_number").css({"background-color":"white"});
                }


}
function locality()
{
 var onlyNumber=/^[0-9]*$/gm;
    var onlyletter=/^[A-Za-z ]+$/;
     $("#span_ville").css({"color":"red"});

if($("#locality").val()=="")
{
   $("#span_ville").html("       Champ obligatoire"); 
      $("#locality").css({"background-color": "#ff7f7f"}); 
}
else if($("#locality").val().match(onlyletter)==null)
                {
                    $("#span_ville").html("Que des lettres !");
                    $("#locality").css({"background-color":"#ff7f7f"});
              
               
                }
                else
                {
  $("#span_ville").html("");
                    $("#locality").css({"background-color":"white"});
                }


}
function telephone()
{
 var onlyNumber=/^[0-9]*$/gm;
    var onlyletter=/^[A-Za-z]+$/;
     $("#span_telephone").css({"color":"red"});

if($("#telephone").val()=="")
{
   $("#span_telephone").html("       Champ obligatoire"); 
      $("#telephone").css({"background-color": "#ff7f7f"}); 
}
else if($("#telephone").val().match(onlyNumber)==null)
                {
                    $("#span_telephone").html("Que des chiffres !");
                    $("#telephone").css({"background-color":"#ff7f7f"});
              
               
                }
                else
                {
  $("#span_telephone").html("");
                    $("#telephone").css({"background-color":"white"});
                }


}
function age()
{
 var onlyNumber=/^[0-9]*$/gm;
    var onlyletter=/^[A-Za-z]+$/;
     $("#span_age").css({"color":"red"});

if($("#age").val()=="")
{
   $("#span_age").html("       Champ obligatoire"); 
      $("#age").css({"background-color": "#ff7f7f"}); 
}
else if($("#age").val().match(onlyNumber)==null)
                {
                    $("#span_age").html("Que des chiffres !");
                    $("#age").css({"background-color":"#ff7f7f"});
              
               
                }
                else
                {
  $("#span_age").html("");
                    $("#age").css({"background-color":"white"});
                }


}
function fax()
{
 var onlyNumber=/^[0-9]*$/gm;
    var onlyletter=/^[A-Za-z]+$/;
     $("#span_fax").css({"color":"red"});

if($("#fax").val()=="")
{
   $("#span_fax").html("       Champ obligatoire"); 
      $("#fax").css({"background-color": "#ff7f7f"}); 
}
else if($("#fax").val().match(onlyNumber)==null)
                {
                    $("#span_fax").html("Que des chiffres !");
                    $("#fax").css({"background-color":"#ff7f7f"});
              
               
                }
                else
                {
  $("#span_telephone").html("");
                    $("#telephone").css({"background-color":"white"});
                }


}
function zip()
{
 var onlyNumber=/^[0-9]*$/gm;
    var onlyletter=/^[A-Za-z]+$/;
     $("#span_zip").css({"color":"red"});

if($("#zip").val()=="")
{
   $("#span_zip").html("       Champ obligatoire"); 
      $("#zip").css({"background-color": "#ff7f7f"}); 
}
else if($("#zip").val().match(onlyNumber)==null)
                {
                    $("#span_zip").html("Que des lettres !");
                    $("#zip").css({"background-color":"#ff7f7f"});
              
               
                }
                else
                {
  $("#span_zip").html("");
                    $("#zip").css({"background-color":"white"});
                }


}
function postal_code()
{
  var onlyNumber=/^[0-9]*$/gm;
    var onlyletter=/^[A-Za-z]+$/;
     $("#span_postal_code").css({"color":"red"});

if($("#postal_code").val()=="")
{
   $("#span_postal_code").html("       Champ obligatoire"); 
      $("#postal_code").css({"background-color": "#ff7f7f"}); 
}
else if($("#postal_code").val().match(onlyNumber)==null)
                {
                    $("#span_postal_code").html("Que des chiffres !");
                    $("#postal_code").css({"background-color":"#ff7f7f"});
              
               
                }
                else
                {
  $("#span_postal_code").html("");
                    $("#postal_code").css({"background-color":"white"});
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


function verif(event)
    {
    var y=fax()+mdp()+confirm()+telephone()+zip();

        
        
        if(y==0)
     {  $("#div1").fadeIn(3000);
                    $("#div1").css({"display":"inherit"});
                    setTimeout(function(){$("#div1").fadeOut(3000); }, 4000);
      
     

     }    
    else
        {          
                event.preventDefault();
        }

}











$("#nom").keyup(nom);
$("#age").keyup(age);
$("#locality").keyup(locality);
$("#street_number").keyup(street_number);
$("#prenom").keyup(prenom);
$("#telephone").keyup(telephone);
$("#fax").keyup(fax);
$("#zip").keyup(zip);

$("#email_id").keyup(verif_mail);


$("#mdp").keyup(mdp);
$("#ConfirmPass").keyup(confirm);


$("#notes").keyup(notes);


$("#postal_code").keyup(postal_code);

$("#submit").click(verif);

});