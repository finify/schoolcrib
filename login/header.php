<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<title>skulcrib</title>
<link href="bookshop1.png" rel="icon" type="image/png">	
<link rel="stylesheet" type="text/css" href="style/indexstyle.css">
<style>
body {
	font-family: "Open Sans", sans-serif;
	height: 100vh;
	background-size: cover;
	background-image: url(../images/bg.jpg);
	background-size: auto;
    background-repeat: repeat;
	background-attachment:fixed;
}



* {
  box-sizing: border-box;
}

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
  background:rgba(87, 59, 59, 0.75);
  -webkit-bacground-size:cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  -background-size:cover;
}

.login {
  border-radius: 2px 2px 5px 5px;
  padding: 10px 20px 20px 20px;
  width: 90%;
  max-width: 350px;
  background: #ffffff;
  position: relative;
  padding-bottom: 80px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}
.login.loading button {
  max-height: 100%;
  padding-top: 50px;
}
.login.loading button .spinner {
  opacity: 1;
  top: 40%;
}
.login.ok button {
  background-color: #2797be;
}

.login input {
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  border: 1px solid #462245;
  transition: border-width 1s ease;
  color: #ccc;
}

.login input:focus {
  outline: none;
  color: Black;
  border-color: #462245;
  border-left-width: 30px;
}

.login a {
  font-size: 0.8em;
  color: #2196F3;
  text-decoration: none;
}
.login .title {
  color: #444;
  font-size: 1.2em;
  font-weight: bold;
  margin: 10px 0 30px 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 20px;
}
.login #button {
  width: 100%;
  height: 100%;
  padding: 10px 10px;
  background:#462245;
  color: #fff;
  display: block;
  border: none;
  margin-top: 20px;
  position: absolute;
  left: 0;
  bottom: 0;
  max-height: 60px;
  border: 0px solid rgba(0, 0, 0, 0.1);
  border-radius: 0 0 2px 2px;
  transform: rotateZ(0deg);
  transition: all 0.1s ease-out;
  border-bottom-width: 7px;
}
.login,#button:hover
{
border-bottom-width: 25px;
cursor:pointer;}


.login:not(.loading) button:hover {
  box-shadow: 0px 10px 10px #2196F3;
}
.login:not(.loading) button:focus {
  border-bottom-width: 4px;
}

footer {
  display: block;
  padding-top: 50px;
  text-align: center;
  color: #ddd;
  font-weight: normal;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
  font-size: 15px;
}
footer a, footer a:link {
  color: #fff;
  font-style:italics;
  text-decoration: none;
}

#header {font-size:25px; color:white;}
</style>
</head>