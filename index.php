$dompdf = new Dompdf();
$dompdf->set_option('isRemoteEnabled', TRUE);
$dompdf->loadHTML($code);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$output = $dompdf->output();
$invoicename = time() . '.pdf';
$file_to_save = 'website/villa_pdf/' . $invoicename;
if (file_put_contents($file_to_save, $output)) {
    // $dompdf->stream($file_to_save, array("Attachment" => true));
}
