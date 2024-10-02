@include('task.app')
<body>
    <section style="display: flex; justify-content: center; ">
    <form action="{{url('/')}}" method="post">
        @csrf
        <input type="text" class="orm-control" name="task" id="task">
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
    </section>
    <br>
    <table class="table table-striped" style="width:50%; margin: 0 auto;">
        <thead style="text-align: center">
            <tr>
                <th scope="col">Tareas</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody style="text-align: center;">
            @foreach ($tasks as $task)
            <tr>
                <td>{{$task -> task}}</td>
                <td>X</td>
            </tr>
            @endforeach
        </tbody>
</table>
</body>
