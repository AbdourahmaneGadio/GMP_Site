<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
    @include('layouts.header')
    <div class="lienFormation">
        <h2>DépartementGMP -Genie Mecanique et Productique</h2>



    </div>

    <ul class="listLien">
        <li>ACCUEIL </li>
        <li> > </li>
        <li>ESPACE ETUDIANT </li>
        <li> > </li>
        <li>OFFRES D'ALTERNANCE</li>
    </ul>


    <section>

        <ul class="listMenu">
            <li>Mes Notes </li>
            <li> Mon emploi de temps </li>
            <li>Mes projets tutorés </li>
            <li style="background:white; color:#606c38;"> Les offres d'alternance</li>
            <li>Mes candidature</li>
        </ul>




        <div class="container w-2/3 mx-auto my-4">

            <!-- Filtres -->

            <div class="flex my-5 items-center">
                <span class="me-3">Filtrer par : </span>
                <span class="me-3">Département</span>
                <input type="text" name="inputDeptOffre" id="inputDeptOffre" minlength="5" maxlength="5">
            </div>

            <!-- Filtres -->

            <!-- Offres -->
            <div style="background-color: #E6E6E6" class="p-8 h-min mb-3 shadow-lg">
                <span>JUNIOR / EXPERIENCED SOFTWARE ENGINEER</span>
                <div id="nomEntreprise" class="flex">
                    <span style="color: #1813F4" class="me-3">TREKEA SAS</span>
                    <span style="color: #8988BC">93700 DRANCY</span>
                </div>
                <div id="descriptionPoste">
                    <div>
                    <span>Description du poste</span></div>
                    <div>
                    <span>EXPERIENCED SOFTWARE ENGINEER – HYBRID CLOUD (REMOTE FRANCE)</span></div>
                    <div>
                    <p>We design and market “FieldLogs”, an open Cloud, Mobile and Wearable
                        platform used to digitize a wide set
                        of enterprise technician-driven processes
                        (Aviation, Oil&Gas, Asset Management, etc.).
                    </p></div>
                </div>
            </div>
            <!-- Offres -->
        </div>

    </section>








</body>
@include('layouts.footer')


</html>
<style>
    section {
        min-height: 30vw;
        height: 100%;
        DISPLAY: flex;


    }

    ul.listLien {
        display: flex;
        padding: 18px;
        color: white;
        font-size: 13px;
        border-bottom: 1px solid;
        background: #606c38;
    }

    ul.listLien li {
        padding-left: 11px;
        position: relative;
        left: 7pc;
    }

    .lienFormation {
        background-color: #283618;
        padding: 19px;


    }

    .lienFormation h2 {
        color: white;
        position: relative;
        left: 7pc;
    }

    .listMenu {

        width: 18%;
        text-align: left;
        /* height: 100%; */
        background: #606c38;
        color: white;


    }

    .listMenu li {
        border-bottom: 1px solid white;
        padding: 15px;
        text-align: center;

    }


    div.menu {}
</style>