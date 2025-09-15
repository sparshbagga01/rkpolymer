    <?php
       include 'include/header.php';
       ?>

        <!-- Contact Start -->
        <div class="container-fluid contact py-5 hhhm" >
            <div class="container py-5">
                <div class="p-5 bg-light rounded">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="text-center mx-auto" style="max-width: 700px;">
                                <h1 class="text-primary">Get a Latest Price</h1>
                                <p class="mb-4">Looking for the best deals on our products? Get the latest price instantly by sharing your requirements with us. Whether you’re placing a bulk order or need customized solutions, we ensure competitive pricing tailored to your needs...</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                        </div>
                        <div class="col-lg-12">
                            <form  action="mail.php" method="post">
                                <input type="text" name="name" class="w-100 form-control border-0 py-3 mb-4" placeholder="Your Name">
                                <input type="number" name="phone" class="w-100 form-control border-0 py-3 mb-4" placeholder="Contact number">
                                <input type="email" name="email" class="w-100 form-control border-0 py-3 mb-4" placeholder="Enter Your Email">
                                <textarea class="w-100 form-control border-0 mb-4" rows="6" cols="10" name="message"placeholder="Your Message"></textarea>
                                <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary " name="submit" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        <?php
       include 'include/footer.php';
       ?>