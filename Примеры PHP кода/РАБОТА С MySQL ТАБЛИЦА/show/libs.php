<?php
//ôóíêöèÿ ïîêàçà àáîíåíòîâ
function showALL(){              //ôóíêöèÿ ïîêàçûâàåò âñåõ àáîíåíòîâ òàáëèöè SQL
$query = "SELECT * FROM test1 ORDER BY id";  // ïèøåì çàïðîñ áàçå äàííûõ íà ïîêàç âñåõ äàííûõ èç òàáëèöè test1 è ORDER BY id - âûâîä äàííûõ ñàðòèðóåòüñÿ ïî ID
$res = mysql_query($query);     //çàïðîñ ïîñûëàåì â áàçó äàííûõ (ïåðåìåííàÿ $res ïîÿâèòüñÿ òàáëè÷êîâ
$data = array(); //ñîçäàäèì ìàññèâ êîòîðûé ìû áóäåì èñïîëüçûâàòü â íàøåì öèêëå
while($row = mysql_fetch_assoc($res)) {  //äåëàåì ìàññèâ êîòîðûé ìîæíî áóäåò âñòàâèòü â òàáëèöó html
   $data[] = $row;              //(â ìàññèâ $data ïîïàäàåò òî ÷òî ïîïàäàåò â ìàññèâ $row)â ìàññèâ ïîïàäàþò ïî î÷åðåäè âñå ðÿäû íàøåé òàáëèöè
}
    return $data;       //( è â ðåçóëüòàòå âîçâðàùàåòüñÿ ìàññèâ $data) âîçâðàùàåì êàê ðåçóëüòàò ðàáîòû ôóíêöèè showALL
}//ôóíêöèÿ äîáàâëåíèå àáîíåíòà
function newContact($name, $phone, $age){ // ôóíêöèÿ äîáàâëåíèÿ îáàíåíòà ñ íàøèìè ïàðàìåòðàìè òàáëèöè ÁÄ
$query = "INSERT INTO test1 (name, phone, age) VALUES ('$name', '$phone', $age)";   // îòïðàâëÿåì çàïðîñ ê ÁÄ VALUES â òîì ïîðÿäêå ÷òî è çíà÷åíèÿ â test1 è $name $phone  â êàâû÷êàõ ïîòîìó êàê ñòðîêîâûå äàííûå
$res = mysql_query($query);   // îòïðàâëÿåì íàøü çàïðîñ â ÁÄ çàïðîñ ïîìåñòèëè â ïåðåìåíóþ $res õîòÿ ýòî íå îáÿçàòåëüíî
mysql_affected_rows(); //âûçûâàòü ôóíêöèþ ìîæíî ñðàçó ïîñëå îòïðàâëåíîãî çàïðîñà ê ÁÄ (ôóíêöèÿ âîçâðàøÿåò(ñ÷èòàåò) êîëè÷åñòâî ðÿäîâ êîòîðûå áûëè çàòðîíóòû (îòïðàâëåíû) ïîñëåäíèì çàïðîñîì (ôóíêöèÿ ïîìîãàåò ïðîâåðèòü ðåçóëüòàò çàïðîñà) åñëè ôóíêöèÿ ïîêàæåò âñå ÷òî áîëüøå 0 çíà÷èò ÷òî-òî äîáàâèëîñü (èñïîëüçóþò åå ïðè èñïîëüçîâàíèè çàïðîñîâ INSERT UPDATE DELED)
if(mysql_affected_rows() > 0){  //åñëè ôóíêöèÿ áîëüøå 0 çíà÷èò ÷òî-òî äîáàâèëè ÷òî÷èò ðàáîòàåò
    return TRUE;
} else {
    return FALSE;
}
}//ôóíêöèÿ óäàëåíèå àáîíåíòà
function delContact($id){  //ID îïèñàí â ôàéëå del.php (id ýòî èäåíòèôèêàòîð ïîüçîâàòåëÿ êîòîðûé õîäèì óäàëèòü èç òàáëèöè â íàøåé ÁÄ)
    $query = "DELETE FROM test1 WHERE id = $id"; //çàïðîñ ñ óäàëåíèåì ID êîòîðûé áóäåò ïîäàâàòüñÿ â ïåðåìåííîé $id
    mysql_query($query);  //îòïðàâëÿåì çàïðîñ
}
//ôóíöêèÿ ïîêàçà êîíêðåòíîãî àáîíåíòà (áóäåì èñïîëüçûâàòü òîò æå èäåíòèôèêàòîð ID)
function showContact($id){
    $query = "SELECT * FROM test1 WHERE id = $id"; //îòìåòèòü â òàáëèöå test1 id = ðàâíûé çíà÷åíèþ ïåðåìåííîé $id
    $res = mysql_query($query); //çàïðîñ ïîìåñòèì â ïåðåìåíóþ $res
    $row = mysql_fetch_assoc($res); //ñôîðìèðóåì ìàññèâ $row
    return $row; //âîçâðàùàòü áóäåò ôóíêöèÿ ìàññèâ $row
}
//ôóíêöèÿ èçìåíåíèÿ äàííûõ àáîíåíòà
function editContact($id, $name, $phone, $age){
    $query = "UPDATE test1 SET name = '$name', phone = '$phone', age = $age WHERE id = $id";    //ïèøåì çàïðîñ íà èçìåíåíèå äàííûõ òàáëèöè test1 ïåðåìåííàÿ $age íå â êàâû÷êàõ ïîòîìó êàê îíà íåñåò â ñåáå ÷èñëîâûå äàííûå - äëÿ òîãî ÷òî-áû äàííûõ áàäè èçâåíåíû ïî îäíîé (à íå âñå) ìû ïèøåì óñëîâèå ïîñëå êîìàíäû WHERE =
    $res = mysql_query($query);
    if(mysql_affected_rows() > 0) { //ïðîâåðÿåì èçìåíèëîñü ëè ÷òî-òî
        return TRUE;
    }else{
        return FALSE;
    }
}
?>