@include('app')
<body>
    <form action="{{'/'}}" method="post">
        <input type="text" name="task" id="task">
        <input type="submit" value="Agregar tarea">
    </form>
</body>
