<ul class="listMenu">
    <li class="{{ (request()->is('Mesnotes')) ? 'bg-white text-lime-800' : '' }}">
        <a href="{{url('Mesnotes')}}">Mes Notes </a>
    </li>
    <li class="{{ (request()->is('edt')) ? 'bg-white text-lime-800' : '' }}">
        <a href="{{url('edt')}}"> Mon emploi de temps </a>
    </li>
    <li class="{{ (request()->is('MesPT')) ? 'bg-white text-lime-800' : '' }}">
        <a href="{{url('MesPT')}}">Mes projets tutorés </a>
    </li>
    <li class="{{ (request()->is('offresAlternance')) ? 'bg-white text-lime-800' : '' }}">
        <a href="{{url('offresAlternance')}}">Les offres d'alternance </a>
    </li>
    <li class="{{ (request()->is('Mescandidatures')) ? 'bg-white text-lime-800' : '' }}">
        <a href="{{url('Mescandidatures')}}">Mes candidatures</a>
    </li>
</ul>