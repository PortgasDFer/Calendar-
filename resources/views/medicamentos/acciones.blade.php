<div class="table-data-feature">
    <a href="/medicamentos/{{$id_medicamento}}/edit">
        <button class="item" data-toggle="tooltip" data-placement="top" title="Editar">
        <i class="zmdi zmdi-edit"></i>
        </button>
    </a>
    <form action="/medicamentos/{{$id_medicamento}}" method="POST">
        @method('DELETE')
        @csrf
        <button class="item" data-toggle="tooltip" data-placement="top" title="Eliminar">
        <i class="zmdi zmdi-delete" type="submit"></i>
    </button>
    </form>
</div>
