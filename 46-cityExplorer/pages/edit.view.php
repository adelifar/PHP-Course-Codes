<div class="container">
    <form method="post" action="edit.php?<?=http_build_query(['id'=>$city->id])?>">
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" name="city" id="city" value="<?=e($city->city)?>" required>
        </div>
        <div class="form-group">
            <label for="cityAscii">City(ascii):</label>
            <input type="text" name="cityAscii" id="cityAscii" value="<?=e($city->cityAscii)?>" required>
        </div>
        <div class="form-group">
            <label for="country">Country:</label>
            <input type="text" name="country" id="country" value="<?= e($city->country) ?>" required>
        </div>
        <div class="form-group">
            <label for="iso2">ISO-2:</label>
            <input type="text" name="iso2" id="iso2" value="<?= e($city->iso2) ?>" required>
        </div>
        <div class="form-group">
            <label for="population">Population:</label>
            <input type="number" name="population" id="population" value="<?= e($city->population) ?>" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit!">
        </div>
    </form>
</div>