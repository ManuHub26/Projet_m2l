window.onload = function erreur() 
{  
    document.getElementById("button_connect").onclick = function erreur()
     {    
        if (document.getElementById("mdp").value=="" || document.getElementById("email").value=="") 
        {
          alert("les 2 champs doivent être remplis") ;    
       }
    } 

}
