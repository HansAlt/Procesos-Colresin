<?php
$serverName = "ALTMANN\sqlexpress"; //ALTMANN\instanceName
$connectionInfo = array( "Database"=>"Procesos", "UID"=>"userName", "PWD"=>"password");
$conn = sqlsrv_connect( $ALTMANN, $connectionInfo);

if( $conn ) {
     $_GRABAR_SQL = "INSERT INTO $NFO (CodProceso,NumeroLote,CodEquipo, FLukas, ContOlor, nan000, swf098, stw000, fd0037, myo000, stw0002, stw0003, matprifp04, matprimazonasep, ReactorLimpio, HermeticidadReactor, ReactorFunciona, VacioFunciona, VaporFunciona, EnfriamientoFunciona, PhSodaTanque, CondensadorFunciona, ApruebaInicio, RazonesNoAprob, EquipoNaftaleno, SeguridadNaftaleno, enfcerrado, HoraInicioCargaNaf, HoraFinCargaNaf, valvbloqueo, abrircontroles, HoraInicioFusionNaf, estartazos, temp1, presion1, HoraFinFusionNaf, AgitadorOK, problemafund, problemafundirNaf, SeguridadSulfurico, EquipoSulfurico, HoraInicioCargaSwfo, HoraFinCargaSwfo, cierrecontrololores, HoraInicioCargaSwfo2, HoraFinCargaSwfo2, tempswfo1, presionswfo1, vapor, HoraInicioSostenerTemp, temphr1, presionhr1, temphr2, presionhr2, temphr3, presiohr3, HoraFinSostenerTemp, problemaswfo, ProblemasSFWO, enfriarok, tempenfriado, presionenfriado, tempadicionstw, presionadicionstw, evacuarcamisa, suministrovapor, segformolmetanol, equipoformolmetanol, lineatierraok, bombaneumatica, mangueraok, conexionok, lineacargook, valvulascerradas, capacidadtanque, HoraInicioAdc, tempadc1, presionadc1, comentarioadc1, tempadc2, presionadc2, comentarioadc2, tempadc3, presionadc3, comentarioadc3, tempadc4, presionadc4, comentarioadc4, tempadc5, presionadc5, comentarioadc5, HoraFinAdc, HoraInicioReac, tempreac1, presionreac1, comentarioreac1, tempreac2, presionreac2, comentarioreac2, tempreac3, presionreac3, comentarioreac3, tempreac4, presionreac4, comentarioreac4, tempreac5, presionreac5, comentarioreac5, tempreac6, presionreac6, comentarioreac6, tempreac7, presionreac7, comentarioreac7, HoraFinReac, problemareac, ProblemaReaccion, HoraInicioAdcStw2, tempadcstw2, presionstw2, HoraFinAdcStw2, SeguridadSoda, EquipoSoda, HoraInicioNeut, tempneut1, presionneut1, comentarioneut1, tempneut2, presionneut2, comentarioneut2, tempneut3, presionneut3, comentarioneut3, tempneut4, presionneut4, comentarioneut4, HoraFinNeut, HoraInicioHomoge, temphomoge1, presionhomoge1, comentariohomoge1, HoraFinHomoge, olorformol, csc050adicional, temp85, HoraInicioStw85, HoraFinStw85, ph10, csc050ajuste, stw000ajuste, ph10fin, productobrillante, HoraInicioLukas, HoraFinLukas, productobrillante2, HoraFinProceso, SegNFO, EquipoNFO, agitacionoff, talegodescarga, HoraInicioDescarga, HoraFinDescarga, residuotalego, enviarmuestrafinal, Aspecto, SolidosPorcentaje, ph10final, solubilidad10, solubilidad40, procesodif, HoraInicioLavado, kenjuague, kglavado, HoraFinLavado) VALUES ('$nombre', '$email', '$fecha', '$hora')"; 
    mysql_query($_GRABAR_SQL);

}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>