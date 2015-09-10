# Codeigniter Simple Template Library

By Turan Karatuğ
http://www.turankaratug.com

## About
A simple template library for CodeIgniter 3.0, which allows you to quickly build and organise your CI site using a template system.

## Installation
Download and place the files in your CI installation, following the same folder structure. Add the 'assets' folder to your root, this is where you'll put your template folders and images/css/js files.

Add 'template' to your autoload file in the libraries config item.

## Usage
A quick example using Home controller in CI controllers folder:

```
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->template->set_platform('public');
		$this->template->set_theme('default');
	}

	public function index()
	{
		$data['content']	= 'Hello World !';

		$this->template->set_title('Simple Template Library');
		$this->template->set_css('bootstrap.min.css');
		$this->template->set_css('bootstrap-theme.css');
		$this->template->set_css('navbar.css');
		$this->template->set_js('https://code.jquery.com/jquery-1.11.3.min.js','footer','remote');
		$this->template->set_js('bootstrap.min.js','footer');
		$this->template->set_meta('author','Turan Karatuğ');
		$this->template->set_layout('home_view');
		$this->template->render($data);
	}
}
```

## Available Methods
#### set_css($css_file, $source = 'local')
Load a css file to the page. 
```$source``` must be `local` or `remote`. If you want to use an external css file, use `remote` and give url to ```$css_file```.

#### set_js($js_file, $location = 'header', $source = 'local')
Load a js file to the page. 
```$location``` must be `header` or `footer`. So you can add your file between `<head></head>` tags or before `</body>` tag.
```$source``` must be `local` or `remote`. If you want to use an external js file, use `remote` and give url to ```$js_file```.

#### set_meta($meta_name, $meta_content)
Load a meta tag to the page.

#### set_title($title)
Set the title of the page.

#### get_css()
Returns all setted css files as array.

#### get_js()
Returns all setted js files as array.

#### get_meta()
Returns all setted meta tags as array.

#### get_title()
Returns setted page title as string.

#### set_layout($layout)
Set a view file.

#### get_layout()
Returns setted layout.

#### set_theme($theme)
Set theme of the site.

#### get_theme()
Returns setted theme folder as string.

#### set_platform($platform)
Set platform of the theme. (Exp: Public or Admin).

#### get_platform()
Returns setted platform as string.

#### render($data = array())
Publishes the page with `$data` variable.