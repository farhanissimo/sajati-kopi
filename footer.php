<footer class="bg-white pt-5 pb-3 border-top">
    <div class="container text-center mb-5">
        <p class="fs-5 text-muted mb-2">Connect with us:</p>
        <a href="https://www.instagram.com/sajatikopi_backyard" target="_blank" class="text-decoration-none text-dark d-inline-flex align-items-center gap-2">
            <i class="fa-brands fa-instagram fa-2x text-coffee"></i>
            <span class="fw-bold fs-5">@sajatikopi_backyard</span>
        </a>
    </div>

    <div class="text-center text-muted small mt-4">
        &copy; 2023 Kopi Sajati Backyard. All rights reserved.
    </div>

    <?php
        $whatsapp_number = "+6281222388331";
        $whatsapp_message = urlencode("Halo Sajati Kopi Backyard, saya ingin reservasi di Sajati Kopi.");
        $whatsapp_link = "https://wa.me/" . $whatsapp_number . "?text=" . $whatsapp_message;
    ?>
    
    <div class="fixed-bottom m-3 m-md-4 d-flex justify-content-end" style="z-index: 9999;">
        <a href="<?php echo $whatsapp_link; ?>" target="_blank" class="btn btn-success rounded-pill px-4 py-2 shadow-lg fw-bold d-flex align-items-center gap-2">
            <i class="fa-brands fa-whatsapp fa-xl"></i> ORDER NOW
        </a>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="script.js"></script> 

</body>
</html>