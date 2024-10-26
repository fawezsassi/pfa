function alphanumerique(ch)
   {
		ch=ch.toUpperCase();
		i=0;
		verife=true;
		do
		  {
			if (     ((ch.charAt(i)>="A")&& (ch.charAt(i)<="Z")) ||  ((ch.charAt(i)>="0")&& (ch.charAt(i)<="9"))      )
			   {i++;}
			else
			   { verife=false;}
		  }
		while (   (verife) && (i<ch.length)   );
		return verife;
	}

    function Numerique(Ch){
        for(var i=0; i<Ch.length; i++){
          if ((Ch.charAt(i)<"0") || (Ch.charAt(i)>"9")) return false;
        }
        return true; 
      }


function alphabetique(ch)
   {
		ch=ch.toUpperCase();
		i=0;
		verife=true;
		do
		  {
			if (     (ch.charAt(i)>="A")&& (ch.charAt(i)<="Z")      )
			   {i++;}
			else
			   { verife=false;}
		  }
		while (   (verife) && (i<ch.length)   );
		return verife;
	}


    function test(){
    
     email=form.email.value; 
       if (     (email.length>50) || (email.indexOf("@")==-1) || (email.indexOf(".")==-1)	||  ((email.indexOf("."))< (mail.indexOf("@")))    )
             { alert("Mail \n |-----> Invalide ");
               return false;}
       else
             {
                    ch1=email.substr(0,email.indexOf("@"));
                   if (  (! alphanumerique(ch1)) || (ch1.length<3)  )
                        { alert("Mail \n |-----> Invalide ");
                          return false;}
                   else
                       {
                          ch2=email.substring(email.indexOf("@")+1, email.indexOf("."));
                          if (  (! alphanumerique(ch2)) || (ch2.length<3)  )
                               { alert("Mail \n |-----> Invalide");
                                 return false;}
                           else
                               { 
                                 ch3=email.substr(email.indexOf(".")+1);
                                 if (  (! alphabetique(ch3)) || (ch3.length<2) || (ch3.length>4)  )
                                      { alert("Mail \n |-----> Invalide ");
                                        return false;}

                                   
             
                         
                }   }    } }  
            
                function test1(){
               username=form.username.value;
                      chh=username;
                    if (username.length<3 || username.length>30 || !alphabetique(chh)){
                        alert('Nom invalide') ; 
                        return false;
                     }  }
            function test2(){
             tel=form.tel.value;
                   chhh=tel;
                   if(tel.length!=8 || tel.charAt(0)==0 || !Numerique(chhh)){
                    alert('Tel invalide') ; return false;
                } }
                    
            
    