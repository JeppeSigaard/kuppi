<form class="order-form" method="post" action="<?php echo get_template_directory_uri();?>/ajax/form.php">
    <input type="hidden" name="productId" value="<?php the_ID(); ?>">
        <div class="form-toggle">
            <a class="toggle toggle-1 active" href="#">
                <h3>Vælg størrelse</h3>
            </a>
            <a class="toggle toggle-2" href="#">
                <h3>Mål selv</h3>
            </a>
        </div>
    <div class="form-tabs">
        <div class="tab tab-1 active">
            <a href="#" class="form-submit">Læg i kurv</a>
        </div>
        <div class="tab tab-2">
            <div class="b-width">
                <label for="w">Bredde</label>
                <input type="number" name="w" placeholder="80cm - 240cm">
            </div>
            <div class="b-depth">
                <label for="d-top">Dybde, spandens top</label>
                <input type="number" name="d-top" placeholder="80cm - 240cm">
            </div>
            <div class="b-depth">
                <label for="d-bottom">Dybde, spandens bund</label>
                <input type="number" name="d-bottom" placeholder="80cm - 240cm">
            </div>
            <div class="b-height">
                <label for="h">Højde</label>
                <input type="number" name="h" placeholder="80cm - 240cm">
            </div>
            <a href="#" class="form-submit">Læg i kurv</a>
        </div>
    </div>
</form>
