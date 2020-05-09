<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cpanel</title>
    <style media="screen">
    * {
  margin: 0;
  padding: 0;
  text-align: center;
  color: #black;
  font-family: sans-serif;
}

#formContainer {
  position: absolute;
  top: 45%;
  left: 50%;
  transform: translate(-50%, -50%);
}

#formContainer h1 {
  margin: 20px auto;
}

#formContainer input {
  display: block;
  padding: 7px;
  margin: 15px;
  background: none;
  outline: none;
  border: 1px solid black;
}

#formContainer input[type="text"],#formContainer input[type="password"] {
  border: 3px solid #black;
  border-radius: 10px;
  width: 400px;
  font-size: 16px;
  font-weight: bold;
  color: darkcyan;
  animation: shadow1 2s infinite;
}

#formContainer input[type="text"]:focus ,#formContainer input[type="password"]:focus {
  border-color: darkcyan;
}

input::placeholder {
  font-size: 16px;
  font-weight: bold;
  color: #444;
}

#formContainer input[type="submit"] {
  border: none;
  font-size: 20px;
  font-weight: bold;
  color: darkcyan;
  margin: 25px auto;
  cursor: pointer;
}

    </style>
</head>
<body>
    <form id="formContainer">
        <h1>Welceome admin</h1>
        <input type="text" placeholder="Your username">
        <input type="password" placeholder="Your password">
        <input type="submit" value="Login">
    </form>
</body>
</html>
