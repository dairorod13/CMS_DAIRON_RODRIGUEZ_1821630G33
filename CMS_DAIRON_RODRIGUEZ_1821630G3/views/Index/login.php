<section class="container">
    <h1>Log in</h1>
    <?php if(isset($_SESSION['flash']['message'])) echo $_SESSION['flash']['message']; ?>
    <form action="?controller=security&method=login" method="POST">
        <section class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" required placeholder="Account">
        </section>
        <section class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" name="password"  required placeholder="*****************">
        </section>
        <section class="form-group">
            <input type="submit" value="Registar" class="btn btn-green">
        </section>
    </form>
</section>