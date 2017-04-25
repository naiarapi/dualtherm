$(document).ready(function(){
        
    $('#scroll').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
	 AOS.init();
         
    $("#accepto b").click(function(){window.open("http://www.domusateknik.com/es/politica-de-privacidad");});

});

    function revFormulario(){
    
        $(".form-errormsg").hide();
        $(".cform-errormsg").hide();
        
        if ($(".nombre").val()==""){
                $(".cnombre .form-errormsg").show(200);
                $(".nombre").focus();
                return 0;
        }else if (email_("email")==0){
                $(".cemail .form-errormsg").show(200);
                $("#email").focus();
                return 0;
        }else if ($(".codigopostal").val()==""){
                $(".ccodigopostal .form-errormsg").show(200);
                $(".codigopostal").focus();
                return 0;
        }else{
            if($('#checkox').is(':checked')){
                document.contactForm.submit();
            }else{
                $(".cform-errormsg").show(200);
            }
        }
            
    }
    
    function email_(id_obj){
        mail_c = document.getElementById(id_obj).value;
        con1="false";con2="false";
        for(i=0;i < mail_c.length;i++){
            if(mail_c.substr(i,1)=="@"){con1="true";}
            if(mail_c.substr(i,1)=="."){con2="true";}
        }
        if(con1=="true" && con2=="true"){return 1;}else{return 0;}
    }
