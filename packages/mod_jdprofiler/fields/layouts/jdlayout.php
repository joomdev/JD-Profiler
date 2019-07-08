<?php
 // Licensed under the GPL v3
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
extract($displayData);
?>

<style>
   
		.radio-image-field label:focus{
			outline: none;
		}
		.radio-image-field{
			user-select: none;
         display: inline-flex;
		}
		.radio-image-field [type="radio"]{
			display: none;
		}
		.radio-image-field [type="radio"]:checked ~ span{
			font-weight: bold;
		}
		.radio-image-field [type="radio"]:checked ~.radio-image img{
			opacity: 1;
			transition: all .15s ease-out;
		}
		.radio-image-field [type="radio"] ~.radio-image:after{
			content: "\2714";
			opacity: 0;
			transform: scale(0);
			position: absolute;
			width: 30px;
			height: 30px;
			background: rgba(255,255,255,0.8);
			color: #000;
			border-radius: 15px;
			top: 50%;
			left: 50%;
			margin-left: -15px;
			margin-right: -15px;
			z-index: 1;
			text-align: center;
			line-height: 30px;
			transition: all .15s ease-in;
		}
		.radio-image-field [type="radio"]:checked ~.radio-image:after{
			opacity: 1;
			transform: scale(1);
			transition: all .15s ease-out;
         top: -10px;
         left: auto;
         background: #999999;
		}
		.radio-image{
			cursor: pointer;
			position: relative;
         height:100px;
         width:100px;
		}
		.radio-image img{
			opacity: 0.7;
			transition: all .15s ease-in;
			user-drag: none; 
			user-select: none;
			-moz-user-select: none;
			-webkit-user-drag: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}
		.radio-image-field span{
			display: block;
			text-align: center;
			line-height: 30px;
			font-size: 14px;
		}
		.disabledd{
		cursor: not-allowed;
		opacity: .6;
		background: red;	
		}
	</style>
  
				<div class="radio-image-field">
					<?php foreach($options as $key => $option) { 
						$label = (explode("|",$option->text));
						?>
						<label tabindex="0">
							<input type="radio" <?php echo ($field->value == $option->value) ? "checked" : "" ?> <?php echo ($option->disable) ? "disabled" : "" ?> name="<?php echo $field->name; ?>" value="<?php echo $option->value; ?>" />
							<div class="radio-image">
							<img <?php echo ($option->disable) ? "class='disabledd' disabled" : "" ?> src="<?php echo JURI::root();?><?php echo $label[0]; ?>"/> 
							</div>
							<span><?php  $label[1]; ?></span>
						</label>
					<?php } ?>  
				</div>
	