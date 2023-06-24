<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow">
                <div class="col-lg-5 d-flex align-items-center justify-content-center">
                    <div class="auth-form-transparent text-center p-3">
                        <div class="brand-logo">
                            <img src="<?= site_url() ?>assets/assets_home/img/logo.png" alt="logo">
                        </div>
                        <h4>Sistem</h4>
                        <h6 class="font-weight-light">PT. Kunango Jantan Group</h6>
                        <form class="pt-4" action="login/process" method="post">
                            <?php if ($this->session->flashdata('error')) { ?>
                                <div class="alert alert-danger text-center" role="alert">
                                    <i class="fas fa-exclamation-circle"></i>&nbsp;<?= $this->session->flashdata('error'); ?>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="ti-user text-primary"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="inputUsername" name="usr_username" class="form-control form-control-lg border-left-0" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend bg-transparent">
                                        <span class="input-group-text bg-transparent border-right-0">
                                            <i class="ti-lock text-primary"></i>
                                        </span>
                                    </div>
                                    <input type="password" id="inputPassword" name="usr_password" class="form-control form-control-lg border-left-0" placeholder="Password">
                                </div>
                            </div>
                            <div class="my-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                Lupa password? Laporkan pada administrator.
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 login-half-bg d-flex flex-row">
                    <p class="text-black font-weight-medium text-left flex-grow align-self-end"><b>Copyright &copy; <?= date('Y'); ?></b> PT. Kunango Jantan Group
                </div>
            </div>
        </div>
    </div>
</div>