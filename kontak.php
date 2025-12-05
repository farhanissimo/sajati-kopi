<?php include 'header.php'; ?>

<header class="page-header" style="background-image: url('images/outdoor3.jpg');">
    <div class="container text-center position-relative text-white reveal">
        <h1 class="display-3 fw-bold" style="font-family: serif;">Hubungi Kami</h1>
        <p class="lead">Kami siap mendengar masukan dan pesanan Anda</p>
    </div>
</header>

<section class="py-5">
    <div class="container py-lg-5 reveal">
        
        <div class="text-center mb-5">
            <h2 class="fw-bold display-6">Get In Touch</h2>
            <p class="text-secondary">Punya pertanyaan atau ingin reservasi tempat?</p>
        </div>

        <div class="p-4 p-lg-5 rounded-5 shadow-lg position-relative overflow-hidden" style="background-color: #EDDCCB;">
            
            <div class="row align-items-center gy-5">
                
                <div class="col-lg-6">
                    <div class="ratio ratio-4x3 rounded-4 shadow overflow-hidden border border-4 border-white transform-hover">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8011139521363!2d107.65737047504363!3d-6.914367093085135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e73b7a1641bb%3A0x7773f0f52130fa0a!2sSajati%20Kopi%20Backyard!5e0!3m2!1sid!2sid!4v1764871477531!5m2!1sid!2sid" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <div class="col-lg-6 ps-lg-5">
                    <h3 class="fw-bold text-dark mb-4 display-6" style="font-family: serif;">Kopi Sajati Backyard</h3>
                    
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-white p-3 rounded-circle shadow-sm text-coffee">
                                <i class="fa-solid fa-map-location-dot fa-xl"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3 align-self-center">
                            <h6 class="fw-bold mb-1">Lokasi</h6>
                            <p class="text-dark opacity-75 mb-0">Antapani Tengah, Kota Bandung</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-white p-3 rounded-circle shadow-sm text-coffee">
                                <i class="fa-solid fa-envelope fa-xl"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3 align-self-center">
                            <h6 class="fw-bold mb-1">Email / Info</h6>
                            <p class="text-dark opacity-75 mb-0">sajatikopi@gmail.com</p>
                        </div>
                    </div>

                    <hr class="border-dark opacity-25 my-4">
                    
                    <p class="fw-bold text-dark">Hubungi kami langsung via:</p>

                    <div class="d-flex flex-column gap-3">
                        
                        <?php
                            $whatsapp_number = "+628980564584";
                            $whatsapp_message = urlencode("Halo, saya ingin reservasi/bertanya seputar Kopi Sajati.");
                            $wa_link = "https://wa.me/" . $whatsapp_number . "?text=" . $whatsapp_message;
                        ?>
                        <a href="<?php echo $wa_link; ?>" target="_blank" class="btn btn-success btn-lg rounded-pill shadow w-100 d-flex align-items-center justify-content-center gap-2">
                            <i class="fa-brands fa-whatsapp fa-xl"></i> Chat WhatsApp
                        </a>

                        <a href="https://www.instagram.com/sajatikopi_backyard" target="_blank" class="btn btn-light btn-lg rounded-pill shadow w-100 d-flex align-items-center justify-content-center gap-2 text-coffee fw-bold">
                            <i class="fa-brands fa-instagram fa-xl"></i> DM Instagram
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>