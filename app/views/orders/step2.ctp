<h1 align="center">Step 2 - Enter Details</h1>
	<div style="width:350px; margin:auto auto;">
		<div id="box">
			<div id="step2" class="padding">  
            <?php echo $form->create('step2'); ?>
            <?php
			print_r($postVar);
			foreach($postVar as $key => $value) {
				echo $form->hidden($key, array('value' => $value));	
			}
			?>
			  <table width="100%" border="0" cellspacing="0" cellpadding="6"> 
			  <tr> 
				<td width="40%" align="left">Username:</td> 
				<td><?php echo $form->text('user') ?></td>
			  </tr> 
			  <tr> 
				<td>Password:</td> 
				<td><?php echo $form->password('pass') ?></td>
			  </tr> 
			  <tr> 
				<td>Confirm Password:</td> 
				<td><?php echo $form->password('cpass') ?></td>
			  </tr> 
			  <tr> 
				<td>Email:</td><?php echo $ajax->observeField('step2Email', array('url' => 'orders/ajaxcall', 'complete' => 'if(request.responseText == "1") { $("#step2Email").removeClass("textbox"); $("#step2Email").addClass("accepted"); } else { $("#step2Email").removeClass("textbox"); $("#step2Email").addClass("declined"); }')); ?>
				<td><?php print $form->text('Email', array('class' => 'textbox')) ?></td>
			  </tr> 
			  </table> 
			 </div>
		</div> 
		<div id="buttonbox"> 
		  <table width="100%" border="0" cellspacing="0" cellpadding="0"> 
			<tr>
			  <td width="50%"><?php echo $ajax->submit('Previous Step', array('id' => 'Previous', 'url'=> '/orders/step1', 'update' => 'ajaxbox' ,'before'  => '$("#ajaxbox").hide("slide",'.$this->viewVars['effectTime'].')', 'complete'  => '$("#ajaxbox").show("slide",{ direction: "right" },'.$this->viewVars['effectTime'].')')); ?></td> 
			  <td align="right"></td> 
			</tr> 
		  </table> 
		</div>
	</div> 
    <?php echo $form->end(); ?>