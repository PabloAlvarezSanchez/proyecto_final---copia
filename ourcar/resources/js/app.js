require('./bootstrap');

const message_el=document.getElementById("messages");
const username_input=document.getElementById("username_input");
const message_input=document.getElementById("message_inpu");
const message_form=document.getElementById("message_form");

message_form.addEventListener('submit',function(e){
    e.preventDefault();
    let has_errors = false;

    if(username_input.value ==''){
        alert('Por favor introduce un nombre de usuario');
        has_errors=true;
    }

    if(message_input.value ==''){
        alert('Por favor introduce un mensaje');
        has_errors=true;
    }


    if(has_errors){
        return;
    }

    const options ={
        method:'post',
        url: '/enviar-mensaje',
        data:{
            username: username_input.value,
            message: message_input.value
        }
    }

    axios(options);
});

window.Echo.channel('chat')
.listen('.message', (e)=>{
    message_el.innerHTML+='<div class="message"><strong>'+e.username+'</strong>'+e.message+'</div>';
});




import Alpine from 'alpinejs';
import axios from 'axios';

window.Alpine = Alpine;

Alpine.start();
