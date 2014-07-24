<?php


error_log ( "class loaded!!" );

class ContentHoJaTextImageSimple extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_hoja_textimage_simple';

	/**
		* Import the back end user object
		*/
	public function __construct( $param )
	{
		parent::__construct( $param );
		$this->import('Database');
	}



	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		$images = deserialize ( $this->multiSRC );

		if ( ! is_array ( $images ) || empty ( $images ))
			$images = array ();

		$this->Template->image_files = \FilesModel::findMultipleByUuids($images);
	}

}
