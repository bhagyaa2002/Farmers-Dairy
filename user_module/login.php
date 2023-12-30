<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="https://kit.fontawesome.com/59784df54a.js" crossorigin="anonymous"></script>
  <style>
  /* import fonts  */
@import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

/* color variables  */

:root {
  --primary-green: #2da44e;
  --primary-dark: #24292f;
  --primary-light: #ffffff;
  --fade-light: #f6f8fa;
  --border-color: rgb(141, 141, 141);
}

/* default properties  */
a {
  text-decoration: none;
}

* {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  width: 100%;
  height: 100vh;
  background-color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
}

.container {
  display: flex;
  justify-content: center;
  flex-direction: column;
  width: 350px;
  height: 500px;
  align-items: center;
}

.github-logo {
  /* border: 1px solid black; */
  margin-bottom: 20px;
}

.github-logo i {
  font-size: 50px;
}

.github-head {
  font-size: 28px;
}

.login-wrapper {
  width: 100%;
  border: 1px solid var(--border-color);
  padding: 25px 15px;
  border-radius: 5px;
  background-color: var(--fade-light);
  margin-top: 40px;
}

.input-box {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  flex-direction: column;
  margin-bottom: 20px;
}

.input-label {
  display: flex;
  justify-content: space-between;
  width: 100%;
  font-size: 15px;
}

input {
  width: 100%;
  outline: none;
  margin-top: 5px;
  font-size: 16px;
  padding: 4px 6px;
  border-radius: 5px;
  border: 1px solid var(--primary-dark);
}

input:focus {
  border: 1px solid blue;
}

.submit-btn {
  width: 100%;
  padding: 5px 0px;
  font-size: 18px;
  background-color: var(--primary-green);
  border: none;
  border-radius: 5px;
  color: var(--primary-light);
  cursor: pointer;
  transition: all 0.2s linear;
}

.submit-btn:hover {
  transform: translateY(-1px);
}

.info {
  font-size: 15px;
  margin-top: 35px;
  border: 1px solid var(--border-color);
  padding: 20px 15px;
  width: 100%;
  border-radius: 5px;
  text-align: center;
  background-color: var(--fade-light);
}

@media screen and (max-width: 360px) {
  body {
    padding: 0px 10px;
  }

  .info {
    font-size: 14px;
    padding: 17px 10px;
  }

  .input-label {
    font-size: 14px;
  }
}

  </style>
</head>

<body>
  <div class="container">
    <div class="github-logo">
      <i class="fa-brands fa-github"></i>
    </div>
    <h1 class="github-head">
      Sign in to GitHub
    </h1>
    <div class="login-wrapper">
      <div class="input-box">
        <div class="input-label">Username</div>
        <input type="text" required>
      </div>

      <div class="input-box">
        <div class="input-label">
          <span>Password</span>
          <a href="#">Forgot password?</a>
        </div>
        <input type="password" required>
      </div>

      <button class="submit-btn">
        Submit
      </button>
    </div>

    <div class="info">
      <span>New to GitHub? <a href="#">Create an account.</a></span>
    </div>
  </div>
</body>
 
</html>
