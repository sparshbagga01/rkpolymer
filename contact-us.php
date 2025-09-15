    <?php
       include 'include/header.php';
       ?>
<style>
    p{
        text-align: justify;
        font-size: 15px;
    }
    
    /* Media Query for Mobile Devices */
@media screen and (min-width: 0px) and (max-width: 319px) {
.imgg {
    position: relative;
    width: 100%;
    height: 100px;
    margin-top: 12%;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    
}
}
@media screen and (min-width: 320px) and (max-width: 480px) {
.imgg {
    position: relative;
    width: 100%;
    height: 120px;
    margin-top: 28%;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    
}
}
@media screen and (min-width: 481px) and (max-width: 767px) {
.imgg {
    position: relative;
    width: 100%;
    height: 150px;
    margin-top: 12%;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    
}
}
@media screen and (min-width: 768px) and (max-width: 1024px) {
   .imgg{
    position: relative;
    width: 100%;
    height: 200px;
    margin-top: 12%;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    
}
}
@media screen and (min-width: 1024px){
  .imgg{
    position: relative;
    width: 100%;
    height: 350px;
    margin-top: 12%;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    
}
h1{
    margin-top: 60px;
}
}

.hhhm{ 
    
    margin-top: -8%;
}
    
</style>
         <img src="img/360_F_481727770_1u2ylNpie8WRosMVbv1COXDnnEK6ofwh.jpg" class="imgg">
            <!--<h1 class="text-center text-white display-6" >About Us</h1>-->
        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->
        <!-- Contact Start -->
        <div class="container-fluid contact py-5 hhhm" >
            <div class="container py-5">
                <div class="p-5 bg-light rounded">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="text-center mx-auto" style="max-width: 700px;">
                                <h1 class="text-primary">Get in touch</h1>
                                <p class="mb-4">Established in 2021, RK Polymers & Sons has rapidly emerged as a leading manufacturer and supplier of automatic plastic scrap recycling machinery solutions in Jaipur, Rajasthan. With over five years of industry experience, we are committed to delivering high-quality, innovative products that cater to the evolving needs of our clients.......</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="h-100 rounded">
                                <iframe class="rounded w-100" 
                                style="height: 400px;" <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7126.563414853705!2d75.884962!3d26.735385!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396dc9e3994a6715%3A0xef7adbe1d6a4c17d!2sRK%20Polymers%20%26%20Sons!5e0!3m2!1sen!2sin!4v1743746755440!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <form  action="mail.php" method="post">
                                <input type="text" name="name" class="w-100 form-control border-0 py-3 mb-4" placeholder="Your Name">
                                <input type="number" name="phone" class="w-100 form-control border-0 py-3 mb-4" placeholder="Contact number">
                                <input type="email" name="email" class="w-100 form-control border-0 py-3 mb-4" placeholder="Enter Your Email">
                                <textarea class="w-100 form-control border-0 mb-4" rows="6" cols="10" name="message"placeholder="Your Message"></textarea>
                                <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary " name="submit" type="submit">Submit</button>
                            </form>
                        </div>
                        <div class="col-lg-5">
                            <div class="d-flex p-4 rounded mb-4 bg-white">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Address</h4>
                    
                                    <p>Address: G-137, RIICO Industrial Area, Prahaldpura, Jaipur,Rajasthan, 303903</p>

                                </div>
                            </div>
                            <div class="d-flex p-4 rounded mb-4 bg-white">
                                <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Mail Us</h4>
                                    <p class="mb-2">rkpolymers.in@gmail.com</p>
                                   
                                </div>
                            </div>
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Phone Number</h4>
                                    <p class="mb-2">+91-7023582765</p>
                                    <p class="mb-2">+91-9829058753</p>
                                    
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <?php
       include 'include/footer.php';
       ?>