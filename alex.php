<?php
    session_start();
function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


function Get_File_Name ($path_to_analyse) {
	$arr = explode("\\", $path_to_analyse, 5);
	$lenght = $arr.lenght;
	debug_to_console("lenght = "+$lenght);
	$filename = $arr[$lenght];
	debug_to_console("filename = "+$filename);	
	return $filename;	
}


	$dossier_source = 'pdfmodule\evidence\_evi_cj\_evi_cj_p\_evi_cj_p_rem_alu_FDES_opaque.pdf';
	$fichier = Get_File_Name($dossier_source);
	debug_to_console("fichier = "+$fichier);	
    $destination = 'zip_fiches_techniques\\'+$fichier;
	copy($source, $destination); 

?>