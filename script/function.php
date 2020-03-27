<?php

function newModal($name, $title, $body, $isForm = false) {
	$res = "<div class='modal fade' id='$name' tabindex='-1' role='dialog' aria-labelledby='$name-label' aria-hidden='true'>
		<div class='modal-dialog modal-dialog-centered' role='document'>
			<div class='modal-content'>
				<div class='modal-header'>
				  <h5 class='modal-title' id='$name-label'>$title</h5>
				  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
				    <span aria-hidden='true'>&times;</span>
				  </button>
				</div>";
	if ($isForm) $res .= "<form name = '$name'>";
	$res .=
				"<div class='modal-body'>
					$body";
	if ($isForm) $res .=
								"<input type='hidden' name='Форма' value='$title'>
								<div class='form-group'>
			            <input type='text' class='form-control' name='Имя' placeholder='Имя*' required>
			          </div>
			          <div class='form-group'>
			            <input type='tel' class='form-control' name='Телефон' placeholder='Телефон*' required>
			          </div>
			          <div class='form-group'>
			            <input type='email' class='form-control' name='Почта' placeholder='Email'>
			          </div>

			          <!-- Hidden Required Fields -->
								<input type='hidden' name='project_name' value='т3-монолит'>
								<input type='hidden' name='admin_email' value='kontrakt.gov@gmail.com'>
								<input type='hidden' name='form_subject' value='Заявка из формы $name'>
								<!-- END Hidden Required Fields -->";
	$res .=
				"</div>
				<div class='modal-footer'>
			    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Закрыть</button>";
	if ($isForm) $res .=
								"<button type='submit' class='btn btn_accent'>Позвоните мне</button>";
	$res .=
			  "</div>";
	if ($isForm) $res .= "</form>";
	$res .=  
			"</div>
		</div>
	</div>";
	echo $res;
}