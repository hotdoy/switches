<?php

	class extension_switches extends Extension
	{

		// Set delegates
		public function getSubscribedDelegates()
		{
			return array(
				array(
					'page'     => '/backend/',
					'delegate' => 'InitaliseAdminPageHead',
					'callback' => 'appendAssets'
				),
			);
		}

		// Add .css to head
		public function appendAssets()
		{
			Administration::instance()->Page->addStylesheetToHead(URL . '/extensions/switches/assets/switches.css');
		}

	}
