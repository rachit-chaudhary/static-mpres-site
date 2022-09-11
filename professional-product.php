<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="shortcut icon" href="assets/img/favico.ico" type="image/x-icon">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/@leoncvlt/ar-button/styles.css">
  <title>MPRÉS | Products</title>
</head>
<body>

  <?php
    if(!empty($_POST["send"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $product = $_POST["product"];
        $quantity = $_POST["quantity"];
        $toEmail = "mailracit@gmail.com, rachit.chaudhary@impresariopromotions.com";
        $subject ="mprés inquiry for " . $product;

        $mailHeaders = "Name: " . $name .
        "\r\n Email: " . $email .
        "\r\n Product: " . $product .
        "\r\n Quantity: " . $quantity . "\r\n";

        if(mail($toEmail, $subject , $mailHeaders)) {
            $message = "We have received your mail :)";
        }
    }
  ?>

              <!-- The Modal -->
              <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="container">
                  <div class="modal-content modal-box">
                    <div class="container">
                      <h2>Product Inquiry Form</h2>
                      <span class="close">&times;</span>
                      
                      <form action="" method="post" autocomplete="off" class="inquiry-form">
                        <label for="name">Name:</label>
                        <input class="input-box" type="text" name="name" id="name" placeholder="Name" required>
                        <label for="email">Email:</label>
                        <input class="input-box" type="email" name="email" id="email" placeholder="Email" required>
                        <label for="product">Product:</label>
                        <select name="product" placeholder="Select Product">
                            <option value="select-product">Select Product</option>
                            <option value="mini-hair-straightener">Mini Hair Straightener</option>
                            <option value="mini-hair-curler">Mini Hair Curler</option>
                            <option value="mini-hair dryer">Mini Hair Dryer</option>
                            <option value="5-in-1-hot-air-brush">5 in 1 Hot Air Brush</option>
                            <option value="ionic-pro-care-dryer">Ionic Pro Care Dryer</option>
                            <option value="pro-gold-straightener">Pro Gold Straightener</option>
                            <option value="pro-hair-curler">Pro Hair Curler</option>
                            <option value="oval-brush-straightener">Oval Brush Straightener</option>
                        </select>
                        <label for="quantity">Quantity:</label>
                        <input class="input-box" type="number" name="quantity" id="quantity" placeholder="Quantity" required>
                        <input class="submit-btn" type="submit" name="send" value="send">
                        <?php
                            if(!empty($message)) { ?>
                                <div class="success">
                                    <strong><?php echo $message; ?></strong>
                                </div>
                        <?php } ?>
                      </form>
                    </div>
                  </div>
                </div>

              </div>

              <script type="module" src="assets/js/script.js"></script>
              <site-header></site-header>

  <section class="page-title">
    <div class="container">
      <div class="section-heading">
        <div class="professional-mini-range-title">
          <h2><a href="mini-product.php"><span>mini</span> range</h2></a>
        </div>
        <div class="professional-range-title">
          <h2><a href="professional-product.php"><span>professional</span> range</a></h2>
        </div>
      </div>
    </div>
    <hr class="section-hr">
  </section>

  <div class="container">
    <div class="col-md-12 col-xs-12 ">
        <!--product-card-->
      <div class="product-card">
        <div class="col-md-6 col-xs-12">
          <div class="product-photo">
            <img src="assets/img/667.png" alt="pro gold straightener">
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <div class="product-details">
            <div class="card-title">
              <h3>Pro Gold Straightener</h3>
            </div>
            <div class="card-tags">
              <span class="category">Hair Straightener</span>
              <span class="model-no">MPHS01</span>
            </div>
            <div class="card-specs">
              <h4>Specifications:</h4>
              <ul>
                <li>ON/OFF setting with indicator</li>
                <li>PTC Heater</li>
                <li>Black Injected Brush</li>
                <li>Lockable Handle & Floating Plates</li>
                <li>Temperature: 230°C +/- 15°C (in high setting)</li>
                <li>360° Swivel Cord Sheet & Hang Loop</li>
                <li>Black Mat Injection Finishing</li>
                <li>Ceramic Coating Plates: 35x120mm</li>
                <li>Two Pins Plug & with 2x0.5mm 2x1.8m Total</li>
                <li>Black Flat Cord</li>
              </ul>
            </div>
            <div class="volt-watt">
              <div class="volt">
                <img src="assets/img/volt.png" alt="volt-icon">
                <p>110-240V~50-60Hz</p>
              </div>
              <div class="watt">
                <img src="assets/img/watt.png" alt="watt-icon">
                <p>55W</p>
              </div>
            </div>
            <!-- Trigger/Open The Modal -->
            <div class="inquiry-btn">
              <div class="contact-btn">
                <button class="myBtn">Get Quote</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--product-card-->
      <div class="product-card">
        <div class="col-md-6 col-xs-12">
          <div class="product-photo">
            <img src="assets/img/707B.png" alt="pro hair curler">
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <div class="product-details">
            <div class="card-title">
              <h3>Pro Hair Curler</h3>
            </div>
            <div class="card-tags">
              <span class="category">Curler</span>
              <span class="model-no">MPHC01</span>
            </div>
            <div class="card-specs">
              <h4>Specifications:</h4>
              <ul>
                <li>Hair Curling Tong with Temperature </li>
                <li>Controlling Function</li>
                <li>ON/OFF Switch</li>
                <li>Power off Lighter</li>
                <li>PTC Heater</li>
                <li>Temperature Setting: 260°-180°</li>
                <li>360° Swivel Hook</li>
                <li>Mat Injection Finishing</li>
                <li>Two Pins Plug & with 2x0.5mm 2x1.8m Total</li>
                <li>With 19mm Ceramic Coating Tong</li>
              </ul>
            </div>
            <div class="volt-watt">
              <div class="volt">
                <img src="assets/img/volt.png" alt="volt-icon">
                <p>110-240V~50-60Hz</p>
              </div>
              <div class="watt">
                <img src="assets/img/watt.png" alt="watt-icon">
                <p>38W</p>
              </div>
            </div>
            <!-- Trigger/Open The Modal -->
            <div class="inquiry-btn">
              <div class="contact-btn">
                <button class="myBtn">Get Quote</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--product-card-->
      <div class="product-card" id="hotAirBrush">
        <div class="col-md-6 col-xs-12">
          <div class="product-photo">
            <img src="assets/img/806.png" alt="5 in 1 hot air brush">
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <div class="product-details">
            <div class="card-title">
              <h3>5 in 1 hot air brush</h3>
            </div>
            <div class="card-tags">
              <span class="category">Hot Air Brush</span>
              <span class="model-no">MPMB01</span>
            </div>
            <div class="card-specs">
              <h4>Specifications:</h4>
              <ul>
                <li>Detachable Key</li>
                <li>0-1-2 Settings</li>
                <li>360° Swivel Cord & Hook</li>
                <li>Cool Air Function</li>
              </ul>
            </div>
            <div class="volt-watt">
              <div class="volt">
                <img src="assets/img/volt.png" alt="volt-icon">
                <p>220-240V~50Hz</p>
              </div>
              <div class="watt">
                <img src="assets/img/watt.png" alt="watt-icon">
                <p>600W-700W</p>
              </div>
            </div>
            <!-- Trigger/Open The Modal -->
            <div class="inquiry-btn">
              <div class="contact-btn">
                <button class="myBtn">Get Quote</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--product-card-->
      <div class="product-card">
        <div class="col-md-6 col-xs-12">
          <div class="product-photo">
            <img src="assets/img/621.png" alt="oval brush straightener">
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <div class="product-details">
            <div class="card-title">
              <h3>Oval Brush Straightener</h3>
            </div>
            <div class="card-tags">
              <span class="category">Hair Straightening Brush with LED Digital Display</span>
              <span class="model-no">MPHS02</span>
            </div>
            <div class="card-specs">
              <h4>Specifications:</h4>
              <ul>
                <li>With ON/OFF Switch</li>
                <li>With PTC Heater</li>
                <li>LED Temperature Level Display</li>
                <li>Heating Brush with Massage Heads</li>
                <li>Digital Temperature Control</li>
                <li>from 80°C to 230°C</li>
                <li>With 360°C Swivel Cord Sheet</li>
                <li>With Full Injection Handle</li>
                <li>Auto-Shut-off Function within 60 Mins</li>
              </ul>
            </div>
            <div class="volt-watt">
              <div class="volt">
                <img src="assets/img/volt.png" alt="volt-icon">
                <p>110-240V~50-60Hz</p>
              </div>
              <div class="watt">
                <img src="assets/img/watt.png" alt="watt-icon">
                <p>70W</p>
              </div>
            </div>
            <!-- Trigger/Open The Modal -->
            <div class="inquiry-btn">
              <div class="contact-btn">
                <button class="myBtn">Get Quote</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--product-card-->
      <div class="product-card">
        <div class="col-md-6 col-xs-12">
          <div class="product-photo">
            <img src="assets/img/513.png" alt="ionic pro care dryer">
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <div class="product-details">
            <div class="card-title">
              <h3>Ionic Pro Care Dryer</h3>
            </div>
            <div class="card-tags">
                <span class="feature">Ionic Care</span>
              <span class="category">Hair Dryer</span>
              <span class="model-no">MPHD01</span>
            </div>
            <div class="card-specs">
              <h4>Specifications:</h4>
              <ul>
                <li>AC Motor Hair Dryer</li>
                <li>2 Speeds & 3 Heat Settings</li>
                <li>Cool Shot Function</li>
                <li>Hang-up Hook</li>
                <li>Injected Concentrator</li>
                <li>Removable Filter</li>
              </ul>
            </div>
            <div class="volt-watt">
              <div class="volt">
                <img src="assets/img/volt.png" alt="volt-icon">
                <p>220-240V~50-60Hz</p>
              </div>
              <div class="watt">
                <img src="assets/img/watt.png" alt="watt-icon">
                <p>1800W-2000W</p>
              </div>
            </div>
            <!-- Trigger/Open The Modal -->
            <div class="inquiry-btn">
              <div class="contact-btn">
                <button class="myBtn">Get Quote</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <form action="/">
    <label for="name">Name</label>
    <input type="text" placeholder="Your Name">
    <label for="email">Email</label>
    <input type="email">
    <label for="products">Select the product:</label>
    <select name="products" id="products">
      <option value="mini-hair-dryer">Mini Hair Dryer - modelno</option>
    </select>
    <br><br>
    <input type="submit" value="Submit">
  </form>

  <site-footer></site-footer>

  <script src="assets/js/script.js"></script>
  <!--Importing AR Button-->
  <script type="module" src="https://unpkg.com/@leoncvlt/ar-button"></script>
  <!-- Importing Modelviewer -->
  <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>

</body>
</html>