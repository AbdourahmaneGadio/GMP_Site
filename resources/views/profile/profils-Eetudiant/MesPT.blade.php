
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes projets tutorés</title>
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
        <li>Mes projets  tutorés</li>
    </ul>


    <section>

        <ul class="listMenu">
            <li><a href="Mesnotes">Mes Notes </a></li>
            <li><a href="edt"> Mon emploi de temps </a> </li>
            <li  style="background:white; color:#606c38;"  ><a href="MesPT">Mes projets tutorés </a>  </li>
            <li> <a href="offresAlternance">Les offres</a></li>
            <li><a href="Mescandidatures">Mes candidatures</a></li>
        </ul>










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