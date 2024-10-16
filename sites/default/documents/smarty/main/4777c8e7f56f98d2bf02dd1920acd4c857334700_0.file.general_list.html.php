<?php
/* Smarty version 4.3.4, created on 2024-10-14 08:34:13
  from '/var/www/html/openemr/templates/practice_settings/general_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_670cd785372232_04440571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4777c8e7f56f98d2bf02dd1920acd4c857334700' => 
    array (
      0 => '/var/www/html/openemr/templates/practice_settings/general_list.html',
      1 => 1700108885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670cd785372232_04440571 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/openemr/library/smarty/plugins/function.xlt.php','function'=>'smarty_function_xlt',),1=>array('file'=>'/var/www/html/openemr/library/smarty/plugins/function.headerTemplate.php','function'=>'smarty_function_headerTemplate',),));
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo smarty_function_xlt(array('t'=>'Practice Settings'),$_smarty_tpl);?>
</title>

    <?php echo smarty_function_headerTemplate(array('assets'=>'common|datatables|datatables-colreorder|datatables-dt|datatables-bs'),$_smarty_tpl);?>


    <?php echo '<script'; ?>
>

        $(function () {
            $('.sidebar-expand button').on('click', function () {
                $(this).toggleClass("flip-y");
                $('.nav-sidebar, .main-full').toggleClass("active");
            });
        });
    <?php echo '</script'; ?>
>
</head>
<body class="body-topnav">
  <div class="container-fluid pl-0">
    <nav class="nav navbar-light bg-light fixed-top top-before-sidebar">
        <div class="container-fluid py-2">
            <div class="sidebar-expand d-md-none">
                <button type="button" class="text-dark">
                    <i class="fa fa-angle-right fa-inverted"></i>
                </button>
            </div>
            <a class="navbar-brand" href="#"><?php echo smarty_function_xlt(array('t'=>'Practice Settings'),$_smarty_tpl);?>
</a>
            <div id="practice-setting-nav">
            </div>
        </div>
    </nav>
      <nav class="nav-sidebar bg-light mt-3 mt-md-5 pt-5 pt-md-3">
          <div class="sidebar-content">
              <ul class="nav flex-column">
                  <li class="nav-item"><a class="nav-link text-body" href="<?php echo $_smarty_tpl->tpl_vars['TOP_ACTION']->value;?>
pharmacy&action=list"><?php echo smarty_function_xlt(array('t'=>'Pharmacies'),$_smarty_tpl);?>
</a></li>
                  <li class="nav-item"><a class="nav-link text-body" href="<?php echo $_smarty_tpl->tpl_vars['TOP_ACTION']->value;?>
insurance_company&action=list"><?php echo smarty_function_xlt(array('t'=>'Insurance Companies'),$_smarty_tpl);?>
</a></li>
                  <li class="nav-item"><a class="nav-link text-body" href="<?php echo $_smarty_tpl->tpl_vars['TOP_ACTION']->value;?>
insurance_numbers&action=list"><?php echo smarty_function_xlt(array('t'=>'Insurance Numbers'),$_smarty_tpl);?>
</a></li>
                  <li class="nav-item"><a class="nav-link text-body" href="<?php echo $_smarty_tpl->tpl_vars['TOP_ACTION']->value;?>
x12_partner&action=list"><?php echo smarty_function_xlt(array('t'=>'X12 Partners'),$_smarty_tpl);?>
</a></li>
                  <li class="nav-item"><a class="nav-link text-body" href="<?php echo $_smarty_tpl->tpl_vars['TOP_ACTION']->value;?>
document_category&action=list"><?php echo smarty_function_xlt(array('t'=>'Document Categories'),$_smarty_tpl);?>
</a></li>
                  <li class="nav-item"><a class="nav-link text-body" href="<?php echo $_smarty_tpl->tpl_vars['TOP_ACTION']->value;?>
hl7&action=default"><?php echo smarty_function_xlt(array('t'=>'HL7 Viewer'),$_smarty_tpl);?>
</a></li>
              </ul>
          </div>
      </nav>
      <main class="main-full">
        <div class="pl-3 pt-5 pt-md-3">
            <div class="section-header">
                <h2><?php echo $_smarty_tpl->tpl_vars['ACTION_NAME']->value;?>
</h2>
            </div>
            <div>
                <?php echo $_smarty_tpl->tpl_vars['display']->value;?>

            </div>
        </div>
      </main>
  </div>
</body>
<?php echo '<script'; ?>
>

    $(document).ready(function(){
        $('#pharmacies').dataTable({

        });
    });
<?php echo '</script'; ?>
>
</html>
<?php }
}
