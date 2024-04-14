<x-layouts.app>
    @if ($errors->has('user'))
        <div class="alert alert-danger">
            {{ $errors->first('user') }}
        </div>
    @endif
    <form method="POST" action="{{ route('verify-ci') }}" id="ci-form">
        @method('POST')
        @csrf
        <div class="mb-3">
            <label for="ci" class="form-label">Ingrese su cédula</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">V</span>
                <input class="form-control" id="ci" name="ci">
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#ci-form').validate({
                    rules: {
                        ci: {
                            required: true
                        }
                    },
                })
            })
        </script>
    @endpush
</x-layouts.app>
