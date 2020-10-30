<div class="table-data-feature">
    <a href="/farmacias/{{$id_farmacia}}">
        <button class="item" data-toggle="tooltip" data-placement="top" title="Consultar">
        <i class="zmdi zmdi-mail-send"></i>
    </a>
    </button>
    <a href="/farmacias/{{$id_farmacia}}/edit">
        <button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
        <i class="zmdi zmdi-edit"></i>
        </button>
    </a>
    <form action="/farmacias/{{$id_farmacia}}" method="POST">
        @method('DELETE')
        @csrf
        <button class="item" data-toggle="tooltip" data-placement="top" title="Eliminar">
        <i class="zmdi zmdi-delete" type="submit"></i>
    </button>
    </form>
</div>
