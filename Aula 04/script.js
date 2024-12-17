
function PegaValorEstado(){
 HEAD
    var selectEstado=document.getElementById("estado_nascimento");
    return selectEstado.options[selectEstado.selectedIndex].value;
    }
    function CriaOptionsCidade(resposta){
    var selectCidade=document.getElementById("cidade_nascimento");
    LimpaSelect(selectCidade);
    for (var cidade of resposta){
    var optioncid=document.createElement("option");
    optioncid.setAttribute("value",cidade);
    optioncid.textContent=cidade;
    selectCidade.appendChild(optioncid);
    }
    }
    function LimpaSelect(campos){
    var opt;
    while(opt=campos.firstChild){
    campos.removeChild(opt);
    
    }
    }
    function carregaCidades(){
       var formulario=new FormData(); 
       formulario.append("estado",PegaValorEstado())
        fetch("cidade.php",{method:"POST", headers:{"content_type":"application-json"},
        body:formulario})
        .then(async resposta=>{
        var cidades=await resposta.json();
        CriaOptionsCidade(cidades);
        })
        .catch(Error=>console.log(Error))
    }
    
    document.addEventListener("DOMContent",()=>{
    var selectEstado=document.getElementsByID("estado_nascimento");
    selectEstado.addEventListener("change",carregaCidades);
    });













var selectEstado=document.getElementById("estado_nascimento");
return selectEstado.options[selectEstado,selectIndex].value;

function CriaOptionsCidade(resposta){
var selectCidade=document.getElementById("cidade_nascimento");
LimpaSelect(selectCidade);
for (var cidade of resposta){
var optioncid=document.createmode("option");
optioncid.setattribute("value","cidade")
}
}
function LimpaSelect(campos){
var opt;
while(opt=campos.firstchild()){
campos.removechild(opt);

}
}
function carregaCidades(){
   var formulario=new Formdata(); 
    fetch("http://localhost/SOPHIABINI/Aula04/cidades.php",{method:"POST", headers:{"content_type":"application-json"},body:JSON.stringify(corpo)})
    .then(resposta=>{
    CriaOptionsCidade(resposta);
    })
    .catch(Error=>console.log(Error))
}

document.addEventListener("DOMContent",()=>{
var selectEstado=document.getElementsByID("estado_nascimento");
selectEstado.addEventListener("change",carregaCidades);
});
