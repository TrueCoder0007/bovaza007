<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleNew007.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Dashboard</title>
    


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Day');
      data.addColumn('number', 'Guardians of the Galaxy');
      data.addColumn('number', 'The Avengers');
      data.addColumn('number', 'Transformers: Age of Extinction');

      data.addRows([
        [1,  37.8, 80.8, 41.8],
        [2,  30.9, 69.5, 32.4],
        [3,  25.4,   57, 25.7],
        [4,  11.7, 18.8, 10.5],
        [5,  11.9, 17.6, 10.4],
        [6,   8.8, 13.6,  7.7],
        [7,   7.6, 12.3,  9.6],
        [8,  12.3, 29.2, 10.6],
        [9,  16.9, 42.9, 14.8],
        [10, 12.8, 30.9, 11.6],
        [11,  5.3,  7.9,  4.7],
        [12,  6.6,  8.4,  5.2],
        [13,  4.8,  6.3,  3.6],
        [14,  4.2,  6.2,  3.4]
      ]);

      var options = {
        chart: {
          title: 'Box Office Earnings in First Two Weeks of Opening',
          subtitle: 'in millions of dollars (USD)'
        },

        axes: {
          x: {
            0: {side: 'top'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>

    <!---------------------------------------------------------------------------------------------------------------------->

    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Move', 'Percentage'],
          ["King's pawn (e4)", 44],
          ["Queen's pawn (d4)", 31],
          ["Knight to King 3 (Nf3)", 12],
          ["Queen's bishop pawn (c4)", 10],
          ['Other', 3]
        ]);

        var options = {
          legend: { position: 'none' },
          chart: {
            title: 'Chess opening moves',
            subtitle: 'popularity by percentage' },
          axes: {
            x: {
              0: { side: 'top', label: 'White to move'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>

    <!--------------------------------------------------------------------------------------------------->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

    <style>
        *{
            margin:0px;
            padding:0px;
            box-sizing:border-box;
        }

        body{
            min-height:100vh;
            scroll-behavior:smooth;
            padding-top:90px;
            background-color:#ededed;  
        }
    </style>

</head>

<body onload="myFunction()">


            <div class="menu-dashboard">

                    <div class="logo-menu">
                        <img src="logo/bovaza-sans-fond.png">
                    </div><br>

                <ul class="menuDad">

                    <div class="btn-tableauBord adjustMenu">
                        <i class="fa-sharp fa-solid fa-house"></i><!--<i class="fa-solid fa-chevron-right right icon-comptePrepaye delete-btn">-->
                        <li class="delete-btn">Tableau de bord</li>
                        <i class="fa-solid fa-angle-right btn-Menu"></i>
                    </div>

                    <div class="btn-ticket">
                        <i class="fa-solid fa-list"></i>
                        <li class="delete-btn">Tickets</li>
                        <i class="fa-solid fa-angle-right btn-Menu"></i>
                    </div>
                    <!--<div class="btn-monitoring"><i class="fa-brands fa-watchman-monitoring"></i><li>Monitoring</li></div>-->
                    <div class="btn-utilisateur">
                        <i class="fa-solid fa-user"></i>
                        <li class="delete-btn">Utilisateurs</li>
                        <i class="fa-solid fa-angle-right btn-Menu"></i>
                    </div>

                    <div class="btn-rapport">
                        <i class="fa-solid fa-scroll"></i>
                        <li class="delete-btn">Finances
                            <ul class="subMenu-rapport">
                                <!--<li class="btn-dataille">Cumul Détaillé</li>-->
                                <li>Rapport Comptable</li>
                                <li>Résumé Accumulé</li>
                                <li>Résultats par Loterie</li>
                                <li>Tickets Gagnants</li>
                                <li>Paris Gagnants</li>
                                <li>Liste des Ventes</li>
                                <li>Suivi des Ventes</li>
                            </ul>
                        </li>
                        <i class="fa-solid fa-angle-right btn-Menu"></i>
                    
                </div>
                    
                    <div class="btn-paiement">
                        <i class="fa-solid fa-money-bill-wave"></i>
                        <li class="delete-btn">Paiements<br>
                        <ul class="subMenu-paiement">
                            <li>Gestion des Paiements</li>
                            <li>Activité des Paiements</li>
                        </ul>
                    </li>
                    <i class="fa-solid fa-angle-right btn-Menu"></i>
        
                </div>
                    
                    <div class="btn-gestionProduit">
                        <i class="fa-sharp fa-solid fa-circle-nodes"></i>
                            <li class="delete-btn">Produits<br>
                                <ul class="subMenu-gestion">
                                    <li>Prix des Produits</li>
                                </ul>
                            </li>
                        <i class="fa-solid fa-angle-right btn-Menu"></i>
                    </div>

                    <div class="btn-agent">
                        <i class="fa-solid fa-bag-shopping"></i>
                            <li class="delete-btn">Agents
                                <ul class="subMenu-agent">
                                    <li>Ajouter des Agents</li>
                                    <li>Afficher des Agents</li>
                                </ul>
                            </li>
                        <i class="fa-solid fa-angle-right btn-Menu"></i>
                    </div>

                    <div class="btn-resultat">
                        <i class="fa-solid fa-square-poll-vertical"></i>
                            <li class="delete-btn">Résultats<br>
                                <ul class="subMenu-resultat">
                                    <li>Afficher les Résultats</li>
                                </ul>
                             </li>
                             <i class="fa-solid fa-angle-right btn-Menu"></i>
                        
                    </div>

                    <div class="btn-comptePrepaye"><i class="fa-solid fa-comment-dollar"></i>
                        <li class="delete-btn">Compte Prépayé<br>
                            <ul class="subMenu-comptePrepaye">
                                <li>Gérer Compte Prépayé</li>
                                <li>Transactions</li>
                            </ul>
                        </li>
                        <i class="fa-solid fa-angle-right btn-Menu"></i>
                    </div>

                </ul>

            </div>
    
    

        
        <div class="div-dashboard">

            <!--<div class="panel-dashboard">-->

                <header class="div-menu">

                <i class="fa-solid fa-bars icon-menu"></i>

                        <div class="div-icon-user">
                           
                           <img src="logo/photo-profil.png">
                       
                           <ul>
                                <li>Admin</li>
                            </ul>
                        </div>

                </header>
                
                <div class="panel-tableauBord">

                    <div class="Divtext-TableauBord">
                        <h2>TABLEAU BORD</h2>
                    </div>

                    <div class="divCard">

                        <div class="balance-card">
                            <div class="text-balance">
                                <h2>$45000</h2><br>
                                <p>BALANCE TOTALE</p>
                            </div>

                            <i class="fa-solid fa-sack-dollar"></i>
                        </div>

                        <div class="utilisateur-card">
                            <div class="text-balance">
                                <h2>50</h2><br>
                                <p>UTILISATEUR</p>
                            </div>

                            <i class="fa-solid fa-user"></i>
                        </div>


                        <div class="prepaye-card">
                            <div class="text-balance">
                                <h3>30</h3><br>
                                <p>COMPTE PRÉPAYÉ</p>
                            </div>

                            <i class="fa-solid fa-users"></i>
                        </div>

                        <div class="profit-card">
                            <div class="text-balance">
                                <h3>$12000</h3><br>
                                <p>PROFIT</p>
                            </div>

                            <i class="fa-solid fa-dollar-sign"></i>
                        </div>

                    </div>

                    <!--------------------------------------DONE DIV CARD-------------------------------------------------------------------------->

                    <div class="divGraph">

                        <div class="divLineTopx">
                            <div id="line_top_x" style="width:100%;height:100%"></div>
                        </div>
                        
                        <div class="divTopx">
                             <div id="top_x_div" style="width:100%;height:100%"></div>
                        </div>
                       
                    </div>

                    <!---------------------------------------DONE DIV GRAPH-------------------------------------------------------------------------->
                    <div class="divTableau">

                        <div class="tableau">
                            <table>
                                <caption>Liste des Clients</caption>
                                <tr>
                                    <th>Entreprise</th>
                                    <th>Adresse</th>
                                    <th>Nom d'Utilisateur</th>
                                    <th>Tickets</th>
                                    <th>Prix</th>
                                    <th>Ventes Tot.</th>
                                    <th>Net</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>Alfreds Futterkiste</td>
                                    <td>Maria Anders</td>
                                    <td>Germany</td>
                                    <td>5</td>
                                    <td>500</td>
                                    <td>2500</td>
                                    <td>800</td>
                                    <td>
                                        <a href="#">
                                            <i class="fa-solid fa-pen btn-actualisation"></i>
                                            <i class="fa-solid fa-trash btn-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Centro comercial Moctezuma</td>
                                    <td>Francisco Chang</td>
                                    <td>Mexico</td>
                                    <td>5</td>
                                    <td>500</td>
                                    <td>2500</td>
                                    <td>800</td>
                                    <td>
                                        <a href="#">
                                            <i class="fa-solid fa-pen btn-actualisation"></i>
                                            <i class="fa-solid fa-trash btn-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ernst Handel</td>
                                    <td>Roland Mendel</td>
                                    <td>Austria</td>
                                    <td>5</td>
                                    <td>500</td>
                                    <td>2500</td>
                                    <td>800</td>
                                    <td>
                                        <a href="#">
                                            <i class="fa-solid fa-pen btn-actualisation"></i>
                                            <i class="fa-solid fa-trash btn-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Island Trading</td>
                                    <td>Helen Bennett</td>
                                    <td>UK</td>
                                    <td>5</td>
                                    <td>500</td>
                                    <td>2500</td>
                                    <td>800</td>
                                    <td>
                                        <a href="#">
                                            <i class="fa-solid fa-pen btn-actualisation"></i>
                                            <i class="fa-solid fa-trash btn-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Laughing Bacchus Winecellars</td>
                                    <td>Yoshi Tannamuri</td>
                                    <td>Canada</td>
                                    <td>5</td>
                                    <td>500</td>
                                    <td>2500</td>
                                    <td>800</td>
                                    <td>
                                        <a href="#">
                                            <i class="fa-solid fa-pen btn-actualisation"></i>
                                            <i class="fa-solid fa-trash btn-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Magazzini Alimentari Riuniti</td>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                    <td>5</td>
                                    <td>500</td>
                                    <td>2500</td>
                                    <td>800</td>
                                    <td>
                                        <a href="#">
                                            <i class="fa-solid fa-pen btn-actualisation"></i>
                                            <i class="fa-solid fa-trash btn-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>

                            <div class="tableauGraph"> 
                                <div id="curve_chart"></div>
                            </div>
                           
            
                    </div>

                    

                </div>




            <!------------------------------------------------------------PANEL-TICKET----------------------------------------------------------------->

                <div class="panel-ticket"></div>



        <!--------------------------------------------------------------PANEL GESTION DES UTILISATEURS--------------------------------------------------------->

                <div class="panel-utilisateur"></div>
      

         <!-----------------------------------------------------------PANEL RAPPORTS FINANCIERS------------------------------------------------------------------------>
               
                <div class="panel-RapportFinancier"></div>


         <!----------------------------------------------------------------PANEL PAIEMENT-------------------------------------------------->   

                <div class="panel-paiement"></div>

         <!----------------------------------------------------------------PANEL GESTION DES PRODUITS-------------------------------------------------->         
                <div class="panel-gestionProduit"></div>

         <!----------------------------------------------------------------PANEL AGENT--------------------------------------------------> 
                <div class="panel-agent"></div>
         <!----------------------------------------------------------------PANEL RESULTAT--------------------------------------------------> 
                <div class="panel-resultat"></div>
         <!----------------------------------------------------------------PANEL COMPTE PREPAYE--------------------------------------------------> 
                <div class="panel-comptePrepaye"></div>
                

    </div>

</body>

<script>
    /*let panelTicket = document.querySelector('.panel-ticket');
    let panelTableauBord = document.querySelector('.panel-tableauBord');
    let panelUtilisateur = document.querySelector('.panel-utilisateur');

    function myFunction() {
        panelTableauBord.style="display:block";
        panelTicket.style="display:none";
        panelUtilisateur.style="display:none";
    }*/
</script>

<script src="appJs00.js"></script>

</html>