<?php
ob_start()
?>

<div class="container">
    <div class="row">
        <div class="col h1">This is login Portal Page</div>
    </div>
</div>

<?php
$content = ob_get_contents();
ob_end_clean();
$title = "Passenger Login Portal";
include 'layouts/layout.php'
?>
