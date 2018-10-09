<?php
 
/**
 * ASC - Preload Forms
 *
 * Copyright (C) 2018 Andrew Stevens Consulting
 *
 * @package    asconsulting/preload_forms
 * @link       https://andrewstevens.consulting
 */

 
/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['compileFormFields'][]     = array('Asc\PreloadForm', 'preloadFields');