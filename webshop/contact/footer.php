
<footer class="text-center text-muted">

<hr>

<div class="row">

    <div class="col-md-3">
    </div>

    <div class="col-md-6">
    Copyright &copy;

    <?php
    $month = array(0, 'Januari', 'Februari', 'Mars', 'April', 'Maj', 'Juni', 'Juli', 'Augusti', 'September', 'Oktober', 'November', 'december');
    $weekday = array("Söndag", "Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag");

    date_default_timezone_set("Europe/Stockholm");
    echo $weekday[date('w')] . " den " . date("d ") . $month[date('n')] . date(" Y ") . "kl. " . date("H:i");

    ?>
    </div>

    <div class="col-md-3">
    </div>

</div>

</footer>
</body>

</html>