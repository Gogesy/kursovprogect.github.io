
  clikvxod=0;
  errorvxod=0;
  clikregistrat=0;
  errorregistrat=0;
   clikvac=0;
  errorvac=0;


  function vxodin() {

if(formVx.loginvxod.value==""){ errorvxod=1;    formVx.loginvxod.style.color="red" ;      }
if(formVx.passvxod.value==""){  errorvxod=1;   formVx.passvxod.style.color="red" ;      }
 clikvxod=1;

 if(errorvxod==0)
 {alert("Вы вошли");}
else
if(errorvxod==1){alert("Не ввели Логин или Пароль");}
else
{alert("Не верен Логин или Пароль");}



}

function vxodpravc()
{

if(clikvxod==1)
{
if(formVx.loginvxod.value!=""){ errorvxod=0;    formVx.loginvxod.style.color="#6a5acd" ;      } else {errorvxod=1; formVx.loginvxod.style.color="red" ;}
if(formVx.passvxod.value!=""){  errorvxod=0;   formVx.passvxod.style.color="#6a5acd" ;      } else { errorvxod=1; formVx.passvxod.style.color="red" ; }
}
}

function registrat()
{
if(formPeg.namerefistrat.value==""){ errorregistrat=1;    formPeg.namerefistrat.style.color="red" ;      }
if(formPeg.surnamerefistrat.value==""){  errorregistrat=1;   formPeg.surnamerefistrat.style.color="red" ;      }
if(formPeg.loginregistrat.value==""){ errorregistrat=1;    formPeg.loginregistrat.style.color="red" ;      }
if(formPeg.pass1.value==""){  errorregistrat=1;   formPeg.pass1.style.color="red" ;      }
if( (formPeg.pass2.value!=formPeg.pass1.value)||(formPeg.pass2.value=="") ){  errorregistrat=1;   formPeg.pass2.style.color="red" ;  

erpas.style.display = "block"
    }

clikregistrat=1;

if(errorregistrat==0)
 {alert("Вы зарегестрированы");}
else
{alert("Вы ошиблись или не ввели данные ");}
}

function clossregistrat()
{
	formPeg.namerefistrat.style.color="#6a5acd" ; 
	formPeg.surnamerefistrat.style.color="#6a5acd" ; 
	formPeg.loginregistrat.style.color="#6a5acd" ; 
	formPeg.pass1.style.color="#6a5acd" ; 
	formPeg.pass2.style.color="#6a5acd" ; 
	clikregistrat==0;
	 erpas.style.display = "none";
}

function registratpravc()
{

if(clikregistrat==1)
{
if(formPeg.namerefistrat.value!="")  { errorregistrat=0;    formPeg.namerefistrat.style.color="#6a5acd" ;      }  else { errorregistrat=1;    formPeg.namerefistrat.style.color="red" ;      }  
if(formPeg.surnamerefistrat.value==""){  errorregistrat=1;   formPeg.surnamerefistrat.style.color="red" ;      } else { errorregistrat=0;    formPeg.surnamerefistrat.style.color="#6a5acd" ;      }
if(formPeg.loginregistrat.value==""){ errorregistrat=1;    formPeg.loginregistrat.style.color="red" ;      } else { errorregistrat=0;    formPeg.loginregistrat.style.color="#6a5acd" ;      }
if(formPeg.pass1.value==""){  errorregistrat=1;   formPeg.pass1.style.color="red" ;      } else { errorregistrat=0;    formPeg.pass1.style.color="#6a5acd" ;      }
if( (formPeg.pass2.value!=formPeg.pass1.value)||(formPeg.pass2.value=="") ){  errorregistrat=1;   formPeg.pass2.style.color="red" ;    erpas.style.display = "block"; } else { errorregistrat=0;    formPeg.pass2.style.color="#6a5acd" ;   erpas.style.display = "none" ;  }
}
}


function otprav()
{


if(formBak.surname.value==""){ errorvac=1;    formBak.surname.style.color="red" ;      }
if(formBak.name.value==""){ errorvac=1;    formBak.name.style.color="red" ;      }
if(formBak.age.value==""&& ((formBak.age.value>0) || (formBak.age.value<100))){ errorvac=1;    formBak.age.style.color="red" ;      }

if(formBak.Gra.value==""){ errorvac=1;    formBak.Gra.style.color="red" ;      }
if(formBak.mail.value==""){ errorvac=1;    formBak.mail.style.color="red" ;      }

    

clikvac=1;

if(errorvac==0)
 {alert("Вы зарегестрированы");}
else
{alert("Вы не ввели или ввели некоректные данные ");}

	
}

function sbros()
{
	  formBak.surname.style.color="#6a5acd" ;      
  formBak.name.style.color="#6a5acd" ;     
   formBak.age.style.color="#6a5acd" ;      

 formBak.Gra.style.color="#6a5acd" ;      
   formBak.mail.style.color="#6a5acd" ; 

clikvac=0;
	
}

function vacpravc()
{


	if(clikvac==1)
{


if(formBak.surname.value!="")  { clikvac=0;    formBak.surname.style.color="#6a5acd" ;      }  else { clikvac=1; formBak.surname.style.color="red" ;      }  
if(formBak.name.value==""){  clikvac=1;   formBak.name.style.color="red" ;      } else { clikvac=0;    formBak.name.style.color="#6a5acd" ;      }
if(formBak.Gra.value==""){  clikvac=1;   formBak.Gra.style.color="red" ;      } else { clikvac=0;    formBak.Gra.style.color="#6a5acd" ;      }
if( formBak.mail.value=="") {  clikvac=1;   formBak.mail.style.color="red" ;    } else { clikvac=0;    formBak.mail.style.color="#6a5acd" ;   }

if((formBak.age.value=="") && ((formBak.age.value>0) || (formBak.age.value<100)) ) { clikvac=1;    formBak.age.style.color="red" ;      } else { clikvac=0;    formBak.age.style.color="#6a5acd" ;      }

}
	
}




