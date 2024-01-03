"<?php
if($_POST["message"]) {
    mail("whoismatwarren@gmail.com", "Here is the subject line",
    $_POST["insert your message here"]. "From: an@email.address");
    }
    ?>" 