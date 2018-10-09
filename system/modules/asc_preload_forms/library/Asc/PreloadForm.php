<?php
 
/**
 * ASC - Preload Forms
 *
 * Copyright (C) 2018 Andrew Stevens Consulting
 *
 * @package    asconsulting/preload_forms
 * @link       https://andrewstevens.consulting
 */

 
namespace Asc;


class PreloadForm 
{

	public function preloadFields($arrFields, $formId, $objForm)
	{
		if (substr($formId, 0, 10) == "auto_form_" && \Input::post('preload_form') != '') {
			if ($objForm->id == \Input::post('preload_form')) {
				foreach ($arrFields AS $objField)
				{
					if (\Input::post($objField->name) != '') {
						$objField->value = \Input::post($objField->name);
					}
				}	
			}
		}
		return $arrFields;
	}

}