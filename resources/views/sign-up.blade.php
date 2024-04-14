<x-layouts.app>
    <div class="alert alert-success mb-3" role="alert">
        Se envió un código de validación al correo <span class="fw-bold">{{session('user')->email}}</span>.
    </div>
    <form>
        <div class="mb-3">
            <label for="ci" class="form-label">Ingrese su cédula</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">V</span>
                <input class="form-control" id="ci" name="ci">
            </div>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Confirmar Contraseña</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Código</label>
            <input class="form-control">
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Validar</button>
        </div>
    </form>
</x-layouts.app>
