/* imprime o pdf da os final */
const btn_imp=document.getElementsById("imp_btn")

imp_btn.addEventlistener("click", (evet)=>{
    window.print()
})

/* busca no campo de informções do cliente */

function buscaCliente(){
    telefone = document.getElementsByName("telefone1").value;

    alert("o telefone é ". telefone);
}