<?php

$this->data['header'] = $this->t('{logout:title}');
$this->data['jquery'] = array('core' => true);
$this->includeAtTemplateBase('includes/header.php');

echo('<h2>' . $this->data['header'] . '</h2>');
echo('<p>' . $this->t('{logout:logged_out_text}') . '</p>');

$this->includeAtTemplateBase('includes/footer.php');
