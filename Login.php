<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Secure and simple login page for your application">
    <title>Login - MyApp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <section class="login">
        <h1 class="login__title">Login Page</h1>

        <form action="" method="post" class="login__form">
            <label for="username">Username</label>
            <input id="username" class="login__input" type="text" name="username" placeholder="Enter your name"
                   required>

            <label for="email">Email</label>
            <input id="email" class="login__input" type="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input id="password" class="login__input" type="password" name="password" placeholder="Enter your password"
                   required>

            <button class="login__button" type="submit">Login</button>
        </form>
    </section>
</main>
</body>
</html>
