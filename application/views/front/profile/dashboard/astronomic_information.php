<?php 
    $astronomic_information = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'astronomic_information');
    $astronomic_information_data = json_decode($astronomic_information, true);
?>
<div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
    <div id="info_astronomic_information">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">
                <?php echo translate('astronomic_information')?>
            </h3>
            <div class="pull-right">
                <button type="button" id="unhide_astronomic_information" <?php if ($privacy_status_data[0]['astronomic_information'] == 'yes') {?> style="display: none" <?php }?> class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('astronomic_information')">
                <i class="fa fa-unlock"></i> <?=translate('show')?>
                </button>
                <button type="button" id="hide_astronomic_information" <?php if ($privacy_status_data[0]['astronomic_information'] == 'no') {?> style="display: none" <?php }?> class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('astronomic_information')">
                <i class="fa fa-lock"></i> <?=translate('hide')?>
                </button>
                <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('astronomic_information')">
                <i class="ion-edit"></i>
                </button>  
            </div>
        </div>
        <div class="table-full-width">
            <div class="table-full-width">
                <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                    <tbody>
                        <tr>
                            
                            <td class="td-label">
                                <span><?php echo translate('sun_sign')?></span>
                            </td>
                            <td>
                                <?=$astronomic_information_data[0]['sun_sign']?>
                            </td>
                            <td class="td-label">
                                <span><?php echo translate('moon_sign')?></span>
                            </td>
                            <td>
                                <?=$astronomic_information_data[0]['moon_sign']?>
                            </td>
                        </tr>
                        <tr>
                           <td class="td-label">
                                <span><?php echo translate('city_of_birth')?></span>
                            </td>
                            <td>
                                <?=$astronomic_information_data[0]['city_of_birth']?>
                            </td>
                            <td class="td-label">
                                <span><?php echo translate('time_of_birth')?></span>
                            </td>
                            <td>
                                <?=$astronomic_information_data[0]['time_of_birth']?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="edit_astronomic_information" style="display: none;">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">
                <?php echo translate('astronomic_information')?>
            </h3>
            <div class="pull-right">
                <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('astronomic_information')"><i class="ion-checkmark"></i></button>
                <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('astronomic_information')"><i class="ion-close"></i></button>
            </div>
        </div>
        
        <div class='clearfix'></div>
        <form id="form_astronomic_information" class="form-default" role="form">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="lagnam" class="text-uppercase c-gray-light"><?php echo translate('sun_sign')?></label>
                        
                        <?php 
                            echo $this->Crud_model->select_html('rasi', 'lagnam_value', 'name', 'edit', 'form-control form-control-sm selectpicker present_lagnam_edit', '', '', '', '');
                        ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="star" class="text-uppercase c-gray-light">Star<?php echo translate('sun_sign')?></label>
                       
                        <?php 
                            echo $this->Crud_model->select_html('star', 'star_value', 'name', 'edit', 'form-control form-control-sm selectpicker present_star_edit', '', '', '', '');
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">

                            
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="sun_sign" class="text-uppercase c-gray-light"><?php echo translate('sun_sign')?></label>
                        <input type="text" class="form-control no-resize" name="sun_sign" value="<?=$astronomic_information_data[0]['sun_sign']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="moon_sign" class="text-uppercase c-gray-light"><?php echo translate('moon_sign')?></label>
                        <input type="text" class="form-control no-resize" name="moon_sign" value="<?=$astronomic_information_data[0]['moon_sign']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">

            <select class="mdb-select md-form" multiple>
  <option value="" disabled selected>Choose your country</option>
  <option value="1">USA</option>
  <option value="2">Germany</option>
  <option value="3">France</option>
  <option value="4">Poland</option>
  <option value="5">Japan</option>
</select>

<script>
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>
  </div>
                <div class="col-md-6">
                
                    <div class="form-group has-feedback">
                        <label for="time_of_birth" class="text-uppercase c-gray-light"><?php echo translate('time_of_birth')?></label>
                        <input type="text" class="form-control no-resize" name="time_of_birth" value="<?=$astronomic_information_data[0]['time_of_birth']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="city_of_birth" class="text-uppercase c-gray-light"><?php echo translate('city_of_birth')?></label>
                        <input type="text" class="form-control no-resize" name="city_of_birth" value="<?=$astronomic_information_data[0]['city_of_birth']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group has-feedback">
                    <table  border="1" style="margin-right:20px;float: left;">
	<tr>
    
		<td><textarea type="text" name="hr1" id="hr1" class="textarea"><?php echo $fet_horo['hr1']; ?></textarea></td>
		<td><textarea type="text" name="hr2" id="hr2" class="textarea"><?php echo $fet_horo['hr2']; ?></textarea></td>
		<td><textarea type="text" name="hr3" id="hr3" class="textarea"><?php echo $fet_horo['hr3']; ?></textarea></td>
		<td><textarea type="text" name="hr4" id="hr4" class="textarea"><?php echo $fet_horo['hr4']; ?></textarea></td>
    </tr>
    <tr>
		<td><textarea type="text" name="hr5" id="hr5" class="textarea"><?php echo $fet_horo['hr5']; ?></textarea></td>
		<td colspan="2" rowspan="2" class="boxx">ராசி</td>
		<td><textarea type="text" name="hr6" id="hr6" class="textarea"><?php echo $fet_horo['hr6']; ?></textarea></td>
    </tr>
    <tr>
		<td><textarea type="text" name="hr7" id="hr7" class="textarea"><?php echo $fet_horo['hr7']; ?></textarea></td>
											<!--td colspan="2" ></td-->
											
		<td><textarea type="text" name="hr8" id="hr8" class="textarea"><?php echo $fet_horo['hr8']; ?></textarea></td>
    </tr>
    <tr>
	
		<td><textarea type="text" name="hr9" id="hr9" class="textarea"><?php echo $fet_horo['hr9']; ?></textarea></td>
		<td><textarea type="text" name="hr10" id="hr10" class="textarea"><?php echo $fet_horo['hr10']; ?></textarea></td>
        <td><textarea type="text" name="hr11" id="hr11" class="textarea"><?php echo $fet_horo['hr11']; ?></textarea></td>
        <td><textarea type="text" name="hr12" id="hr12" class="textarea"><?php echo $fet_horo['hr12']; ?></textarea></td>
	</tr>    
	</table>
	<table  border="1" style="margin-right:20px;">
    <tr>
		<td><textarea type="text" name="ham1" id="ham1" class="textarea"><?php echo $fet_horo['ham1']; ?></textarea></td>
        <td><textarea type="text" name="ham2" id="ham2" class="textarea"><?php echo $fet_horo['ham2']; ?></textarea></td>
        <td><textarea type="text" name="ham3" id="ham3" class="textarea"><?php echo $fet_horo['ham3']; ?></textarea></td>
        <td><textarea type="text" name="ham4" id="ham4" class="textarea"><?php echo $fet_horo['ham4']; ?></textarea></td>
    </tr>
    <tr>
		<td><textarea type="text" name="ham5" id="ham5" class="textarea"><?php echo $fet_horo['ham5']; ?></textarea></td>
        <td colspan="2" rowspan="2" class="boxx">அம்சம்</td>
        <td><textarea type="text" name="ham6" id="ham6" class="textarea"><?php echo $fet_horo['ham6']; ?></textarea></td>
    </tr>
    <tr>
		<td><textarea type="text" name="ham7" id="ham7" class="textarea"> <?php echo $fet_horo['ham7']; ?></textarea> </td>
                          				<!--td colspan="2"></td-->
                          				
        <td><textarea type="text" name="ham8" id="ham8" class="textarea"> <?php echo $fet_horo['ham8']; ?></textarea> </td>
    </tr>
    <tr>
		<td><textarea type="text" name="ham9" id="ham9" class="textarea"> <?php echo $fet_horo['ham9']; ?></textarea> </td>
        <td><textarea type="text" name="ham10" id="ham10" class="textarea"><?php echo $fet_horo['ham10']; ?></textarea></td>
        <td><textarea type="text" name="ham11" id="ham11" class="textarea"><?php echo $fet_horo['ham11']; ?></textarea></td>
        <td><textarea type="text" name="ham12" id="ham12" class="textarea"><?php echo $fet_horo['ham12']; ?></textarea></td>
    </tr>
    </table>
								
								<br>
								
								<p style="font-size: 12px;text-align:center;"> 
								<div id="jji44" style="color:red;"></div>
								தசா இருப்பு =    
																	<select name="satha_iruppu" id="satha_iruppu" class="form-control" style="width:190px;display:inline">												
	
<option value="0" <?php if( $fet_horo['satha_iruppu'] == '') { ?> selected <?php }  ?> >-- Select Dhasa Irruppu -- </option>
<option value="Jupiter" <?php if( $fet_horo['satha_iruppu'] == 'Jupiter') { ?> selected <?php }  ?> > வியாழன் </option>							
<option value="Kethu" <?php if( $fet_horo['satha_iruppu'] == 'Kethu') { ?> selected <?php }  ?> > கேது </option>							
<option value="Lagna" <?php if( $fet_horo['satha_iruppu'] == 'Lagna') { ?> selected <?php }  ?> > லக்கினம் </option>							
<option value="Mars" <?php if( $fet_horo['satha_iruppu'] == 'Mars') { ?> selected <?php }  ?> > செவ்வாய் </option>							
<option value="Mercury" <?php if( $fet_horo['satha_iruppu'] == 'Mercury') { ?> selected <?php }  ?> > புதன் </option>							
<option value="Moon" <?php if( $fet_horo['satha_iruppu'] == 'Moon') { ?> selected <?php }  ?> > சந்திரன் </option>							
<option value="Rahu" <?php if( $fet_horo['satha_iruppu'] == 'Rahu') { ?> selected <?php }  ?> > ராகு </option>							
<option value="Saturn" <?php if( $fet_horo['satha_iruppu'] == 'Saturn') { ?> selected <?php }  ?> > சனி </option>							
<option value="Sun" <?php if( $fet_horo['satha_iruppu'] == 'Sun') { ?> selected <?php }  ?> > சூரியன் </option>							
<option value="Venus" <?php if( $fet_horo['satha_iruppu'] == 'Venus') { ?> selected <?php }  ?> > சுக்கிரன் </option>									 					      									 				</select>												
 -  
	<input type="text" name="horos_year" id="horos_year" maxlength='2'  value="<?php echo $fet_horo['horos_year']; ?>" style="border: 0px;border-bottom: 1px solid #000;width: 8%;background-color: #fefadd;
    height: 15px;">  
	வருடம்    
	<input type="text" name="horos_month" id="horos_month" maxlength='2'  value="<?php echo $fet_horo['horos_month']; ?>" style="border: 0px;border-bottom: 1px solid #000;width: 8%;background-color: #fefadd;
    height: 15px;"> 
	மாதம்  <input type="text" name="horos_date" id="horos_date" maxlength='2'  value="<?php echo $fet_horo['horos_date']; ?>" style="border: 0px;border-bottom: 1px solid #000;width: 8%;background-color: #fefadd;
    height: 15px;">  
	தேதி  <br> <br> Eg -(சந்திரன் 7 வருடம் 1 மாதம் 27 தேதி)  
</p>
								
                          	</div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>