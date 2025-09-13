<main class="container my-5 d-flex justify-content-center">
    <div class="card py-5 px-5">
        <form name="form-cal" method="GET"  action="/PWD/views/action/actionForm.php">
            <h3 class="text-center">Calculadora</h3>
            <input type="hidden" name="accion" value="tp1e7">

            <div class="my-3">
            <input class="" type="number" name="valor1" id="valor1" placeholder="Ingrese 1er Digito " required> 
            </div>

            <div class="my-3">
            <input class="d-flex" type="number" name="valor2" id="valor2" placeholder="Ingrese 2do Digito " required> 
            </div>
            <div class="mb-3">
                <select class="text-center" name="operacion" id="operacion">
                    <option value="suma">SUMA</option>
                    <option value="resta">RESTA</option>
                    <option value="multiplicar">MULTIPLICAR</option>
                </select>
            </div>
            <div>
            <input class="btn btn-success" type="submit" value="OPERAR">
            </div>
        </form>
    </div>
</main>