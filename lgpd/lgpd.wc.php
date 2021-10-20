<?php
echo "<script src='" . BASE . "/_cdn/widgets/lgpd/lgpd.wc.js'></script>";
?>

<?php if (!COOKIEPOLICY) : ?>
    <!--GDPR-->
    <div id="cookiePolicy" class="py-3 bg-dark fixed-bottom">
        <div class="container">
            <div class="cookiePolicy_flex">
                <div class="left">
                    <div class="text-white mb-3 mb-lg-0">
                        <span>
                        Este website utiliza cookies  para personalizar anúncios e melhorar a sua experiência no site. Clique no botão para continuar navegando.
                        </span>
                    </div>
                </div>
                <div class="align-self-center rigth">
                    <a href="#" class="btn cta" data-cookie="agree">Aceitar!</a>
                    <a href="#" class="btn ctablack" data-cookie="reject">Rejeitar</a>
                </div>
            </div>
        </div>
    </div>
    <!--/GDPR-->
<?php endif; ?>