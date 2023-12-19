<header>
    <nav
      class="navbar navbar-expand-lg fixed-top navbar-light bg-custom shadow-sm p-3 mb-5 bg-white"
    >
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="<?=base_url('assets/vendor/template');?>/assets/images/svmmer.png" width="160px" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">

            <?php echo $this->session->userdata('nama') ?>
            <a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a>


            <li class="nav-item">
              <a class="btn btn-outline-primary" href=""
                ><i class="fas fa-home"></i> Home</a
              >
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="/status.html"
                ><i class="fas fa-search"></i> Cek Pesanan</a
              >
              <!-- </li>
            <li class="nav-item">
              <a class="nav-link" href="/login.html"
                ><i class="fa fa-sign-in-alt"></i> Masuk</a
              >
            </li> -->
            </li>

            <li class="nav-item">
              <a class="nav-link" href="login.html"
                ><i class="fa fa-sign-in-alt"></i> Masuk</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>