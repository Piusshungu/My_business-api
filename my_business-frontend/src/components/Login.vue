<template>
<div id="login">
    <h2>Login Form</h2>

<form action="/action_page.php">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:white">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</div>
</template>

<style>
body {font-family: sans-serif, Helvetica, sans-serif;}
form {border: 3px #f1f1f1; align-self: center;}

input[type=text], input[type=password] {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inherit;
  border: 1px solid #ccc;
  box-sizing: border-box;
  font-size: xx-small;
}

button {
  background-color:green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 15%;
  font-size: x-small;
  border-radius: 2px;
  margin-left: 0px;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color:green;
}

/* .imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
} */

img.avatar {
  width: 40%;
  border-radius: 10%;
  height: 200px;
}

.container {
  padding: 10px;
  background-color:whitesmoke;
  width: 400px;
  margin-left:450px;
  border-radius: 4px;
  font-size: smaller;
  font-family: 'Times New Roman', Times, serif;


}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<script>

</script>
