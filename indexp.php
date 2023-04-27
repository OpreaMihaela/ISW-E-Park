<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style1.css" />
    <title>Parking Spots</title>
  </head>
  <body>
  <div class="movie-container">
      <label>Tipuri de incarcator:</label>
      <ul>
        <li>Yazaki (tip 1) - CA, Pmax= 7.4 KWatt</li>
        <li>Mennekes(tip 2) - CA, Pmax= 22 KWatt</li>
        <li>CHAdeMO (modulul 4) - Mitsubishi, Citroen, Peugeot, Pmax= 50 KWatt</li>
        <li>CCS COMBO1 - Suzuki, Mazda, Toyota, Pmax= 50 KWatt</li>
        <li>Connector tip 2 - Tesla Supercharge</li>
      </ul>
      <button type="button" id="btn"><a href="http://localhost/E-Park_Cod/epark.php"><span>Inapoi</span></a></button></p>
    </div>
  
  </ul>

    <div class="container">
      <div class="screen"></div>
      <div class="row">
        <div class="seat" style="text-align:center; padding-top:35px"><a href="http://localhost/E-Park_Cod/indexr1.php?month=04&year=2023">Yazaki (tip 1)</a></div>
        <div class="seat" style="text-align:center; padding-top:35px"><a href="http://localhost/E-Park_Cod/indexr2.php?month=04&year=2023">Yazaki (tip 1)</a></div>
        <div class="seat" style="text-align:center; padding-top:35px"><a href="http://localhost/E-Park_Cod/indexr3.php?month=04&year=2023">Mennekes(tip 2)</a></div>
        <div class="seat" style="text-align:center; padding-top:35px"><a href="http://localhost/E-Park_Cod/indexr4.php?month=04&year=2023">Mennekes(tip 2)</a></div>
      </div>

      <div class="row">
           <div class="seat" style="text-align:center; padding-top:35px"><a href="http://localhost/E-Park_Cod/indexr5.php?month=04&year=2023">CHAdeMO</a></div>
        <div class="seat" style="text-align:center; padding-top:35px"><a href="http://localhost/E-Park_Cod/indexr6.php?month=04&year=2023">CHAdeMO</a></div>
        <div class="seat" style="text-align:center; padding-top:35px"><a href="http://localhost/E-Park_Cod/indexr7.php?month=04&year=2023">CCS COMBO1</a></div>
        <div class="seat" style="text-align:center; padding-top:35px"><a href="http://localhost/E-Park_Cod/indexr8.php?month=04&year=2023">CCS COMBO1</a></div>

      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat occupied"></div>
        <div class="seat"></div>
      </div>
    </div>

    <p class="text">
      You have selected <span id="count">0</span> spots for a price of $<span id="total">0</span>
    </p>
    <script src="script.js"></script>
  </body>
</html>
