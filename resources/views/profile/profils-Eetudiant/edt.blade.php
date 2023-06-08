<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon emploi du temps</title>
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
        <li>MESNOTES</li>
    </ul>


    <section>

        <!-- <ul class="listMenu">
            <li>Mes Notes </li>
            <li > Mon emploi de temps </li>
            <li>Mes projets tutorés </li>
            <li> Les offres</li>
            <li>Mes candidature</li>
        </ul> -->
        <ul class="listMenu">
            <li><a href="Mesnotes">Mes Notes </a> </li>
            <li style="background:white; color:#606c38;"><a href="edt"> Mon emploi de temps </a> </li>
            <li><a href="MesPT">Mes projets tutorés </a> </li>
            <li><a href="offresAlternance">Les offres d'alternance </a> </li>
            <li><a href="Mescandidatures">Mes candidatures</a></li>
        </ul>
        <div class="container w-2/3 mx-auto my-4">
            <h1>Emploi du temps étudiant</h1>
            <br>

            <table>
                <tr>
                    <th>Heure</th>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                </tr>
                <tr>
                    <td>8:00 - 9:30</td>
                    <td>Informatique 101</td>
                    <td></td>
                    <td>Informatique 201</td>
                    <td>Informatique 101</td>
                    <td></td>
                </tr>
                <tr>
                    <td>9:30 - 11:00</td>
                    <td>Informatique 101</td>
                    <td>Informatique 201</td>
                    <td></td>
                    <td>Informatique 101</td>
                    <td>Informatique 201</td>
                </tr>
                <tr>
                    <td>11:00 - 12:30</td>
                    <td></td>
                    <td></td>
                    <td>Informatique 201</td>
                    <td>Informatique 101</td>
                    <td>Informatique 201</td>
                </tr>
                <tr>
                    <td>11:00 - 12:30</td>
                    <td></td>
                    <td></td>
                    <td>Informatique 201</td>
                    <td>Informatique 101</td>
                    <td>Informatique 201</td>
                </tr>
                <tr>
                    <td>11:00 - 12:30</td>
                    <td></td>
                    <td></td>
                    <td>Informatique 201</td>
                    <td>Informatique 101</td>
                    <td>Informatique 201</td>
                </tr>

            </table>

        </div>









    </section>







</body>
@include('layouts.footer')


</html>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

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
        margin: auto 114px;
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