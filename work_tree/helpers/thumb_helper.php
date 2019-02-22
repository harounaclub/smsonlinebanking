<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Thumb()
 * A TimThumb-style function to generate image thumbnails on the fly.
 *

 * @author hermann N'djomon <hermann.ndjomon@gmail.com>
 * @access public
 * @param string $src
 * @param int $width
 * @param int $height
 * @param string $dest

 *
 */

function thumb($src, $width, $height,$dest) {

	// Get the CodeIgniter super object
	$CI = &get_instance();


	$config['image_library'] = 'gd2';
	$config['source_image'] = $src;
	$config['create_thumb'] = FALSE;
	$config['master_dim'] = 'width';
	$config['maintain_ratio'] = FALSE;
	$config['width'] = $width;
	$config['height'] =$height;
	$config['new_image'] = $dest;
	$CI->load->library('image_lib', $config);
	$CI->image_lib->initialize($config);
	$CI->image_lib->resize();


}

/* End of file thumb_helper.php */
/* Location: ./application/helpers/thumb_helper.php */
