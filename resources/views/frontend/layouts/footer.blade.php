<footer class="footer-area">
    <div class="container">
        <div class="row footer-widgets">
            <div class="col-md-12 col-lg-3 widget">
                <div class="text-box">
                    <figure class="footer-logo">
                        <img src="images/logo.png" alt="">
                    </figure>
                    <p>Social media links </p>
                    <ul class="d-flex flex-wrap">
                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://np.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://x.com/?lang=en"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-lg-2 offset-lg-1 widget">
                <h3 class="widget-title">Useful Link</h3>
                <ul class="nav-menu">
                   <li><a href="">Home</a></li>

                    <li><a href="#">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Contact Info</h3>
                <ul>
                    <li>Pokhara Metropolitan city-27, Kaski, Nepal</li>
                    <li><a href="#">+9779866051538</a></li>
                    <li><a href="#">suniladhikari.official@gmail.com</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 widget">
                <h3 class="widget-title">Help</h3>
                <ul class="nav-menu">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">404 Page</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Documentation</a></li>
                </ul>
            </div>
        </div>
    </div>
   <body>
    <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright">
                            <p>Copyright <span id="currentYear"></span> <span>Sunil</span>. All Rights Reserved.</p>
                            <p>Powered by Sunil Adhikari &nbsp; | &nbsp; 2022 - <span id="currentYearRange"></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        const currentYear = new Date().getFullYear();
        document.getElementById('currentYear').textContent = currentYear;
        document.getElementById('currentYearRange').textContent = currentYear;
    </script>
</footer>
