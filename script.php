<?php
function procesarEmailFormulario() {
    $email = $_POST['email'] ?? '';
    if($email){
        echo "Email '" .htmlspecialchars($email) . "' recibido con éxito";
    } else {
        echo "Por favor envía un email en el parámetro 'email' vía POST";
    }
}

if($_SERVER["REQUEST_METHOD"] == 'POST') {
    procesarEmailFormulario();
}

?>

<form action="POST">
    <input type="email" name="email" id="email" placeholder="tuemail@ejemplo.com" required>
    <button type="submit">Enviar Email</button>
</form>