<?php 
echo "<script>";
echo "var monthnames=['jan','feb','mar','apr','may','jun','jul','aug','sep','oct','nov','dec']";
echo "var d=new Date()";
echo "var today=d.getDate()";
echo "var month=d.getMonth()";
echo "var year=d.getFullYear()";
echo "var hour=d.getHours()";
echo "var min=d.getMinutes()";
echo "var sec=d.getSeconds()";
echo "document.write(today+"-"+monthnames[month]+"-"+year+"-"+hour+"-"+min+"-"+sec)";
echo "</script>";
?>