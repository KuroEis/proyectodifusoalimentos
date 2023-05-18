<!DOCTYPE html>
<html>
<head>
  <title>Formulario de números</title>
	<style type="text/css">
		.fill:hover,
		.fill:focus {
		box-shadow: inset 0 0 0 2em var(--hover);
		}
    $primary: #11998e;
    $secondary: #38ef7d;
    $white: #fff;
    $gray: #9b9b9b;
    .form__group {
      position: relative;
      padding: 15px 0 0;
      margin-top: 10px;
      width: 50%;
    }

    .form__field {
      font-family: inherit;
      width: 100%;
      border: 0;
      border-bottom: 2px solid $gray;
      outline: 0;
      font-size: 1.3rem;
      color: $white;
      padding: 7px 0;
      background: #E1F1CD;
      transition: border-color 0.2s;

      &::placeholder {
        color: transparent;
      }

      &:placeholder-shown ~ .form__label {
        font-size: 1.3rem;
        cursor: text;
        top: 20px;
      }
    }

    .form__label {
      position: absolute;
      top: 0;
      display: block;
      transition: 0.2s;
      font-size: 1rem;
      color: $gray;
    }

    .form__field:focus {
      ~ .form__label {
        position: absolute;
        top: 0;
        display: block;
        transition: 0.2s;
        font-size: 1rem;
        color: $primary;
        font-weight:700;    
      }
      padding-bottom: 6px;  
      font-weight: 700;
      border-width: 3px;
      border-image: linear-gradient(to right, $primary,$secondary);
      border-image-slice: 1;
    }
    /* reset input */
    .form__field{
      &:required,&:invalid { box-shadow:none; }
    }
    /* demo */
    body {
      font-family: 'Poppins', sans-serif; 
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      font-size: 1.5rem;
      background-color:#222222;
    }
        .pulse:hover,
        .pulse:focus {
        -webkit-animation: pulse 1s;
            animation: pulse 1s;
        box-shadow: 0 0 0 2em rgba(255, 255, 255, 0);
        }
        @-webkit-keyframes pulse {
        0% {
          box-shadow: 0 0 0 0 var(--hover);
        }
        }
        @keyframes pulse {
        0% {
          box-shadow: 0 0 0 0 var(--hover);
        }
        }
        .close:hover,
        .close:focus {
        box-shadow: inset -3.5em 0 0 0 var(--hover), inset 3.5em 0 0 0 var(--hover);
        }
        .raise:hover,
        .raise:focus {
        box-shadow: 0 0.5em 0.5em -0.4em var(--hover);
        -webkit-transform: translateY(-0.25em);
            transform: translateY(-0.25em);
        }
        .up:hover,
        .up:focus {
        box-shadow: inset 0 -3.25em 0 0 var(--hover);
        }
        .slide:hover,
        .slide:focus {
        box-shadow: inset 6.5em 0 0 0 var(--hover);
        }
        .offset {
        box-shadow: 0.3em 0.3em 0 0 var(--color), inset 0.3em 0.3em 0 0 var(--color);
        }
        .offset:hover, .offset:focus {
        box-shadow: 0 0 0 0 var(--hover), inset 6em 3.5em 0 0 var(--hover);
        }
        .fill {
        --color: #a972cb;
        --hover: #cb72aa;
        }
        .pulse {
        --color: #ef6eae;
        --hover: #ef8f6e;
        }
        .close {
        --color: #ff7f82;
        --hover: #ffdc7f;
        }
        .raise {
        --color: #ffa260;
        --hover: #e5ff60;
        }
        .up {
        --color: #e4cb58;
        --hover: #94e458;
        }
        .slide {
        --color: #8fc866;
        --hover: #66c887;
        }
        .offset {
        --color: #19bc8b;
        --hover: #1973bc;
        }
        button {
        color: var(--color);
        -webkit-transition: 0.25s;
        transition: 0.25s;
        }
        button:hover, button:focus {
        border-color: var(--hover);
        color: #fff;
        }
        body {
        color: #fff;
        background: #17181c;
        font: 300 1em 'Fira Sans', sans-serif;
        -webkit-box-pack: center;
            justify-content: center;
        align-content: center;
        -webkit-box-align: center;
            align-items: center;
        text-align: center;
        min-height: 100vh;
        display: -webkit-box;
        display: flex;
        }
        button {
        background: none;
        border: 2px solid;
        font: inherit;
        line-height: 1;
        margin: 0.5em;
        padding: 1em 2em;
        }
        h1 {
        font-weight: 400;
        }
        code {
        color: #e4cb58;
        font: inherit;
        }
      </style>
</head>
<body>
  <center>
  <h1>FORMULARIO</h1>
  <center><h2>Manzano Guerra Miguel Alexandro<BR>
    <center>Romero Beltran Yamell Ximena</h2>
  <form action="reglas_agregacion.php" method="post" class="form">

    <label for="numero1"><h2>Valor de Calorias:</h2></label>
    <input type="number" class="form__field" id="numero1" name="numero1" required><br><br>

    <label for="numero2"><h2>Valor de Sodio:</h2></label>
    <input type="number" class="form__field" id="numero2" name="numero2" required><br><br>

    <label for="numero3"><h2>Valor de Azucar:</h2></label>
    <input type="number" class="form__field" id="numero3" name="numero3" required><br><br>

    <form method="post">
	<button class="raise" type="submit" name="submit">Enivar</button>
</form>
  </form>
</center>
</body>
</html>
