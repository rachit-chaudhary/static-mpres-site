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
        <div class="mini-range-title">
          <h2><a href="mini-product.php"><span>mini</span> range</h2></a>
        </div>
        <div class="mini-professional-range-title">
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
            <img src="assets/img/601.png" alt="mini-straightener">
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <div class="product-details">
            <div class="card-title">
              <h3>Mini Hair Straightener</h3>
            </div>
            <div class="card-tags">
              <span class="category">Hair Straightener</span>
              <span class="model-no">MPHS02</span>
            </div>
            <div class="card-specs">
              <h4>Specifications:</h4>
              <ul>
                <li>ON/OFF setting with indicator</li>
                <li>PTC Heater</li>
                <li>Max Temperature:200℃+/-15℃</li>
                <li>Ceramic Coating Plate Size:12*60mm</li>
                <li>360° Swivel Cord Sheet</li>
              </ul>
            </div>
            <div class="volt-watt">
              <div class="volt">
                <img src="assets/img/volt.png" alt="volt-icon">
                <p>110-240V~50-60Hz</p>
              </div>
              <div class="watt">
                <img src="assets/img/watt.png" alt="watt-icon">
                <p>20W</p>
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
            <img src="assets/img/528.png" alt="compact hair dryer">
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <div class="product-details">
            <div class="card-title">
              <h3>Compact Hair Dryer</h3>
            </div>
            <div class="card-tags">
                <span class="current">DC</span>
              <span class="category">Hair Dryer</span>
              <span class="model-no">MPHD02</span>
            </div>
            <div class="card-specs">
              <h4>Specifications:</h4>
              <ul>
                <li>Travel Hair Dryer</li>
                <li>2 Speed & 3 Heat Settings</li>
                <li>Hang-up Hook</li>
                <li>Foldable Handle</li>
                <li>Concentrator</li>
                <li>Removable Fitter</li>
                <li>Full Injection Finishing</li>
                <li>VDE Plug & 2x0.75m 2x1.8m Total Black Flat Cord</li>
              </ul>
            </div>
            <div class="volt-watt">
              <div class="volt">
                <img src="assets/img/volt.png" alt="volt-icon">
                <p>120-220V~50-60Hz</p>
              </div>
              <div class="watt">
                <img src="assets/img/watt.png" alt="watt-icon">
                <p>800W</p>
              </div>
            </div>
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
            <img src="assets/img/706.png" alt="mini curling tong">
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <div class="product-details">
            <div class="card-title">
              <h3>Mini Curling Tong</h3>
            </div>
            <div class="card-tags">
              <span class="category">Hair Curler</span>
              <span class="model-no">MPHC02</span>
            </div>
            <div class="card-specs">
              <h4>Specifications:</h4>
              <ul>
                <li>ON/OFF Switch & Power off Indicator</li>
                <li>PTC Heater</li>
                <li>25mm Heating Ceramic Coating tong</li>
                <li>Max Temperature: 180°C +/- 15°C</li>
                <li>360 degree Swivel Hook Injection Handle Finishing</li>
                <li>VDE Plug & 2x0.75mm 2x1.8m Total Black Flat Cord</li>
              </ul>
            </div>
            <div class="volt-watt">
              <div class="volt">
                <img src="assets/img/volt.png" alt="volt-icon">
                <p>110-240V~50-60Hz</p>
              </div>
              <div class="watt">
                <img src="assets/img/watt.png" alt="watt-icon">
                <p>20W</p>
              </div>
            </div>
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