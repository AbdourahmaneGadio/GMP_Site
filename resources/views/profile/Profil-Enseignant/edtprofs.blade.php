
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
        <li>ESPACE ENSEIGNANT</li>
        <li> > </li>
        <li>NOTES</li>
    </ul>


    <section>

        <ul class="listMenu">
            <li><a href="Ajoutnotes">Notes </a></li>
            <li style="background:white; color:#606c38;"><a href="edtprofs">Emploi de temps </li>
            <li>Support de cours</li>
        </ul>

        

    </section>



</body>
@include('layouts.footer')


</html>
<style>
/*FORM*/ 
    .Ajoutnotes {
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 5px;
    width: 400px;
    text-align: center;
    box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, 0.5);
  }

  .Ajoutnotes h2 {
    color: #333333;
    font-size: 24px;
    margin-bottom: 20px;
  }

  .Ajoutnotes label {
    display: inline-block;
    width: 100px;
    text-align: left;
    margin-bottom: 10px;
  }

  .Ajoutnotes input[type="text"],
  .Ajoutnotes input[type="number"],
  .Ajoutnotes textarea {
    width: 300px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 10px;
  }

  .Ajoutnotes input[type="submit"] {
    background-color: #606C38;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .Ajoutnotes input[type="submit"]:hover {
    background-color: #BC6C25;
  }
/*FIN FORM*/ 

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