<?php
/* C�digo Original/ Original Code by Woodys
* http://www.zend.com/codex.php?id=176
*
* adapta��o/tradu��o para o portugu�s e formato brasileiro das datas
*
* Alguns exclarecimentos
* - O que � TIMESTAMP do Unix?
* - � a contagem, em segundos, desde o dia 1 de janeiro de 1970 00:00:00 GMT
*     ,i.e., os segundos que se passaram at� momento desde as ZERO horas do dia 1 de janeiro de 1970
*     exemplo:
*     timestamp = 1042752929  => passaram-se 1042752929 segundos desde 1/jan/1970 00horas 00min 00 seg
*
*  Tradu��o e Adapta��o by Calvin
*/

/* Converte formato DATE do MySQL para o humano
   2003-12-30 -> 30/12/2003 */
function mysql_date_para_humano($dt) {
    if ($dt=="0000-00-00") return '';
    $yr=strval(substr($dt,0,4));
    $mo=strval(substr($dt,5,2));
    $da=strval(substr($dt,8,2));
    return date("d/m/Y", mktime (0,0,0,$mo,$da,$yr));
}
/* Converte formato do DATETIME do MySQL para um compreens�vel para os homens
   2003-12-30 23:30:59 -> 30/12/2003 23:30:59 */
function mysql_datetime_para_humano($dt) {
    $yr=strval(substr($dt,0,4));
    $mo=strval(substr($dt,5,2));
    $da=strval(substr($dt,8,2));
    $hr=strval(substr($dt,11,2));
    $mi=strval(substr($dt,14,2));
    $se=strval(substr($dt,17,2));
    return date("d/m/Y H:i:s", mktime ($hr,$mi,$se,$mo,$da,$yr));
}
/* Converte formato TIMESTAMP do MySQL para o humano
   20031230233029 -> 30/12/2003 23:30:59 */
function mysql_timestamp_para_humano($dt) {
    $yr=strval(substr($dt,0,4));
    $mo=strval(substr($dt,4,2));
    $da=strval(substr($dt,6,2));
    $hr=strval(substr($dt,8,2));
    $mi=strval(substr($dt,10,2));
    $se=strval(substr($dt,12,2));
    return date("d/m/Y H:i:s", mktime ($hr,$mi,$se,$mo,$da,$yr));
}
/* Converte formato TIMESTAMP do Unix para o humano
   1072834230 -> 30/12/2003 23:30:59 */
function timestamp_para_humano($ts) {
    $d=getdate($ts);
    $yr=$d["year"];
    $mo=$d["mon"];
    $da=$d["mday"];
    $hr=$d["hours"];
    $mi=$d["minutes"];
    $se=$d["seconds"];
    return date("d/m/Y H:i:s", mktime($hr,$mi,$se,$mo,$da,$yr));
}
/* Converte o TIMESTAMP do Unix para o TIMESTAMP do MySQL
   1072834230 -> 20031230233029 */
function timestamp_para_mysql_timestamp($ts) {
    $d=getdate($ts);
    $yr=$d["year"];
    $mo=$d["mon"];
    $da=$d["mday"];
    $hr=$d["hours"];
    $mi=$d["minutes"];
    $se=$d["seconds"];
    return sprintf("%04d%02d%02d%02d%02d%02d",$yr,$mo,$da,$hr,$mi,$se);
}
/* Converte o TIMESTAMP do Unix para o DATE do MySQL
   1072834230 -> 2003-12-23 */
function timestamp_para_mysql_date($ts) {
    $d=getdate($ts);
    $yr=$d["year"];
    $mo=$d["mon"];
    $da=$d["mday"];
    return sprintf("%04d-%02d-%02d",$yr,$mo,$da);
}
/* Converte o TIMESTAMP do Unix para o DATETIME do MySQL
   1072834230 -> 2003-12-23 23:30:59 */
function timestamp_para_mysql_datetime($ts) {
    $d=getdate($ts);
    $yr=$d["year"];
    $mo=$d["mon"];
    $da=$d["mday"];
    $hr=$d["hours"];
    $mi=$d["minutes"];
    $se=$d["seconds"];
    return sprintf("%04d-%02d-%02d %02d:%02d:%02d",$yr,$mo,$da,$hr,$mi,$se);
}

/* Converte formato TIMESTAMP do MySQL para o TIMESTAMP do Unix
   20031230233029 -> 1072834230 */
function mysql_timestamp_para_timestamp($dt) {
    $yr=strval(substr($dt,0,4));
    $mo=strval(substr($dt,4,2));
    $da=strval(substr($dt,6,2));
    $hr=strval(substr($dt,8,2));
    $mi=strval(substr($dt,10,2));
    $se=strval(substr($dt,10,2));
    return mktime($hr,$mi,$se,$mo,$da,$yr);
}
/* Converte formato DATETIME do MySQL para o TIMESTAMP do Unix
   2003-12-30 23:30:59 -> 1072834230 */
function mysql_datetime_para_timestamp($dt) {
    $yr=strval(substr($dt,0,4));
    $mo=strval(substr($dt,5,2));
    $da=strval(substr($dt,8,2));
    $hr=strval(substr($dt,11,2));
    $mi=strval(substr($dt,14,2));
    $se=strval(substr($dt,17,2));
    return mktime($hr,$mi,$se,$mo,$da,$yr);
}
/* pegar um valor de data (em um formato qualquer) enviado por um usu�rio e transformar no
   formato DATE do MySQL */
function mysql_cvdate($s) {
    return timestamp_para_mysql_date(cvdate($s));
}

/* Calcula a diferen�a de tempo entre os valores $comeco e $fim e retorno em portugu�s literal a quantidade
   de tempo da diferen�a entre os valores.
  nota: ambos os valores de entrada devem estar no formato timstamp UNIX: */
function timeleft($comeco,$fim) {
    $dif=$fim-$comeco;
    $years=intval($dif/(60*60*24*365));
    $dif=$dif-($years*(60*60*24*365));
    $months=intval($dif/(60*60*24*30));
    $dif=$dif-($months*(60*60*24*30));
    $weeks=intval($dif/(60*60*24*7));
    $dif=$dif-($weeks*(60*60*24*7));
    $days=intval($dif/(60*60*24));
    $dif=$dif-($days*(60*60*24));
    $hours=intval($dif/(60*60));
    $dif=$dif-($hours*(60*60));
    $minutes=intval($dif/(60));
    $seconds=$dif-($minutes*60);
    $s='';
    if ($years<>0) $s.= $years." anos ";
    if ($months<>0) $s.= $months." meses ";
    if ($weeks<>0) $s.= $weeks.' semanas ';
    if ($days<>0) $s.= $days.' dias ';
    if ($hours<>0) $s.= $hours.' horas ';
    if ($minutes<>0) $s.= $minutes.' minutos ';
    if ($seconds<>0) $s.= $seconds.' segundos ';
    return $s;
}

/* Converte uma data humana para o formato TIMESTAMP do Unix, retorna zero se houver erro.
   
   Suporta delimitadores de datas como tra�o, ponto, barra e espa�o; nomes de m�s, ano com apenas 2 digitos
   Exemplo de entradas que a fun��o aceita:
   30-12-2003 23:30:59
   30-12-2003
   30 12 2003
   30.12.03
   30/dez/2003
   30 dezembro 03
   30 de dezembro de 03
   30 de dezembro de 2003
   30, dezembro de 2003
*/
function cvdate($s) {
    $delimiter='';
    $s = str_replace(' de ','/',strtolower($s));
    if (strpos($s,'-')>0) $delimiter='-';
    elseif (strpos($s,'/')>0) $delimiter='/';
    elseif (strpos($s,' ')>0) $delimiter=' ';
    elseif (strpos($s,'.')>0) $delimiter='.';
    $s = str_replace(', ',$delimiter,$s);
    if (empty($delimiter)) return 0;
    $p1=strpos($s,$delimiter);
    $p2=strpos($s,$delimiter,$p1+1);
    $a=substr($s,$p2+1);
    $m=substr($s,$p1+1,$p2-($p1+1));
    $d=substr($s,0,$p1);
    if (intval($a)<100)
    {
        $a=(intval($a)>69)? strval(1900+intval($a)) : strval(2000+intval($a));
    }
    if (intval($m)==0) // cont�m m�s em extenso
    {
        return cvdate_portugues($d,$m,$a);
    }else{
        return cvdate_numerico($d,$m,$a);
    }
}

/* fun��o auxiliar do cvdate */
function cvdate_portugues($d,$m,$y) {
    $d2=0; $m2=0; $y2=0;
    $d2=intval($d);
    $m=strtolower($m);
    switch(substr($m,0,3)) {
        case 'jan': $m2=1; break;
        case 'fev': $m2=2; break;
        case 'mar': $m2=3; break;
        case 'abr': $m2=4; break;
        case 'mai': $m2=5; break;
        case 'jun': $m2=6; break;
        case 'jul': $m2=7; break;
        case 'ago': $m2=8; break;
        case 'set': $m2=9; break;
        case 'out': $m2=10; break;
        case 'nov': $m2=11; break;
        case 'dez': $m2=12; break;
    }
    $y2=intval($y);
    if (($d2==0)||($m2==0)||($y2==0)) return 0;
    return mktime(0,0,0,$m2,$d2,$y2);
}
/* fun��o auxiliar do cvdate */
function cvdate_numerico($d,$m,$y) {
    $d2=0; $m2=0; $y2=0;
    $d2=intval($d);
    $m2=intval($m);
    $y2=intval($y);
    if (($d2==0)||($m2==0)||($y2==0)) return 0;
    return mktime(0,0,0,$m2,$d2,$y2);
}

?> 