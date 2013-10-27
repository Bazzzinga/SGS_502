<?
/*
0 - Главная
1 - О нас
2 - Продукция
3 - Услуги
4 - Фотогалерея
5 - Партнеры
6 - Контакты
*/

$menu_items = array("Главная","О нас", "Продукция", "Услуги", "Документы", "Фотогалерея", "Партнеры", "Контакты");

$menu_urls = array($path."index.php", $path."", $path."", $path."", $path."", $path."photos.php", $path."partners.php", $path."contacts.php");

$menu_has_submenu = array(0, 0, 1, 1, 0, 0, 0, 0);

$menu_submenu_items = array(	
	0 => array("Очистные сооружения промышленного стока", "Очистные сооружения ливневого стока", "Биологическая очистка", "Водоподготовка", "КНС", "Вспомогательное оборудование"),	
	1 => array("Строительство инженерных сетей", "Реконструкция очистных сооружений", "Гидроизоляция, инъекция", "Проектирование")
);

$menu_submenu_urls = array(
		0 => array("product/o_s_prom_stok.php", "product/o_s_livn_stok.php", "product/bio_ochistka.php", "product/vodopodgotovka.php", "product/kns.php", "product/vspom_oborud.php"),
		1 => array("service/stroit_ingen_setey.php", "service/reconstruct.php", "service/hidroizol.php", "service/proectir.php")
);

$submenu_counter = 0;
?>

<table height="100%" width="100%" cellspacing="0" border="0">
	<tr>
		<td class="np menu menu_choosed menu_top">								
			<? echo($menu_items[$type]); ?>
		</td>
	</tr>
	<tr>
		<td class="np menu menu_body">								
			<table height="100%" width="100%" cellspacing="0" border="0"><tr><td style="text-align: center;" class="uhover np">
<?

for($i = 0; $i < count($menu_items); $i++)
{
	if(($i == $type) && (!$menu_has_submenu[$i]))
		continue;
	
	if($menu_has_submenu[$i])
	{
		$submenu_counter++;
		?>
		<span class="menu_iefix" onclick="submenu(<?echo($submenu_counter);?>);" onmouseover="this.className='menu_iefix_hover'" onmouseout="this.className='menu_iefix'"><?echo($menu_items[$i]);?></span>
			<div class="menu_submenu" id="<?echo("submenu_".$submenu_counter);?>"  style="display:none">
				<div type="none" style="margin:0; padding-left:15;">
					<?							
						for($j = 0;$j < count($menu_submenu_items[$submenu_counter - 1]);$j++)
						{
					?>
					<div><a href="<?echo($path.$menu_submenu_urls[$submenu_counter - 1][$j]);?>" class="menu_submenu_item"><?echo($menu_submenu_items[$submenu_counter - 1][$j]);?></a></div>
					<?
						}
					?>
				</div>
			</div>
		<?
	}
	else
	{
		?>
		<a href="<?echo($path.$menu_urls[$i]);?>" class="menu_item"><span class="menu_item menu_item_text"><?echo($menu_items[$i]);?></span></a>
		<?		
	}
			
	if(!(($i == (count($menu_items) - 1))||(($i == (count($menu_items) - 2)) && ($type == (count($menu_items) - 1)))))
	{
		?>
		<div><img src="<?echo($path.'img/menu_sep.png');?>" class="menu_sep"></div>
		<?
	}
}	
?>
	</td></tr></table>
	</td>
			</tr>
			<tr><td class="np" style="height:19px;"><img src="<?echo($path.'img/menu_bot.png');?>"></td></tr>
			<tr>
				<!-- bonus -->
				<td class="np" style="vertical-align: top;">
				<!--
					<div style="position:relative; left:20; margin-top: 25; padding: 5; background:#d1c3a8; border: 2px solid #dcd1be; border-radius: 4;">
						<span style="color: #035e95;padding-top:5;padding-bottom:5;font-weight:bold;">Консультация</span><br>
						<span style="color: #035e95;padding-top:5;padding-bottom:5;font-weight:bold;">Оперативный выезд на объект</span><br>
						<span style="color: #035e95;padding-top:5;padding-bottom:5;font-weight:bold;">Готовые решения</span>						
					</div>
				-->
				</td>
				<td class="np"></td>
			</tr>
		</table>
		
	</td>
	<td class=" np main_block">