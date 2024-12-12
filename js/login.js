const pass_field=document.querySelector('.pass-key');
const showBtn=document.querySelector('.show');
showBtn.addEventListener('click' , function() {
if(pass_field.type ==="Password"){
pass_field.type = "text";   
showBtn.textContent="Hide";
showBtn.style.color="#3498db";
}else{
pass_field.type = "text";   
showBtn.textContent="Show";
showBtn.style.color="#222";

}
});