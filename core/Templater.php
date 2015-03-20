<?php
class Templater {
	protected $twig;
	protected $template;
	protected $templates = [];

	protected static $instance = null;

	protected function __construct() {
		$loader = new Twig_Loader_Filesystem('template');
		$this->twig = new Twig_Environment($loader, array(
			'cache' => 'tmp',
		));
		$this->templates = array_filter(glob('template/*'), 'is_dir');
		$template = isset($_SESSION['template'])?$_SESSION['template']:'default';
		if (in_array($template, $this->templates))
			$this->template = $template;
		else
			 $this->template = 'default';
	}

	public static function getInstance() {
		if (!self::$instance) {
			self::$instance = new Templater();
		}
		return self::$instance;
	}

	public function render($file, $params = array()) {
		echo $this->twig->render($this->template . '/view/' . $file . '.html.twig', $params);
		return $this;
	}

	public function setTemplate($template = 'default') {
		 if (!in_array($tempalte, $this->templates))
			throw new Exception("Unknown template $template");
		$this->template = $_SESSION['template'] = $template;
		return $this;
	}
}
