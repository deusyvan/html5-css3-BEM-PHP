    <?php
    require_once 'lib/xtemplate.class.php';
    
    $template = new XTemplate("template/index.html");
    
    $titulo = "DFS - Web";
    $mensagem = "2.9. Elementos estruturais";
    
    $template->assign("titulo", $titulo);
    
    $template->assign("mensagem", $mensagem);
    
    $template->parse("principal");
    $template->out("principal");
    
	?>
