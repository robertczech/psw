<?php defined('_JEXEC') or die('Restricted access'); ?>

<form action="index.php" method="post" name="adminForm" id="adminForm">
<div class="col100">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'wykadowc' ); ?></legend>

		<table class="admintable">
		<tr>
			<td width="100" align="right" class="key">
				<label for="psw">
					<?php echo JText::_( 'immie' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="immie" id="immie" size="32" maxlength="250" value="" />
			</td>
		</tr>
		<tr>
			<td width="100" align="right" class="key">
				<label for="psw">
					<?php echo JText::_( 'nazwisko' ); ?>:
				</label>
			</td>
			<td>
				<input class="text_area" type="text" name="nazwisko" id="nazwisko" size="32" maxlength="250" value="" />
			</td>
		</tr>
	</table>
	</fieldset>
</div>
<div class="clr"></div>

<input type="hidden" name="option" value="com_psw" />
<input type="hidden" name="controller" value="wykladowca" />
<input type="hidden" name="task" value="save" />

</form>
