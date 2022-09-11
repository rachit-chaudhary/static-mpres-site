class siteHeader extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
    <header>
    <div class="container">
        <div class="site-nav-bar">
          <div class="site-logo">
              <a href="index.html"><img class="logo-img" src="assets/img/mpres-logo.png" alt="mpres-logo"></a>
          </div>
          <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mini-product.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
            <div class="contact-btn">
              <a href="contact.html">Contact</a>
          </div>
        </div>    
      </div>
    </header>
    `
  }
}

customElements.define('site-header', siteHeader)

class siteFooter extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
    <footer>    
    <div class="container">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="row">
                <div class="footer-items">
                    <div class="col-md-3">
                        <div class="footer-logo">
                            <img src="assets/img/mpres-logo-black.png" alt="mpres logo">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer-links">
                            <li><a href="about.html">About</a></li>
                            <li><a href="mini-product.php">Products</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <p class="reach-me-text">Heading required</p>
                        <div class="email-input">
                            <input type="email" placeholder="Your Email">
                            <button type="submit">></button>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="footer-hr">
            <div class="row">
                <div class="bottom-footer">
                    <p>Copyright &#169; 2022 Mprés. All rights reserved.</p>
                    <ul class="bottom-footer-links">
                        <li><a href="#">Privacy policy</a></li>
                        <li class="seperator">|</li>
                        <li><a href="#">Terms of use</a></li>
                        <li class="seperator">|</li>
                        <li><a href="#">Legal</a></li>
                        <li class="seperator">|</li>
                        <li><a href="#">Site map</a></li>
                    </ul>
                    <p>India</p>
                </div>
            </div>
        </div>
    </div>
  </footer>
    `
  }
}

customElements.define('site-footer', siteFooter)

class siteContact extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="details-box">
                    <h1>Contacting MPRÉS</h1>
                    
                        <div class="contact-inner-box">
                            <div class="address">
                                <h5>Registered Office</h5>
                                <p><a href="#">C-14, Sector-6, Nodia, <br> Uttar Pradesh - 201301</a></p>
                            </div>
                            <div class="details">
                                <h5>Contact Details</h5>
                                <p><a href="#">+0120 428 6464</a></p>
                                <p><a href="mailto:">inquiry@mpres.co.in</a></p>
                            </div>
                        </div>
                    
                    <div class="contact-btn contact-block">
                        <a href="mailto:">Reach us</a>
                    </div>
                </div>
            </div>
    `
  }
}

customElements.define('site-contact', siteContact)

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btns = document.getElementsByClassName("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
for (var i = 0; i < btns.length; i++) {
  btns[i].onclick = function() {
    modal.style.display = "flex";
  }
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}