/*function carregaCidades(campo){
    var form=document.getElementsByTagName("form")[0];
    form.setAttribute("action"," ");
    form.submit();
};*/

document.addEventListener("DOMContentLoaded",()=>{
    var selectTipos= document.getElementById("categoria");
    selectTipos.addEventListener("change", carregaCategorias);
});
const pegaValorTipo = () => document.getElementById("categoria").value;
  
let criaOptionsCategorias = (resposta)   =>{
    var selectTipos = document.getElementById("tipos");
    limpaSelect(selectTipos);
    console.log(resposta);
    for(var categoria of resposta){
        var optiontipos = document.createElement("option");
        optiontipos.setAttribute("value", tipos);
        optiontipos.textContent=categoria;
        selectTipos.appendChild(optiontipos);
    }
}
function limpaSelect(campo){
    var opt;
    while(opt = campo.firstChild){
        campo.removeChild(opt);
    }
}
function carregaCategorias(){
    //var corpo = {"estado": pegaValorEstado()};
    var formulario=new FormData();
    formulario.append("categoria",pegaValorTipo());
    fetch("http://localhost/sophia%20bini/Aula%2006/categorias.php",{
        mode: 'no-cors',
        method:"POST", headers:{"content-type":"application-json",  "Access-Control-Allow-Origin": 'origin-list'},body:formulario})
        .then(async resposta=>{
            var tipos=await resposta.json();
            criaOptionsCategorias(tipos);
        })
        .catch(error=>console.log(error));
}