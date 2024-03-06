function calcular(){
    var codSuite, nomeSuite, valorDiarias, valorTotal;

    codSuite=document.frmOrcamento.slcSuite.selectedIndex;
    nomeSuite=document.frmOrcamento.slcSuite[codSuite].text;

    switch(codSuite){
        case 1:
            valorDiarias=956.00;
            break;
        case 2:
            valorDiarias=1189.00;
            break;
        case 3:
            valorDiarias=2499.00;
            break;
        case 4:
            valorDiarias=2980.00;
            break;
        default:
            valorDiarias=3112.00;
            break;
    }

    hospedes=parseInt(document.getElementById('hospedes').value);
    dias=parseInt(document.getElementById('dias').value);
    valorTotal=valorDiarias*dias;
    
    var i, refeicaoRecebe;
    for(i=0; i<document.frmOrcamento.rdRefeicao.lenght;i++){
        if(document.frmOrcamento.rdRefeicao[i].checked)
        break;
    }
    if (parseInt(document.frmOrcamento.rdRefeicao[i].value)==1)
        refeicaoRecebe = 67.81;
    else if (parseInt(document.frmOrcamento.rdRefeicao[i].value)==2)
        refeicaoRecebe = 135.12;
    else
        refeicaoRecebe = 199.68;
    
    valorTotal += refeicaoRecebe;

    //checkbox
    var checkAdc=0;
    if(document.getElementById('traslado').checked){
       checkAdc += 120.00;
    }
    if(document.getElementById('citytour').checked){
        checkAdc+= 230.00;
    }
    if (document.getElementById('passeio').checked){
        checkAdc=+80.00;
    }

    valorTotal+=checkAdc;

    document.getElementById('nomeSuite').innerHTML="Suíte: "+nomeSuite; 
    document.getElementById('hospedes').innerHTML="Hóspedes: "+hospedes;
    document.getElementById('refeicaoRecebe').innerHTML="Valor da refeição: R$"+refeicaoRecebe;
    document.getElementById('checkAdc').innerHTML="Adicionais: R$"+checkAdc;
    document.getElementById('valorDiarias').innerHTML="Valor diária: R$"+valorDiarias;
    document.getElementById('valorTotal').innerHTML="Valor total: R$"+valorTotal;
}