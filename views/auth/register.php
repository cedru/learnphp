<?php include __DIR__ . '/../partials/header.php' ?>
    <div class="container">
        <h1 class="is-size-1">Register</h1>        

        <form action="/register" method="POST">
        <div class="field">
            <label class="label" for="email">Email</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Email" name="email" id="email">
                </div>
        </div>
        <div class="field">
            <label class="label" for="password">Password</label>
                <div class="control">
                    <input class="input" name="password" id="password" type="password">
                </div>
        </div>
        <div class="field">
            <label class="label" for="password_confirm">Password Confirm</label>
                <div class="control">
                    <input class="input" name="password_confirm" id="password_confirm" type="password">
                </div>
        </div>
        <div class="field">
                <div class="control">
                    <input class="button is-primary" type="submit" placeholder="Register">
                </div>
        </div>
        </form>
    </div>
<?php include __DIR__ . '/../partials/footer.php' ?>