const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('formulaire');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});


/*controle sur le sign up*/
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

	function testt(){
		/* -----------Contrôle sur le champ Mail ------------------ */
	   mail=formm.mail.value; 
	   if (     (mail.length>50) || (mail.indexOf("@")==-1) || (mail.indexOf(".")==-1)	||  ((mail.indexOf("."))< (mail.indexOf("@")))    )
			 { alert("Mail \n |-----> Invalide : Le Mail doit  vérifier ces contraintes: <-----| \n---> longueur <=50\n---> Arobase (@) existe\n---> Le point (.) existe\n---> La position du point (.) > La position du arobase(@)\n|<-------------------------------------------------------------->|");
			   return false;}
	   else
			 {
					ch1=mail.substr(0,mail.indexOf("@"));
				   if (  (! alphanumerique(ch1)) || (ch1.length<3)  )
						{ alert("Mail  Invalide :   La partie ch1 de Mail doit être Alphanumérique\n---> La longueur de ch1 de Mail doit être >=3 ");
						  return false;}
				   else
					   {
						  ch2=mail.substring(mail.indexOf("@")+1,mail.indexOf("."));
						  if (  (! alphanumerique(ch2)) || (ch2.length<3)  )
							   { alert("Mail Invalide :  La partie ch2 de Mail doit être Alphanumérique\n---> La longueur de ch2 de Mail doit être >=3 ");
								 return false;}
						   else
							   { 
								 ch3=mail.substr(mail.indexOf(".")+1);
								 if (  (! alphabetique(ch3)) || (ch3.length<2) || (ch3.length>4)  )
									  { alert("Mail Invalide :   La partie ch3 de Mail doit être Alphabétique\n---> La longueur de ch3 de Mail doit être dans [2..4] ");
										return false;}
							   }
						  }
			 } }
function test22(){
				namee=formm.name.value;
					   chh=namee;
					 if (namee.length<3 || namee.length>30 || !alphabetique(chh)){
						 alert('Nom invalide') ; 
						 return false;
					  }  }
 function test11(){
			  pwd=formm.pwd.value;
					chhhh=pwd;
					if (pwd.length!=6)
					{alert("Mot de Passe  Invalide : Une chaine de 6 caractères\n");
					  return false;}	
				   else
					{
					   nb_minus=0; nb_chif=0; nb_majus=0;
					   for(i=0;i<6;i++)
						  {
							   if (   (pwd.charAt(i)>="A") &&  (pwd.charAt(i)<="Z")    )
								{ nb_majus++; }
							   if (   (pwd.charAt(i)>="a") &&  (pwd.charAt(i)<="z")    )
								{ nb_minus++; }
							   if (   (pwd.charAt(i)>="0") &&  (pwd.charAt(i)<="9")    )
								{ nb_chif++; }
						  }
					   if (   (nb_chif==0) ||  (nb_minus==0)  ||  (nb_majus==0)    )
						 {alert("Mot de Passe \n Invalide :  comporte au moins une lettre majuscule, une lettre minuscule et un chiffre");
						   return false;}
					} }
/*fin controle sign up*/
/*debut controle sign in*/
function testtt(){
						/* -----------Contrôle sur le champ Mail ------------------ */
					   mail=formu.mail.value; 
					   if (     (mail.length>50) || (mail.indexOf("@")==-1) || (mail.indexOf(".")==-1)	||  ((mail.indexOf("."))< (mail.indexOf("@")))    )
							 { alert("Mail \n |-----> Invalide : Le Mail doit  vérifier ces contraintes: <-----| \n---> longueur <=50\n---> Arobase (@) existe\n---> Le point (.) existe\n---> La position du point (.) > La position du arobase(@)\n|<-------------------------------------------------------------->|");
							   return false;}
					   else
							 {
									ch1=mail.substr(0,mail.indexOf("@"));
								   if (  (! alphanumerique(ch1)) || (ch1.length<3)  )
										{ alert("Mail  Invalide :   La partie ch1 de Mail doit être Alphanumérique\n---> La longueur de ch1 de Mail doit être >=3 ");
										  return false;}
								   else
									   {
										  ch2=mail.substring(mail.indexOf("@")+1,mail.indexOf("."));
										  if (  (! alphanumerique(ch2)) || (ch2.length<3)  )
											   { alert("Mail Invalide :  La partie ch2 de Mail doit être Alphanumérique\n---> La longueur de ch2 de Mail doit être >=3 ");
												 return false;}
										   else
											   { 
												 ch3=mail.substr(mail.indexOf(".")+1);
												 if (  (! alphabetique(ch3)) || (ch3.length<2) || (ch3.length>4)  )
													  { alert("Mail Invalide :   La partie ch3 de Mail doit être Alphabétique\n---> La longueur de ch3 de Mail doit être dans [2..4] ");
														return false;}
											   }
										  }
							 } }
 function test111(){
		pwd=formu.pwd.value;
				 chhhh=pwd;
				if (pwd.length!=6)
					{alert("Mot de Passe  Invalide : Une chaine de 6 caractères\n");
						return false;}	
							else
				{
				nb_minus=0; nb_chif=0; nb_majus=0;
						for(i=0;i<6;i++)
						{
							 if (   (pwd.charAt(i)>="A") &&  (pwd.charAt(i)<="Z")    )
									  { nb_majus++; }
								 if (   (pwd.charAt(i)>="a") &&  (pwd.charAt(i)<="z")    )
										  { nb_minus++; }
									 if (   (pwd.charAt(i)>="0") &&  (pwd.charAt(i)<="9")    )
												  { nb_chif++; }
											}
										 if (   (nb_chif==0) ||  (nb_minus==0)  ||  (nb_majus==0)    )
										   {alert("Mot de Passe \n Invalide :  comporte au moins une lettre majuscule, une lettre minuscule et un chiffre");
											 return false;}
									  } }