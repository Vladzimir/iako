<?php
	$dir='site';
	if ($response->{$dir.'_add'})
	{
		$this->load->view($dir.'/add');
	} 
	if (count($items)==0) $items=array();
	foreach ($items as $key=>$item)
	{
		if ($item->show_type=='edit')
		{
			$this->load->view($dir.'/edit', array('item'=>$item));
		} else
		if ($item->show_type=='delete')
		{
			$this->load->view($dir.'/delete', array('item'=>$item));
		} else
		if ($key==$response->{$dir.'_id'})
		{
			$this->load->view($dir.'/select', array('item'=>$item));
		} else
		{
			$this->load->view($dir.'/defoult', array('item'=>$item));
		}
	}
?>
