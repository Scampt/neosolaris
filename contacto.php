<?php require('layout/header.php') ?>
<main>
    <div class="formulario-container">
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
    </div>
    <h3>Ubicación</h3>
    <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.11904638018!2d-99.14643858255614!3d19.45043350000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f9274ab91c3b%3A0xb430e60589f6918d!2sMarte%2062%2C%20Guerrero%2C%20Cuauht%C3%A9moc%2C%2006300%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1673412243627!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</main>
<?php require('layout/footer.php') ?>