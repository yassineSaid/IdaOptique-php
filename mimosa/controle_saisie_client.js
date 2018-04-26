$(document).ready(function(){

    

    
    
function username()
{
         var x=0;
         var username=$("#nom").val();
         var email=$("#email").val();

         var username_span=$("#nom_span").val();
    var onlyNumber=/^[0-9]*$/gm;
    var onlyletter=/^[A-Za-z]+$/;
    $("#nom_span").css({"color": "#ff7f7f"});
                            if(username=='')
                            {
                            $("#nom_span").html("       Champ obligatoire"); 
                            $("#nom").css({"background-color": "#ff7f7f"});                       
x++;
                            }
    
                            else if( username.match(onlyNumber)!=null || username.match(onlyletter)!=null )
                            {
                            $("#nom_span").html("       Nom d\'utilisateur doit contenir des chiffres et des lettres"); 
                            $("#nom).css({"background-color": "#ff7f7f"});                       
                                x++;       
                            }
        
                               
                 return x;
}       
    
function Email()
    {
       var x=0;
            var email=$("#email").val();
            var email_span=$("#email_span").val(); 
        var emailregex="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}";
            $("#email_span").css({"color": "#ff7f7f"});

        
            if(email=='')
                {
                    $("#email_span").html("        Champs obligatoire");
                    $("#email").css({"background-color":"#ff7f7f"});
                x++;
                }
                else if(email.match(emailregex)==null)
                {
                    $("#email_span").html("        Adresse mail non valide");
                    $("#email").css({"background-color":"#ff7f7f"});
                x++;
                }
         
     
    return x;
    }
    
    
    function Password()
    {
        var x=0;
        var  mdp=$("#motDePasse").val();
        if(mdp=='')
            {
                  $("#motDePasse").css({"background-color": "#ff7f7f"});
                  $("#mdp_span").css({"color": "#ff7f7f"});
                  $("#mdp_span").html("       Champs obligatoire "); 
x++;            }
        else{
            
                    $("#mdp_span").html(" "); 
                    $("#motDePasse").css({"background-color": ""});
            
            
            if(mdp.length>0&&mdp.length<6)
                {
                    $("#mdp_span").css({"color": "#ff7f7f"});
                    $("#mdp_span").html("       Mot de passe faible"); 
                    $("#motDePasse").css({"background-color": ""});

                }
            else if(mdp.length>6&&mdp.length<12)
                {
                    $("#mdp_span").css({"color": "#FFFF66"});
                    $("#mdp_span").html("       Mot de passe moyen"); 
                    $("#motDePasse").css({"background-color": "#FFFF66"});
                }
            
        else if(mdp.length>12)
            {
                   $("#mdp_span").css({"color": "#98FB98"});
                    $("#mdp_span").html("       Mot de passe fort"); 
                    $("#motDePasse").css({"background-color": "#98FB98"});
            }
            else{
                
            }   
        }
        return x;
    }
    
    
    
    
    
    function confirm()
    {
    var x=0;
        var  mdp=$("#ConfirmPass").val();
         $("#ee2").css({"color": "#ff7f7f"});
    if(mdp=='')
        {
                  $("#ConfirmPass").css({"background-color": "#ff7f7f"});
                  $("#ee2").html("       Champs obligatoire "); 
x++;        
        }
        else if(mdp!=$("#motDePasse").val())
            {
                
                             $("#ConfirmPass").css({"background-color": "#ff7f7f"});
                             $("#ee2").html("       Confirmation non valide"); 
x++;
            }
        else{
            
                            $("#ConfirmPass").css({"background-color": "#98FB98"});
                                $("#ee2").css({"color": "#98FB98"});
                             $("#ee2").html("       Mot de passe valide");   
        }
    
    return x;
    }
    

    
           function mailsent()
            {
                    $("#div1").fadeIn(3000);
                    $("#div1").css({"display":"inherit"});
                    setTimeout(function(){$("#div1").fadeOut(3000); }, 4000);
            }
    
 
function verif(event)
    {
    var y=username()+Email()+Password()+confirm();

        
        
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
   
$('#nom').keyup(username);
$('#email').keyup(email);
$('#motDePasse').keyup(Password);
$('#ConfirmPass').keyup(confirm);
    
$("#submit").click(verif);

    
});