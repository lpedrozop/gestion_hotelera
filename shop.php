<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <title>Pagar</title>
    <link rel="stylesheet" type="text/css" href="css/shopstyle.css">
</head>

<body>
	<div class="mainscreen">
          <div class="card">
            <div class="leftside">
              
            </div>
            <div class="rightside">
              <form action="https://mpago.li/2suFgbS">
                <h1>Confirmar</h1>
                </label>
                <p>Nombre del responsable</p>

                <input type="text" class="inputbox" name="name" required />
                <p>Celular</p>
                
                <input type="text" class="inputbox" name="name" required />
                <p>Cantidad de personas</p>
                <select class="inputbox" name="card_type" id="card_type" required>
                  <option value="">Personas</option>
                  <option value="Visa">1</option>
                  <option value="RuPay">2</option>
                  <option value="MasterCard">3</option>
                </select>
            <div class="expcvv">
    
                <p class="expcvv_text">Llegada</p>
                <input type="date" class="inputbox" name="exp_date" id="exp_date" required />
                <p class="expcvv_text">Salida</p>
                <input type="date" class="inputbox" name="exp_date" id="exp_date" required />
    
            </div>

            <label class="toggler">Servicios de transporte
              <input type="checkbox" checked="checked">
              <span class="checkmark"></span>
            </label>
                <p></p>
                <button type="submit" class="button">Pagar</button>
              </form>
            </div>
          </div>
        </div>
</body>

</html>