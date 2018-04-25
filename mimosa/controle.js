$(document).ready(function(){





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



}


return x;

}
function verif(event)
{

if(verif_mail()!=0)
{
	 event.preventDefault();


}
}


$("#email_id").keyup(verif_mail);
$("#connexion").click(verif);








});