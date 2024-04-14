<x-layouts.app>
    <form>
        <div class="mb-3">
            <label for="ci" class="form-label">Ingrese su cédula</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">V</span>
                <input class="form-control" disabled id="ci" name="ci" value="{{ session('user')->ci }}">
            </div>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>
</x-layouts.app>
