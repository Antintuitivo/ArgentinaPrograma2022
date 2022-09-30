const formulario = document.getElementById('formulario');

const btn = document.getElementById('login');

if(formulario != null && btn != null){
  btn.addEventListener('click', function handleClick(){
    if(formulario.style.display === 'none'){
      //muestra el elemento si está escondido
      formulario.style.display = 'block';
    }else{
      //esconde el elemento si se muestra
      formulario.style.display = 'none';
    }
  })
}