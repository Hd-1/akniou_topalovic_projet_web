<script language="javascript">
    
    function Valider(){
        {
            var regex1 = /^[a-z]+[\-']?[[a-z]+[\-']?]*[a-z]+$/;
            var regex2 = /^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i;
            if(!regex1.test(email.value){
                alert('Nom ou prenom invalide');
                return false;
            }
            else if (!regex2.test(mail.value)){
                alert('email invalide');
                return false;
            }
            return true;
        }
        }
    }
</script>