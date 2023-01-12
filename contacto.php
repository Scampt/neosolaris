<?php require('layout/header.php') ?>
<main class="formulario-container">
        <h2>Envianos un mensaje</h2>
        <form action="https://formsubmit.co/7ec9a5907ead24b023dfdc42f1e99619" method="POST">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="">

            <label for="email">Correo Electronico</label>
            <input type="email" name="email" id="">

            <label for="comentarios">Mensaje</label>
            <textarea name="comentarios" id="" cols="15" rows="5"></textarea>

            <input class="enviar mt-3 mb-3" type="submit" value="Enviar">
            
            <input type="hidden" name="_next" value="https://neosolaris29.net">
            <input type="hidden" name="_captcha" value="false">
        </form>
</main>
<?php require('layout/footer.php') ?>