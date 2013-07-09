<?php
defined('_JEXEC') or die('Restricted access');
?>
<?php echo '<?xml version="1.0" encoding="utf-8"?'.'>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<!--
	##########################################
	## redWeb.dk                            ##
	## Blangstedgaardsvej 1, 1 sal          ##
	## 5220 Odense SØ                       ##
	## Danmark                              ##
	## email@redweb.dk                      ##
	## http://www.redweb.dk                 ##
	## Dato: 2013-07-09                     ##
	##########################################
-->
	<?php $this->setMetaData('generator','redWEB ApS – www.redweb.dk'); ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/normalize.css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/magic.css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/lessphp/compile.php" />

</head>
<body>

<h1>redBASE - Testing LESS PHP compiler - It's working if I have a red background</h1>


<?php include_once '/incl/footerJs.php'; ?>
</body>
</html>