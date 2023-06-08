<ul class="listMenu">

    <li class="{{ (request()->is('AjoutPT')) ? 'bg-white text-lime-800' : '' }}">
        <a href="{{url('AjoutPT')}}">Ajouter un projet tutorés </a>
    </li>
    <li class="{{ (request()->is('AjoutOA')) ? 'bg-white text-lime-800' : '' }}">
        <a href="{{url('AjoutOA')}}">Ajouter une offre d'alternance </a>
    </li>

</ul>