<style>
    .process{
    background-color: rgb(15,51,89);
    width: 175px;
    height: 175px;
    border-radius: 50%;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    }
    </style>
<section class="slice--offset parallax-section parallax-section-lg" style="">
   
    <div class="container">
        <div class="row py-3 justify-content-center">
            <div class="col-lg-8 col-md-8 text-center">
                <h2 class="heading  heading-1 strong-400 text-normal">
                No more hassles of monthly subscriptions and renewals</h2>
                <span class="clearfix"></span>
                <div class="fluid-paragraph fluid-paragraph-sm mt-3 mb-3 c-white" >
                    <?=$home_parallax_text?>
                </div>
                <div class="btn-container mt-5">
                    <?php if ($this->session->userdata('member_id')) { ?>
                        <a href="<?=base_url()?>home/profile" class="btn btn-styled btn-base-1 z-depth-2-bottom"><?php echo translate('go_to_profile')?></a>
                    <?php } else {?>
                        <a href="<?=base_url()?>home/registration" class="btn btn-styled btn-md btn-base-1 z-depth-2-bottom"><?php echo translate('register_now')?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div  class="row py-3 justify-content-center">
            <div class="col-lg-4 col-sm-12">
                <div class="process">
                    <h2 class="c-white">1</h2>
                    <span class="c-white">Payment</span>
                </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                <div class="process">
                    <h2 class="c-white">2</h2>
                    <span class="c-white">Payment</span>
                </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                <div class="process">
                    <h2 class="c-white">3</h2>
                    <span class="c-white">Payment</span>
                </div>
                    </div>
        </div>
    </div>
</section>