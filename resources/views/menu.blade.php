<menu>
    <li>
        <a href="{{ route("capacitacion.index") }}">Capacitaciones</a>
        <ul>
            <li>
                <a href="{{ route("capacitacion.create") }}">Agregar</a>
            </li>
        </ul>
    </li>
    <li> <a href="{{ route("capacitador.index") }}">Capacitadores</a>
        <ul>
            <li>
                <a href="{{ route("capacitador.create") }}">Crear</a>
            </li>
        </ul>
    </li>
    <li> <a href="{{ route("inscripcion.index") }}">Inscripciones</a>
        <ul>
            <li><a href="{{ route("inscripcion.create") }}">Inscribir</a></li>
        </ul>
    </li>
</menu>