<html>
<style>
.c{
    font-family:'digital-clock-font';
    src: url('digital-7.ttf');
   }
</style>
</html>



<?php
echo "
<table border=2>
<tr>
    <td>
        <table bgcolor=black>
        
        <tr>
        <td colspan=7 align=center> <font size=1 color=white> DATE </font> </td>
        <td colspan=7></td>
        <td colspan=7 align=center> <font size=1 color=white> MONTH </font> </td>
        <td colspan=7></td>
        <td colspan=7 align=center> <font size=1 color=white> YEAR </font> </td>
        </tr>

        <tr >
        <td colspan=7 align=center class=c> <font size=7 color=red>".date('d')."  </font> </td>
        <td colspan=7> </td>
        <td colspan=7 align=center> <font size=7 color=red>  ".date('m')." </font> </td>
        <td colspan=7> </td>
        <td colspan=7 align=center> <font size=7 color=red>" .date('y')."  </font> </td>
        </tr>

        <tr>
        <td colspan=7 align=center> <font size=1 color=white> HOUR </font> </td>
        <td colspan=7> </td>
        <td colspan=7 align=center> <font size=1 color=white> MINUTE </font> </td>
        <td colspan=7></td>
        <td colspan=7 align=center> <font size=1 color=white> SECOND </font> </td>
        </tr>

        <tr>
        <td colspan=7 align=center> <font size=7 color=red >".date('h')."  </font> </td>
        <td colspan=7 align=center> <font size=7 color=red >:  </font> </td>
        <td colspan=7 align=center> <font size=7 color=red > ".date('i')." </font> </td>
        <td colspan=7 align=center> <font size=7 color=red >:  </font> </td>
        <td colspan=7 align=center> <font size=7 color=red >" .date('s')."  </font> </td>
        </tr>

        <tr>
        <td colspan=5> <font size=1 color=white>  <input type=radio name=a>SUN </font> </td>
        <td colspan=5> <font size=1 color=white>  <input type=radio name=a>MON </font> </td>
        <td colspan=5> <font size=1 color=white>  <input type=radio name=a>TUE </font> </td>
        <td colspan=5> <font size=1 color=white>  <input type=radio name=a>WED </font> </td>
        <td colspan=5> <font size=1 color=white>  <input type=radio name=a>THU </font> </td>
        <td colspan=5> <font size=1 color=white>  <input type=radio name=a>FRI </font> </td>
        <td colspan=5> <font size=1 color=white>  <input type=radio name=a>SAT </font> </td>

        
        </tr>
        <tr>
        <td colspan=30 align=center><font size=1 color=white>TEMP.</font><font size=7 color=red>29</font> <sup><sup><font color=white>.</sup>c</sup></font> </td>
        <td colspan=5 ><font size=1 color=white> <input type=radio name=am>AM<br><input type=radio name=am>PM </font></td>
        </tr>

        <tr>
        <td colspan=21 align=left><b><font face='Bradley Hand ITC' size=5  color=white >Bhakti</font><br><font color=white face='Bradley Hand ITC'>Clocks</font></b></td>
        </tr>

        </table>
    </td>
</tr>
</table>";

?>