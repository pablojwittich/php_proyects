@include('app')
<h2>Crear un nuevo cliente</h2>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Apellido">
    </div>
    <div>
        <select class="form-select" aria-label="Default select example">
            <option selected>Elija beneficio</option>
            <option value="desayuno">Desayuno</option>
            <option value="almuerzo">Almuerzo</option>
            <option value="merienda">Merienda</option>
            <option value="cena">Cena</option>
</select>
    </div>
    <div class="mb-3">
        <label for="observaciones" class="form-label">Observaciones </label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>