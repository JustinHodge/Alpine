<div class="login-page">
    <form method="post" action="ControllerLoginPage/login" class="login-form">
        <legend>LOGIN</legend>
        <div class="input-group">
            <div class="label-input-set">
                <label>Email:</label>
                <input id="email-login" name="email" type="email"></input>
            </div>
            <div class="label-input-set">
                <label>Password:</label>
                <input id="password-login" name="password" type="password"></input>
            </div>
            <div class="button-group">
                <button class="toggle-register-btn" type="button">Register</button>
                <button type="submit">Login</button>
            </div>
        </div>
    </form>
    <form method="post" action="ControllerLoginPage/register" class="register-form hidden">
        <legend>REGISTER</legend>
        <div class="input-group">
            <div class="label-input-set">
                <label>First Name:</label>
                <input id="firstname-input" type="text"></input>
            </div>
            <div class="label-input-set">
                <label>Last Name:</label>
                <input id="lastname-input" type="text"></input>
            </div>
            <div class="label-input-set">
                <label>Email:</label>
                <input id="email-input" type="email"></input>
            </div>
            <div class="label-input-set">
                <label>Password:</label>
                <input id="password-input" type="text"></input>
            </div>
            <div class="button-group">
                <button class="toggle-register-btn" type="button">Back To Login</button>
                <button type="submit">Register</button>
            </div>
        </div>
    </form>
</div>
