<div class="table-data-feature">
    <a href="/usuarios/{{$id}}">
        <button class="item" data-toggle="tooltip" data-placement="top" title="Consultar">
        <i class="zmdi zmdi-mail-send"></i>
    </a>
    </button>
    <a href="/usuarios/{{$id}}/edit">
        <button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
        <i class="zmdi zmdi-edit"></i>
        </button>
    </a>
    <form action="/usuarios/{{$id}}" method="POST">
        @method('DELETE')
        @csrf
        <button class="item" data-toggle="tooltip" data-placement="top" title="Eliminar">
        <i class="zmdi zmdi-delete" type="submit"></i>
    </button>
    </form>
</div>