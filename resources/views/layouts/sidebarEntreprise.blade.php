<ul class="listMenu">
    <li class="{{ (request()->is('Ajoutnotes')) ? 'bg-white text-lime-800' : '' }}">
        <a href="{{url('Ajoutnotes')}}">Notes </a>
    </li>
    <li class="{{ (request()->is('Ajou')) ? 'bg-white text-lime-800' : '' }}">
        <a href="{{url('edtprofs')}}">Emploi de temps</a>
    </li>
    </li>
>

    </li>
</ul>