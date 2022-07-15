function enviaForm () {
  const nome = document.getElementById('nome');
  const descricao = document.getElementById('descricao');
  const dataInicio = document.getElementById('dataInicio');
  const dataEncerramento = document.getElementById('dataEncerramento');
  const tipoEvento = document.getElementById('tipoEvento');
  if(checkForNulls(nome.value,descricao.value,dataInicio.value,dataEncerramento.value,tipoEvento.value)){
    alert("Preencha todos os dados");
    return;
  }
  const form = document.getElementById('eventForm')
  form.submit();
}

function checkForNulls(...formData) {
  for(data of formData) {
    console.log(data)
    if(!data) return true;
  }
  return false;
}