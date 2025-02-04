<!-- FOOTER -->
<footer class="footer-distributed">
    <div class="footer-left">
      <h3 title="COOL N LITE">
        <a href="<?php print $base_url ?>">
          <img src="<?php print $base_url?>shared/img/logo.png" alt="Logo Cool N Lite">
        </a>
    </h3>
    <?php
         $sql = "SELECT * FROM `footer`";
         $footer = executeResult($sql);
         foreach($footer as $ft){
    ?>
    <p class="footer-company-name"><?php echo ''.$ft['copyright'].''?></p>

      <p class="footer-links">
      <?php
        $sql = "SELECT * FROM `menu` ORDER BY `position` ASC";
        $menu = executeResult($sql);
        foreach($menu as $mn){
        ?>
            <a href="<?php echo ''.$base_url.$mn['url'].''?>"><?php echo ''.$mn['name'].''?></a>
        <?php 
            } 
        ?>
      </p>
      
    </div>

    <div class="footer-right">
      <p class="footer-company-about">
        <span><?php echo ''.$ft['title'].''?>
        </span>
        <?php echo ''.$ft['subtitle'].''?>
      </p>
    <?php }
    ?>
      <div class="footer-icons">
        <a href="https://www.facebook.com/coolnlitevn" target="_blank"><i class="fab fa-facebook"></i></i></a>
        <a href=""><i class="fab fa-facebook-messenger"></i></a>
        <a href="#"><i class="fab fa-google"></i></a>
      </div>
    </div>

    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p><span><?php echo ''.$ft['address'].''?></span></p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p class="phone">
            <a href="tel:+<?php echo ''.$ft['phone'].''?>"><?php echo ''.$ft['phone'].''?></a>
        </p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p class="gmail">
            <a href="mailto:<?php echo ''.$ft['mail'].''?>"><?php echo ''.$ft['mail'].''?></a>
        </p>
      </div>
    </div>

    
  </footer>
  <!-- FOOTER -->

  <button type="button" class="btn-fixed btn-messenger" title="0835 808 858">
    <a href="tel:+0835 808 858"></a>
  </button>

  <button type="button" class="btn-fixed btn-top scrollToTop" title="Đầu trang">
    <i class="fas fa-chevron-up"></i>
  </button>

