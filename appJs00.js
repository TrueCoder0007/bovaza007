let iconMenu = document.querySelector('.icon-menu');
let menuDashboard = document.querySelector('.menu-dashboard');
let panelDashboard = document.querySelector('.panel-dashboard');
/*************************************************************************/

let btnRapport = document.querySelector('.btn-rapport');
let btnDetaille = document.querySelector('.btn-dataille');
let menuRapport = document.querySelector('.subMenu-rapport');
let iconRapport = document.querySelector('.icon-rapport');
/**************************************************************************/
let btnPaiement = document.querySelector('.btn-paiement');
let menuPaiement = document.querySelector('.subMenu-paiement');
let iconPaiement = document.querySelector('.icon-paiement');
/**************************************************************************/
let btnGestionProduit = document.querySelector('.btn-gestionProduit');
let menuGestion = document.querySelector('.subMenu-gestion');
let iconGestion = document.querySelector('.icon-gestion');
/**************************************************************************/
let btnAgent = document.querySelector('.btn-agent');
let menuAgent = document.querySelector('.subMenu-agent');
let iconAgent = document.querySelector('.icon-agent');
/**************************************************************************/
let btnResultat = document.querySelector('.btn-resultat');
let menuResultat = document.querySelector('.subMenu-resultat');
let iconResultat = document.querySelector('.icon-resultat');
/**************************************************************************/
let btnComptePrepaye = document.querySelector('.btn-comptePrepaye');
let menuComptePrepaye = document.querySelector('.subMenu-comptePrepaye');
let iconComptePrepaye = document.querySelector('.icon-comptePrepaye');
/*************************************************************************/
let btnTableauBord = document.querySelector('.btn-tableauBord');
let btnUtilisateur = document.querySelector('.btn-utilisateur');
/*************************************************************************/
let btnTicket = document.querySelector('.btn-ticket');
/***************************************************************************PAGES FOR BUTTON***************************************************/
//let panelTableauBord = document.querySelector('.panel-tableauBord');
/***************************************************************************PAGES FOR BUTTON***************************************************/
let panelTicket = document.querySelector('.panel-ticket');
let panelTableauBord = document.querySelector('.panel-tableauBord');
let panelUtilisateur = document.querySelector('.panel-utilisateur');
let panelRapportFinancier = document.querySelector('.panel-RapportFinancier');
let panelPaiement = document.querySelector('.panel-paiement');
let panelGestionProduit = document.querySelector('.panel-gestionProduit');
let panelAgent = document.querySelector('.panel-agent');
let panelResultat = document.querySelector('.panel-resultat');
let panelComptePrepaye = document.querySelector('.panel-comptePrepaye');
/***************************************************************************PAGES FOR BUTTON***************************************************/
let deleteBtn = document.querySelectorAll('.delete-btn');


function myFunction() {
    panelTableauBord.style="display:flex";
    panelPaiement.style="display:none";
    panelAgent.style="display:none";
    panelRapportFinancier.style="display:none";
    panelTicket.style="display:none";
    panelUtilisateur.style="display:none";
    panelGestionProduit.style="display:none";
    panelComptePrepaye.style="display:none";
    panelResultat.style="display:none";
}

iconMenu.onclick=function(){
    if(menuDashboard.style.width=="14%"){
        menuDashboard.style="width:60px;transition:0.5s";
        panelDashboard.style="width:90%;transition:0.5s;left:90px;background-color:white";
        for (let i = 0; i < deleteBtn.length; i++) {
            deleteBtn[i].style.display = "none";
          }
        
    }else if(menuDashboard.style.width="60px"){
        menuDashboard.style="width:14%;transition:0.5s";
        panelDashboard.style="width:80%;left:320px;background-color:white";
        /*menuDashboard.style="width:5vw";
        panelTableauBord.style="width:85vw";*/
        for (let i = 0; i < deleteBtn.length; i++) {
            deleteBtn[i].style.display = "block";
          }
    }
}

btnRapport.onclick=function(){
    panelRapportFinancier.style="display:flex";
    panelAgent.style="display:none";
    panelTableauBord.style="display:none";
    panelTicket.style="display:none";
    panelUtilisateur.style="display:none";
    panelGestionProduit.style="display:none";
    panelComptePrepaye.style="display:none";
    panelPaiement.style="display:none";
    panelResultat.style="display:none";
    alert('Brown'); 
}

/*************************************************************************/

btnPaiement.onclick=function(){
        panelPaiement.style="display:flex";
        panelAgent.style="display:none";
        panelTableauBord.style="display:none";
        panelRapportFinancier.style="display:none";
        panelTicket.style="display:none";
        panelUtilisateur.style="display:none";
        panelGestionProduit.style="display:none";
        panelComptePrepaye.style="display:none";
        panelResultat.style="display:none";
        alert('Yellow ');
}

/*************************************************************************/

btnGestionProduit.onclick=function(){
    panelGestionProduit.style="display:flex";
    panelPaiement.style="display:none";
    panelAgent.style="display:none";
    panelTableauBord.style="display:none";
    panelRapportFinancier.style="display:none";
    panelTicket.style="display:none";
    panelUtilisateur.style="display:none";
    panelComptePrepaye.style="display:none";
    panelResultat.style="display:none";
    alert('Purple')
}

/*************************************************************************/

btnAgent.onclick=function(){
    panelAgent.style="display:flex";
    panelResultat.style="display:none";
    panelPaiement.style="display:none";
    panelTableauBord.style="display:none";
    panelRapportFinancier.style="display:none";
    panelTicket.style="display:none";
    panelUtilisateur.style="display:none";
    panelGestionProduit.style="display:none";
    panelComptePrepaye.style="display:none";

    alert('LightGray')
}

/*************************************************************************/

btnResultat.onclick=function(){
    panelResultat.style="display:flex";
    panelPaiement.style="display:none";
    panelAgent.style="display:none";
    panelTableauBord.style="display:none";
    panelRapportFinancier.style="display:none";
    panelTicket.style="display:none";
    panelUtilisateur.style="display:none";
    panelGestionProduit.style="display:none";
    panelComptePrepaye.style="display:none";

    alert("Green")
}

/*************************************************************************/

btnComptePrepaye.onclick=function(){
    panelComptePrepaye.style="display:flex";
    panelPaiement.style="display:none";
    panelAgent.style="display:none";
    panelTableauBord.style="display:none";
    panelRapportFinancier.style="display:none";
    panelTicket.style="display:none";
    panelUtilisateur.style="display:none";
    panelGestionProduit.style="display:none";
    panelResultat.style="display:none";

    alert('Gray')
}

/**********************************************************BTN-TABLEAU_DE_BORD********************************/

btnTableauBord.onclick=function(){
    panelTableauBord.style="display:flex";
    panelPaiement.style="display:none";
    panelAgent.style="display:none";
    panelRapportFinancier.style="display:none";
    panelTicket.style="display:none";
    panelUtilisateur.style="display:none";
    panelGestionProduit.style="display:none";
    panelComptePrepaye.style="display:none";
    panelResultat.style="display:none";

    alert('Orange')
}

btnTicket.onclick=function(){
    panelTicket.style="display:flex";
    panelPaiement.style="display:none";
    panelAgent.style="display:none";
    panelTableauBord.style="display:none";
    panelRapportFinancier.style="display:none";
    panelUtilisateur.style="display:none";
    panelGestionProduit.style="display:none";
    panelComptePrepaye.style="display:none";
    panelResultat.style="display:none";

    alert('Blue')
   
}

btnUtilisateur.onclick=function(){
    panelUtilisateur.style="display:flex";
    panelPaiement.style="display:none";
    panelAgent.style="display:none";
    panelTableauBord.style="display:none";
    panelRapportFinancier.style="display:none";
    panelTicket.style="display:none";
    panelGestionProduit.style="display:none";
    panelComptePrepaye.style="display:none";
    panelResultat.style="display:none";

    alert('Pink')
}

/***************************************************************BTN-RAPPORT****************************************/
btnDetaille.onclick=function(){
    alert('oi')
}