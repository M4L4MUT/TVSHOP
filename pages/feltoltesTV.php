<?php
if (filter_input(INPUT_POST, "feltoltesTV", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
    $tv_modell = htmlspecialchars(filter_input(INPUT_POST, "tv_modell"));
    $marka = filter_input(INPUT_POST, "marka");
    $gyartasd = filter_input(INPUT_POST, "gyartasd");
    $kijelzom = filter_input(INPUT_POST, "kijelzom");
    $allapot = filter_input(INPUT_POST, "allapot");
    $ar = filter_input(INPUT_POST, "ar");
        if ($db->feltoltesTV($tv_modell, $marka, $gyartasd, $kijelzom, $allapot, $ar)) {

    }
}
?>
<form action="#" method="post">
    <div class="mb-3">
        <label for="tv_modell" class="form-label">TV modell</label>
        <input type="text" class="form-control" name="tv_modell" id="tv_modell" required>
    </div>
    <div class="row">
        <div class="mb-3 col-6">
            <label for="Márka" class="form-label">Márka</label>
            <input type="text" class="form-control" name="marka" id="marka" required>
        </div>
        <div class="mb-3 col-6">
            <label for="gyartasd" class="form-label">Gyártás dátum</label>
            <input type="text" class="form-control" name="gyartasd" id="gyartasd" required>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-6">
            <label for="kijelzom" class="form-label">Kijelző mérete</label>
            <input type="number" class="form-control" name="kijelzom" id="kijelzom" required>
        </div>
        <div class="mb-3 col-6">
            <label for="allapot" class="form-label">Állapot</label>
            <input type="number" class="form-control" name="allapot" id="allapot" required>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-4">
            <label for="ar" class="form-label">Ár</label>
            <input type="text" class="form-control" name="ar" id="ar" required>
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col-4">
            <label for="kepfajl" class="form-label">Képfájl</label>
            <input type="file" class="form-control" name="kepfajl" id="kepfajl" >
        </div>

    </div>
    <button type="submit" class="btn btn-success" name="Adatfeltoltes" value="true">Feltöltés</button>
</form>
<?php ?>
