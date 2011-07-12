<h1><?=$content['main']['title'];?></h1>

<ul id="complexList" >
<?foreach($content['main']['complexList'] as $label => $complexListListItem):?>
 <li class="complexListItem">
  <p class="description"> <?=$complexListListItem['description'];?></p>

  <div type="checkboxResult">
   <label>One</label>
   <input type="checkbox" name="singleCheckbox" <?echo ($complexListListItem['singleCheckbox'])?'checked="true" ':'';?> disabled="disabled" >
  </div>

  <p class="singleRadioGroup"> <?=$complexListListItem['singleRadioGroup'];?></p>

  <?if(is_object($complexListListItem['file'])):?>
  <a href="<?=$complexListListItem['file']->fullpath;?>"><?=$complexListListItem['file']->filename;?></a>

  <?endif;?>

 </li>
<?endforeach;?>
</ul>

