<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes notes</title>
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


    <section id="section">

        <ul class="listMenu">
            <li style="background:white; color:#606c38;"><a href="Mesnotes">Mes Notes </a></li>
            <li><a href="edt"> Mon emploi de temps </a> </li>
            <li><a href="MesPT">Mes projets tutorés <a></li>
            <li> <a href="offresAlternance">Les offres d'alternance</a></li>
            <li><a href="Mescandidatures">Mescandidatures</a></li>
        </ul>
        <div class="container w-2/3 mx-auto my-4">
            <label>Choisir le semestre</label>

            <select style="   border: none;background: #80808040;width: 20%;" class="semestrechoice">
                <option>S1</option>
                <option>S2</option>
            </select>
            <br>
            <br>

            <table>

                <tr>
                    <th scope="col">mathématique</th>
                    <th scope="col">Physique</th>
                    <th scope="col">Traveaux Pratique</th>
                    <th scope="col">Traveaux Pratique</th>
                </tr>
                <tr>

                    <td>7</td>
                    <td>7</td>
                    <td>4,569</td>
                    <td>6,219</td>
                </tr>
                <tr>

                    <td>7</td>
                    <td>7</td>
                    <td>7,223</td>
                    <td>6,219</td>
                </tr>
                <tr>
                    <td scope="row">Mia Oolong</td>
                    <td>9</td>
                    <td>6,219</td>
                    <td>6,219</td>
                </tr>

            </table>



        </div>









    </section>







</body>
@include('layouts.footer')


</html>
<style>
    #section {
        min-height: 30vw;
        height: 100%;
        DISPLAY: flex;


    }

    div.content {
        margin: 46px;
        width: 70%;
    }

    .semestrechoice {}

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

    table {}

    td {
        border: 1px solid grey;
        padding: 17px;

    }

    th {
        border: 1px solid grey;
        padding: 17px;
    }

    tr {}

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
</style>