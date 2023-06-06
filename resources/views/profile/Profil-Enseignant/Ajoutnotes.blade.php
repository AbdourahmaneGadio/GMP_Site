
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
        <li>MESNOTES</li>
    </ul>


    <section>

        <ul class="listMenu">
            <li style="background:white; color:#606c38;">Notes </li>
            <li> Emploi de temps </li>
            <li>Support de cours</li>
        </ul>

        <div class="Ajoutnotes">
    <h2>Ajouter des notes</h2>

    <form action="traitement_formulaire.php" method="POST">
    <label for="classe">Classe :</label>
    <select name="classe" id="classe">
      <option value="classe1">LP MIE</option>
      <option value="classe2">LP MIEF</option>
      <option value="classe3">LP MRI</option>
    </select>
    <br><br>
    
    
    <input type="text" name="nom" id="nom" placeholder="Nom*" require>
    <br><br>

    
    <input type="text" name="prenom" id="prenom" placeholder="Prénom*" require>
    <br><br>

    
    <input type="text" name="matiere" id="matiere" placeholder="Matière*" require>
    <br><br>
    
  
    <input type="number" name="note" id="note" placeholder="Note*" min="0" max="20" step="0.5" require>
    <br><br>
    
    
    <input type="number" name="coefficient" id="coefficient" placeholder="Coefficient*" min="1" step="1" require>
    <br><br>
    
    
    <textarea name="appreciation" id="appreciation" placeholder="Appréciation*" rows="4" cols="30" require></textarea>
    <br><br>
    
    <input type="submit" value="Ajouter la note">
  </form>
</div>

    </section>



</body>
@include('layouts.footer')


</html>
<style>

    .Ajoutnotes{

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