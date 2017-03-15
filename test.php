<?php
	for($i=0; $i<6; $i++)
	 
{
	$arr1[]=$i;
}
	for($i=3; $i<9; $i++) 
         
{
        $arr2[]=$i;
}
	foreach($arr1 as $key =>$value)
{
	foreach($arr2 as $k =>$val)
	{
		if($value==$val)
		{
			echo $value."<br/>";
		}
	}
}
	

?>
