<?php
$page_title = "Login - monsite.com";

ob_start();
show_error(); 

?>
<h1>Singup</h1>
<form action="/actions/singup.php" method="post">
    <div>
        <label for="email">Email</label>
        <input type="`text`" id="email" name="email">
    </div>
    <div>
        <label for="password">mot de passe</label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <label for="cpassword">confirmez mdp</label>
        <input type="password" id="cpassword" name="cpassword">
    <button type="submit">Singup</button>
    </div>

</form>

<?php

$page_content = ob_get_clean();